<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name_subject', 'timetable'];

    public function courses(){
        return $this->belongsTo(Course::class);
    }
    public function teachers(){
        return $this->hasMany(Teacher::class);
    }
}
