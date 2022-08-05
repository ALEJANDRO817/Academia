<?php

namespace App\Http\Controllers;

use Hamcrest\Type\IsNumeric;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Totals;

class PriceController extends Controller
{
    public function discount($price){

        $value = $price;
        $totalPayable = 0.0;
        $stringDesc = '';

        if(is_numeric($price) && $price >= 100){ //if principal

            if($price > 0 && $price < 100000){
                return 'Este producto no tiene descuento';
            }
            else if($price > 100000 && $price <= 150000){
                $desc = 0.02;
                $stringDesc = '2%';
            }
            else if($price > 150000 && $price <= 300000){
                $desc = 0.03;
                $stringDesc = '3%';
            }
            else if($price > 300000 && $price <= 500000){
                $desc = 0.04;
                $stringDesc = '4%';
            }
            //Nuevo rango de precio

            else if($price > 500000){//Rango de precio superior
                $desc = 0.05;
                $stringDesc = '5%';
            }

            $totalPayable = $price - ($price * $desc);
            return'El descuento del producto es del ' . $stringDesc . ', ' . 'y el total a pagar es: $' . $totalPayable;

        } //cierra if principal
        else{
            return 'El valor ingresado es incorrecto. Inténtelo nuevamente';
        }
    }

    public function getIva($name, $price){
        $iva = config("constants.iva");
        $priceIva = $price * $iva;
        $totalPayable = $price + $priceIva;

        return 'El articulo ' . $name . ' ' . 'sin IVA cuesta: $' . $price . ' y el precio del IVA es de: $' . $priceIva . '. ' . 'El total a pagar por el artículo es de: $' . $totalPayable;
    }
}
