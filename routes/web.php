<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

use App\Http\Controllers\SaludoController;

Route::controller(SaludoController::class)->group(function() {
    Route::get('/', 'index');
    Route::get('/pagina1', 'pagina1');
    Route::get('/pagina2/{mensaje?}', 'pagina2');
    });






// Route::get('/pagina1', function () {
//      return "Hola soy la pagina 1!!";
//  });

// Route::get('/pagina2', function () {
//     return "Hola soy la pagina 2!!";
// });

// Route::get('/pagina3/{mensaje}', function ($mensaje) {
//     return "El mensaje es: $mensaje!!!";
// });

// Route::get('/pagina3/{subpage?}/{mensaje?}', function ($subpage = null, $mensaje = null) {
//     if(!($subpage || $mensaje)) {
//         return "Hola soy la pagina 3!!";
//     }
//     else {
//         return "El mensaje es: $mensaje que envia: $subpage!!!";
//     }
    
// });