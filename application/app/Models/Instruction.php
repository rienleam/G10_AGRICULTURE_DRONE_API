<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;
    protected $fillable = [
        'speed',
        'altitude',
        'action',
        'datetime',
        'drone_id',
        'plan_id',
    ];
    
    public function drones()
    {
        return $this->belongsTo(Drone::class);
    }
}
