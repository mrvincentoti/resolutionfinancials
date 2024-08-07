<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Announcement extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'announcement_date', 'document','project_id','announcement_type_id', 'slug', 'content'];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function ($announcement) {
    //         $announcement->slug = Str::slug($announcement->title, '-');
    //     });
    // }
}
