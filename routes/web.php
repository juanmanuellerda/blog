<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\HomeController;

use App\Http\Controllers\SaludoController;
use App\Models\Blog;

Route::controller(SaludoController::class)->group(function() {  //
    Route::get('/', 'index');
    Route::get('/pagina1', 'pagina1');
    Route::get('/pagina2/{mensaje?}', 'pagina2');

    });

    Route::get('/prueba', function(){
        
    /*      creo una nueva fila de la tabla      */

        // $blog = new Blog; //instancia del objeto
        // $blog->nickname = 'Vfdg8 RTytr dfF';
        // $blog->name = 'Juan Manuel';
        // $blog->lastname = 'Lerda';
        // $blog->email = 'jmlerda@Lerda.com';
        // $blog->password = '123456';
        // $blog->save();
        // return $blog;

    /*    busco una fila y la edito en la tabla      */

        $blog = Blog::where('id','14')->first();
        //$blog->nickname= 'Ve8';
        //$blog->save();
        return $blog;
        
    /*    busco una fila y elimino una fila en la tabla      */
        
        //$blog = Blog::where('id','>=','5')->get();
        // $blog = Blog::find(8)->delete();
        // $blog = Blog::all();
        // return $blog;


    });


    

// Route::get('/', function () {
//      return "Hola soy la pagina Home!!";
//  });

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