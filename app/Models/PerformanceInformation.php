<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceInformation extends Model
{
    use HasFactory;
    protected $fillable = ['key_performance_indicators', 'performance_failures','performance_assessment','project_id'];
}
