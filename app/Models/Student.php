<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['document_type', 'document_number', 'identify_document',
     'document_issunig_country', 'shipping_departament', 'municipality_expedition',
     'expedition_date', 'names', 'last_name', 'second_last_name', 'gender', 'date_birth',
     'country_birth', 'departament_birth', 'municipality_birth', 'stratum'];
    use HasFactory;

}
