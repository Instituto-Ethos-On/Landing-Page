<?php

use App\Models\Cursos_prod;
use App\Models\Parcelas_model;


class PaymentTest extends \PHPUnit\Framework\TestCase {
    public function testRender(){
        $course = Cursos_prod::find(274);
        $instalments_obj = Parcelas_model::find(2);
        $instalments = $instalments_obj->quantidade;
        $price = $course->preco;


        $Payment = new App\libraries\PaymentMethods;

        $result = $Payment->divided($price, $instalments, $course);

        $this->assertEquals("<p>Converse com um de nossos atendentes para obter mais detalhes</p><p>6X R$&nbsp;321,83</p><p>9X R$&nbsp;214,56</p><p>12X R$&nbsp;160,91</p><p>15X R$&nbsp;128,73</p><p>18X R$&nbsp;107,28</p><p>20X R$&nbsp;101,37</p><p>24X R$&nbsp;84,48</p>", $result);


    }
}