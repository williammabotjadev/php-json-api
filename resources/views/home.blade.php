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
                    <table>
                    @if (count($heartbeats) > 0)
                    @foreach($heartbeats as $heartbeat)
                        <tr>
                            <td class="px-5"><h6><strong>{{ $heartbeat->device }}</strong></h6></td>
                            <td class="px-5"><h6><strong>{{ $heartbeat->time }}</strong></h6></td>
                        </tr>
                @endforeach
            </table>
            @else 
                <h3 class="mt-5 mb-5">No HeartBeats Data Yet</h3>
            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
