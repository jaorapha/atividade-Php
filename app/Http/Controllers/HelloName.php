<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HelloName extends Controller
{
    public function showFullName($name,$lastName){
        return view('helloName' , ['name'=> $name, 'lastName'=>$lastName]);
    }
}

?>php
