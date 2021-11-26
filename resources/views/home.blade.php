@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 style="text-align: center">{{ __('Latest HeartBeats') }}</h3>
                    <br>
                    <table class="table">
                    <tr>
                        <th class="px-2">Device No.</th>
                        <th class="px-2">Time</th>
                        <th class="px-2">Snr</th>
                        <th class="px-2">Station</th>
                        <th class="px-2">Data</th>
                        <th class="px-2">Avg. Snr</th>
                        <th class="px-2">Latitude</th>
                        <th class="px-2">Longitude</th>
                        <th class="px-2">RSSI</th>
                        <th class="px-2">Seq. No</th>
                    </tr>
                    @if (count($heartbeats) > 0)
                    @foreach($heartbeats as $heartbeat)
                        <tr>
                            <td class="px-2"><h6><strong>{{ $heartbeat->device }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->time }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->snr }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->station }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->data }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->avgSnr }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->lat }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->lng }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->rssi }}</strong></h6></td>
                            <td class="px-2"><h6><strong>{{ $heartbeat->seqNumber }}</strong></h6></td>
                        </tr>
                @endforeach
            </table>
            @else 
                <h3 class="mr-lg-5 mt-5 mb-5" style="text-align: center">No HeartBeats Data Yet</h3>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
