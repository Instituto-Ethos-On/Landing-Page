<?php


use Illuminate\Support\Number;



class Methods {
    public static function divided(float $price, string $installments) {

        $table = explode(',', $installments); //[6.0, 9.0, 12.0, 15.0, 18.0, 20.0, 24.0]
        $price_str = [];
        $unique_price = Number::currency($price, in: 'BRL', locale: 'pt-br');
        foreach ($table as $d){
            $value = Number::currency(($price/floatval($d)), in: 'BRL', locale: 'pt-br');
            array_push($price_str, $value); 
        }
        echo <<<UNQ
         UNQ;
        for ($i = 0; $i < count($table); $i++){
            echo '<p>'. floatval($table[$i]) . 'X ' . $price_str[$i] . '</p>';
        }
    }
}