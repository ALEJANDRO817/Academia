<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['document_type', 'document_number',
     'identify_document', 'expedition_date', 'id_issuing_municipalityy', 'name', 'first_last_name', 'second_last_name', 'gender', 'birth_date',
     'birth_municipality', 'stratum', 'id_course'];

    public function municipalities(){
        return $this->belongsTo(Municipality::class);
    }
    public function courses(){
        return $this->belongsTo(Course::class);
    }


}
