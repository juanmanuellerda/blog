<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
        
    /*protected $table = "users"; /*-----> Si utilizo la convencion de usar la tabla que se llama igual que 
                                      el modelo pero en plural ==> tabla "blogs" y modelo "Blogs" no hace falta
                                      escribir la linea de la izquierda. 
                                      Con esa linea se aclara que la tabla que se manejara será la tabla "users" 
                                      que no coincide con el nombre del modelo*/
   
    protected function nickename(): Attribute 
    {
        return Attribute::make(
            get: fn ($value) => ucwords($value), //ACCESOR: solo lo modifica para muestrarlo no altera la base de datos
            set: fn ($value) => strtolower($value), //MUTADOR: lo modifica y lo guarda en la base de datos
            
        );
    }  
}
