<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeviceReport extends Model
{
    use HasFactory;
    protected $fillable = ['device_id','temperature', 'online','report_time','latitude','longitude'];

    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
