<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name', 'certificate', 'thumbnail', 
        'type', 'status', 'price', 
        'level', 'description', 'mentor_id'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d H:m:s',
        'updated_at' => 'datetime:Y-m-d H:m:s'
    ];

    public function mentors()
    {
        return $this->belongsTo(Mentor::class, 'mentor_id');
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'id');
    }

    public function images()
    {
        return $this->hasMany(ImageCourse::class, 'id');
    }
}
