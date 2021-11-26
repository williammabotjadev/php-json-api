<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeartBeat;

class HeartBeatsController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $heartbeat_data = [
            'device' => $request['device'],
            'time' => $request['time'],
            'snr' => $request['snr'],
            'station' => $request['station'],
            'data' => $request['data'],
            'avgSnr' => $request['avgSnr'],
            'lat' => $request['lat'],
            'lng' => $request['lng'],
            'rssi' => $request['rssi'],
            'seqNumber' => $request['seqNumber']
        ];

        

        $heartbeat = HeartBeat::create($heartbeat_data);
        $heartbeat->save();

        $heartbeats = HeartBeat::all();

        return response()->json([
            "message" => "HeartBeat Captured"
        ]);
    }
}
