<?php

use App\Models\Cursos_prod;
use Illuminate\Support\Number;
use App\Models\Parcelas_model;


class Methods {
    public static function divided(float $price, Parcelas_model $installments, Cursos_prod $course) {
        $table = explode(',', $installments->quantidade); //[6.0, 9.0, 12.0, 15.0, 18.0, 20.0, 24.0]
        $price_str = [];
        if(!empty($course->desconto)){
            $descounts = explode(',', $course->desconto);
            for ($i = 0; $i < count($table); $i++){
                // primeiro é aplicado o desconte se ele existir no objeto
                $temp_price = $price - ($price*$descounts[$i]);
                // fazemos a divisão para receber o valor da parcela
                $float_value = ($temp_price/floatval($table[$i]));
                // formatamos o valor para arredondar
                $formatted_value = floor($float_value * 100) / 100;
                // formatamos o número para a moeda BRL reais
                $value = Number::currency($formatted_value, in: 'BRL', locale: 'pt-br');
                // adiciona o valor no array
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
        // chama função para renderizar conteúdo
        UI::render($course, $descounts, $table, $price_str);
        
    }
}

class UI {
    public static function render(Cursos_prod $course, array $descounts, array $table, array $price_str){
       
        echo '<p>Converse com um de nossos atendentes para obter mais detalhes</p>';

        // faz o display dos valores (!SOLID)
        for ($i = 0; $i < count($table); $i++){
            echo '<p>'. floatval($table[$i]) . 'X ' . $price_str[$i] . '</p>';
        }
    }
}