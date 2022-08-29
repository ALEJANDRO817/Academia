<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
    protected $fillable = ['id', 'name_municipalitie', 'id_departament_belongs'];
    use HasFactory;
}
