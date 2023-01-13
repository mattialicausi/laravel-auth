<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Device;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $projects = Project::all();
        $technologies = Technology::all();
        $devices = Device::all();

        return view('admin.projects.index', compact('projects', 'technologies', 'devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $technologies = Technology::all();
        $devices = Device::all();
        return view('admin.projects.create', compact('technologies', 'devices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->validated();
        $slug = Project::generateSlug($request->title);

        $data['slug'] = $slug;

        if ($request->hasFile('thumb1') || $request->hasFile('thumb2')) {

            $path1 = Storage::disk('public')->put('project_images1', $request->thumb1);
            $path2 = Storage::disk('public')->put('project_images2', $request->thumb2);

            $data['thumb1'] = $path1;
            $data['thumb2'] = $path2;
        }

        $new_project = Project::create($data);

        if($request->has('devices')){
            $new_project->devices()->attach($request->devices);
        }
        return redirect()->route('admin.projects.show', $new_project->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(Project $project)
    {
        $technologies = Technology::all();
        $devices = Device::all();
        return view('admin.projects.edit', compact('project', 'technologies', 'devices'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $data = $request->validated();
        $slug = Project::generateSlug($request->title);
        $data['slug'] = $slug;

        if ($request->hasFile('thumb1') || $request->hasFile('thumb2')) {

            if ($project->thumb1 || $project->thumb2) {
                Storage::delete($project->thumb1 || $project->thumb2);
            }

            $path1 = Storage::disk('public')->put('project_images1', $request->thumb1);
            $path2 = Storage::disk('public')->put('project_images2', $request->thumb2);

            $data['thumb1'] = $path1;
            $data['thumb2'] = $path2;
        }

        $project->update($data);

        if($request->has('devices')){
            $project->devices()->sync($request->devices);
        }

        return redirect()->route('admin.projects.index')->with('message', "$project->title updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     */
    public function destroy(Project $project)
    {

        if($project->thumb1 || $project->thumb2) {
            Storage::delete($project->thumb1 || $project->thumb2);
        }

        $project->delete();
        return redirect()->route('admin.projects.index')->with('message', "$project->title deleted successfully");
    }

}
