<?php

namespace App\Http\Controllers;

class TableProduct extends Controller
{
    public function addProduct(){
    
        $products = 
        [
            [
                'description' => "Shampoo",
                'category' => 'Skala',
                'price' => 13.54
            ],

            [
                'description' => "Condicionador",
                'category' => "Skala",
                'price' => 12.25
            ],

            [
                'description' => "Desodorante",
                'category' => "Rexona",
                'price' => 12.12        
            ],
        ];

        $cont=0;

        return view('tableProducts')->with('products', $products)->with($cont);

   }
}