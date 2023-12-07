<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use  App\Models\DeviceReport;
use  App\Models\Device;

use App\Http\Requests\ReportRequest;

class ReportController extends Controller
{
    public function index()
    {
        $devicereports = DeviceReport::all();
        return response()->json($devicereports);
    }
    public function show($id)
    {
        $device = Device::with('latestReport')->find($id);
        if($device){
            return response()->json($device);
        }
        return response()->json([
            'message' => 'Reports Not Found.',
        ], 404);
    }
    public function store(ReportRequest $request)
    {
        $report = DeviceReport::create($request->validated());
        return response()->json([
            'message' => 'Report Created Successfully',
        ], 200);
    }
}
