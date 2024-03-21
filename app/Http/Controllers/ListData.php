<?php

namespace App\Http\Controllers;


class ListData extends Controller   
{
    public function showData($name,$lastName,$age,$rm,$gender,$adress){
        return view('listData',['name'=>$name,'lastName'=>$lastName, 'age'=>$age, 'rm'=>$rm,'gender'=>$gender,'adress'=>$adress]);
    }

}