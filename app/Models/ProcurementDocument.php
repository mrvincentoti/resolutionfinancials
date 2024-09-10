<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcurementDocument extends Model
{
    use HasFactory;
    protected $fillable = ['document_name', 'image1','image2','title','project_id'];
}
