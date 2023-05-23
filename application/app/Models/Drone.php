<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drone extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'drone_type',
        'battery_status',
        'payload_capacity',
        'current_latitude',
        'current_longitude',
    ];
}
