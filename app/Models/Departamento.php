<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_country_belongs'];

    public function countries(){
        return $this->belongsTo(Country::class);
    }
    public function municipalities(){
        return $this->hasMany(Municipality::class);
    }
}
