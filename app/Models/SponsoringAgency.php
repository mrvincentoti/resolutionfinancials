<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsoringAgency extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'simage','limage','project_id','content','years_of_experience'];
}
