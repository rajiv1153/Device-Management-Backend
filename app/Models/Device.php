<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'serial_number','enabled','description'];

    public function reports()
    {
        return $this->hasMany(DeviceReport::class,'device_id', 'id');
    }

    public function latestReport()
    {
        return $this->hasOne(DeviceReport::class,'device_id', 'id')->latest();
    }
    
}
