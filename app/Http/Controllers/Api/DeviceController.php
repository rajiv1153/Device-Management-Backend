<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use  App\Models\Device;
use App\Http\Requests\DeviceRequest;
class DeviceController extends Controller
{
    public function index()
    {
        $devices = Device::orderBy('created_at', 'desc')->get();
        return response()->json($devices);
    }

    public function store(DeviceRequest $request)
    {
        $device = Device::create($request->validated());
        return response()->json([
            'message' => 'Device Created Successfully',
        ], 200);
    }
    public function show($id)
    {
        $device = Device::find($id);
        if($device){
            return response()->json($device);
        }
        return response()->json([
            'message' => 'Device Not Found.',
        ], 404);
    }
    public function update(DeviceRequest $request, $id)
    {
        $device = Device::find($id);
        if(!$device){
            return response()->json([
                'message' => 'Device Not Found.',
            ], 404);
        }

        $device->update($request->validated());
        return response()->json([
            'message' => 'Device Successfully Updated.',
        ], 204);
    }

    public function destroy($id)
    {
        $device = Device::find($id);
        $device->delete();
        return response()->json([
            'message' => 'Device Successfully Deleted.',
        ], 204);
    }
}
