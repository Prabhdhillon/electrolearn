<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = "course";

    protected $guarded = [];

    function videos()
    {
        return $this->hasMany(Video::class, "course_id");
    }
}
