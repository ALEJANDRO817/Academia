<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function multiply($a, $b){
        return 'La multiplicación es: ' . $a * $b;
    }
}
