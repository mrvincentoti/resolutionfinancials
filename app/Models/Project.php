<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_title',
        'sector_id',
        'phase_id',
        'location',
        'value',
        'last_update',
        'project_need',
        'description_of_asset',
        'description_of_service',
        'rationale_for_selection',
        'stakeholder_consultations',
        'slug',
        'lga_id',
        'project_image',
        'screening_report',
        'supervising_authority'
    ];

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn($value) => Carbon::parse($value)->diffForHumans()
        );
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function phase()
    {
        return $this->belongsTo(Phase::class);
    }

    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
}
