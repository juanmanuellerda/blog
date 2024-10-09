<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /* @use HasFactory<\Database\Factories\BlogFactory>
    
    protected $table = "users"; /*-----> con esta linea quito la convención de usar la tabla que se llama igual que 
                                      el modeo pero en plural (tabla "blogs") ahora la tabla que se manejara
                                      será la tabla "users" 
    */
    use HasFactory;
}
