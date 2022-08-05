<?php

use Illuminate\Support\Facades\Route;
//Primero se invoca la clase con su ruta
// use App\Http\Controllers\MyController;
// use App\Http\Controllers\Ice_cream_shopController;
// use App\Http\Controllers\PriceController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('courses.welcome');
});

// Route::get('miruta', function(){
//     return 'Estoy en Laravel';
// });

// //Los parámetros van entre llaves
// Route::get('/minombre/{nombre}', function($nombre){
//     return 'Hola, soy ' . $nombre;
// });

// //La ruta se va a llamar suma. el resultado será: la suma de a + b es:
// Route::get('/suma/{a}/{b}', function($a, $b){
//     $result = $a + $b;
//     return 'La suma de a + b es: ' . $result;
// });

//Menciono la clase y el método como un array
//Debo usar la palabra reservada class
//El método va entre comilla simple
// Route::get('/routemultiply/{a}/{b}', [MyController::class, 'multiply']);

// Route::get('/iceCreamShop/{topping}', [Ice_cream_shopController::class, 'totalIceCream']);

// Route::get('/precio/{precio}', [PriceController::class, 'discount']);

// Route::get('/iva/{nombre}/{precio}', [PriceController::class, 'getIva'] );

Route::resource('courses', CourseController::class);

Route::get('/about_us', function () {
    return view('about_us');
});
