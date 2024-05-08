<?php


use Illuminate\Support\Number;
use App\Models\Parcelas_model;


class Methods {
    public static function divided(float $price, Parcelas_model $installments) {
        $fees = explode(',', $installments->juros);
        $table = explode(',', $installments->quantidade); //[6.0, 9.0, 12.0, 15.0, 18.0, 20.0, 24.0]
        $price_str = [];
        $unique_price = Number::currency($price, in: 'BRL', locale: 'pt-br');
        for ($i = 0; $i < count($table); $i++){
            $temp_price = $price + ($price*$fees[$i]);
            $value = Number::currency(($temp_price/floatval($table[$i])), in: 'BRL', locale: 'pt-br');
            array_push($price_str, $value); 
        }
        echo <<<UNQ
         UNQ;
        for ($i = 0; $i < count($table); $i++){
            echo '<p>'. floatval($table[$i]) . 'X ' . $price_str[$i] . '</p>';
        }
    }
}