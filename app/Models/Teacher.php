<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'Lastname', 'colelle_degree', 'age', 'contract_date', 'imagen', 'identity_document'];
    use HasFactory;
}
