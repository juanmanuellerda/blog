<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class DatabaseSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog = new Blog(); //esto lo hago para creer un usuario conocido, los demas son generados aleatoriamente por factory

        $blog->nickname = 'V8';
        $blog->name = 'Juan Manuel';
        $blog->lastname = 'Lerda';
        $blog->email ='jmlerda@gmail.com';
        $blog->password =bcrypt('123456');
    
        $blog->save();

        //Blog::factory(5)->create();
    }
}
