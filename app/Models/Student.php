<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['Document_type', 'document_number', 'identify_document','issuing_municipality',
     'id_expedition_date', 'names', 'first_last_name', 'second_last_name', 'gender', 'birth_date',
     'id_birth_municipality', 'stratum'];

    public function municipalities(){
        return $this->belongsTo(Municipality::class);
    }
    public function courses(){
        return $this->belongsTo(Course::class);
    }
    public function teachers(){
        return $this->belongsTo(Course::class);
    }




}
