<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDeviceRequest;
use App\Http\Requests\UpdateDeviceRequest;
use App\Models\Device;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $devices = Device::all();
        return view('admin.devices.index', compact('devices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDeviceRequest  $request
     *
     */
    public function store(StoreDeviceRequest $request)
    {
        $val = $request->validated();
        $slug = Device::generateSlug($request->name);
        $val['slug'] = $slug;

        Device::create($val);

        return redirect()->back()->with('message', "Device $slug added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    // public function show(Device $device)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    // public function edit(Device $device)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeviceRequest  $request
     * @param  \App\Models\Device  $device
     *
     */
    public function update(UpdateDeviceRequest $request, Device $device)
    {
        $val_data = $request->validated();
        $slug = Device::generateSlug($request->name);
        $val_data['slug'] = $slug;
        $device->update($val_data);
        return redirect()->back()->with('message', "Device $slug updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     *
     */
    public function destroy(Device $device)
    {
        $device->delete();

        return redirect()->back()->with('message', "Device $device->name removed successfully");
    }
}
