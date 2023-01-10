<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Str;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = config('project.myprojects');

        foreach ($projects as $project) {
            $newProject = new Project();

            $newProject->title = $project['title'];
            $newProject->slug = Str::slug($newProject->title, '-');
            $newProject->description = $project['description'];
            $newProject->thumb1 = $project['thumb1'];
            $newProject->thumb2 = $project['thumb2'];
            $newProject->technology_used = $project['technology_used'];
            $newProject->url = $project['url'];

            $newProject->save();
        }
    }
}
