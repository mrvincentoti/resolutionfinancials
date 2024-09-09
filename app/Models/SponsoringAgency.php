<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsoringAgency extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'image','project_id', 'top_tag', 'description', 'point_one', 'point_two', 'point_three', 'point_four', 'short_description'];
}
