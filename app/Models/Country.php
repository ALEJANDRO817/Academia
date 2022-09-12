<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name_departament'];
    public function departaments(){
        return $this->hasMany(Departamento::class);
    }
}
