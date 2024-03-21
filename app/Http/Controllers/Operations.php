<?php

namespace App\Http\Controllers;

class Operations extends Controller
{
    public function Sum($number1,$number2){
        $result = $number1 + $number2;
        return view('operations',['number1'=>$number1, 'number2'=>$number2,'result' => $result, 'type'=>'+']);
    }

    public function subtraction($number1,$number2){
        $result = $number1 - $number2;
        return view('operations', ['number1' => $number1,'number2'=>$number2,'result' => $result, 'type'=>'-']);
    }

    public function Multiplication($number1,$number2){
        $result = $number1 * $number2;
        return view('operations', ['number1'=>$number1, 'number2'=>$number2, 'result'=>$result, 'type'=>'X']);
    }

    public function division($number1,$number2){
        $result = 0;
        if($number1 == 0 || $number2 == 0){
           $result = 0;
        }else
        {
        $result  = $number1 / $number2;
        }
        return view('operations', ['number1' =>$number1,'number2'=>$number2,'result'=>$result, 'type'=>'/'],);
    }

}
