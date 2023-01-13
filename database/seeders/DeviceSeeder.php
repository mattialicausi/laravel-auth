<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;
use Illuminate\Support\Str;



class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $devices = ['Single page application', 'Web site', 'Mobile Application'];

        foreach($devices as $device){
            $newDevice = new Device();
            $newDevice->name = $device;
            $newDevice->slug = Str::slug($newDevice->name, '-');
            $newDevice->save();
        }
    }
}
