<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ice_cream_shopController extends Controller
{
    public function totalIceCream($option){
        $topping = '';
        $toppingPrice = 0;
        $iceValue = 3000;
        $totalPayable = 0;

        if($option == 1){
            $topping = 'Chocolate';
            $toppingPrice = 500;
        }
        else if($option == 2){
            $topping = 'Brownie';
            $toppingPrice = 1000;
        }
        else if($option == 3){
            $topping = 'Delicatessen';
            $toppingPrice = 1500;
        }
        else{
            $option != 1 && $option != 2 && $option != 3;
            return 'Opción no válida';
        }

        $totalPayable = $toppingPrice + $iceValue;
        return 'El topping seleccionado es: ' . $topping . '. ' . 'Y el total a pagar es: $' . $totalPayable;
    }
}

