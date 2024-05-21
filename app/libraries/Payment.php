<?php

namespace App\libraries;

use App\Models\Cursos_prod;
use Illuminate\Support\Number;
use App\Models\Parcelas_model;


class PaymentMethods {
    public static function divided(float $price, Parcelas_model $installments, Cursos_prod $course) {
        $table = explode(',', $installments->quantidade);
        $price_str = [];
        if(!empty($course->desconto)){
            $descounts = explode(',', $course->desconto);
            for ($i = 0; $i < count($table); $i++){
                $temp_price = $price - ($price*$descounts[$i]);
                $float_value = ($temp_price/floatval($table[$i]));
                $formatted_value = floor($float_value * 100) / 100;
                $value = Number::currency($formatted_value, in: 'BRL', locale: 'pt-br');
                array_push($price_str, $value); 
            }
        } else {
            for ($i = 0; $i < count($table); $i++){
                $float_value = $price / floatval($table[$i]);
                $formatted_value = round($float_value * 100) / 100;
                $value = Number::currency($formatted_value, in: 'BRL', locale: 'pt-br');
                array_push($price_str, $value);
            }
        }
        // Call the render method and store the returned content
        $rendered_content = PaymentsUi::render($course, $table, $price_str);

        // Return the rendered content
        return $rendered_content;
    }
}

class PaymentsUi {
    public static function render(Cursos_prod $course, array $table, array $price_str){
        // Initialize an empty string to store the rendered content
        $content = '';

        // Add introductory message
        $content .= '<p>Converse com um de nossos atendentes para obter mais detalhes</p>';

        // Display installment options
        for ($i = 0; $i < count($table); $i++){
            $content .= '<p>'. floatval($table[$i]) . 'X ' . $price_str[$i] . '</p>';
        }

        // Return the rendered content
        return $content;
    }
}
