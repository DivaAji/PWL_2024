<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Hello World';
       }

    //    public function greeting(){
    //     return view('blog.hello', ['name' => 'Diva']);
    //     }

    public function greeting(){
        return view('blog.hello')
        ->with('name','Diva')
        ->with('occupation','Programmer');
        }
}
