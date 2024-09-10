<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMilestone extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description1', 'description2','description3','project_id', 'image'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
