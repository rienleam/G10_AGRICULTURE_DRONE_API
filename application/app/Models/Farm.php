<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'location',
        'size',
        'province_id',
    ];
    public function maps()
    {
        return $this->hasMany(Map::class);
    }
}
