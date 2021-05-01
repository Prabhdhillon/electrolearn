<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "course";

    protected $guarded = [];


    public function getRouteKeyName()
    {
        return "slug";
    }

    function videos()
    {
        return $this->hasMany(Video::class, "course_id");
    }

    function user()
    {
        return $this->belongsTo(User::class, "author_id");
    }
}
