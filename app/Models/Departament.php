<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departament extends Model
{
    protected $fillable = ['name_departament', 'id_country_belongs'];
    use HasFactory;
}
