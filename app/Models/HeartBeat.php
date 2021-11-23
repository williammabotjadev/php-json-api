<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeartBeat extends Model
{
    use HasFactory;

    protected $fillable = [
       "device",
       "time",
       "snr",
       "station",
       "data",
       "avgSnr",
       "lat",
       "lng",
       "rssi",
       "seqNumber"
    ];
}
