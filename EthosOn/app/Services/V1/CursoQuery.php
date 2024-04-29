<?php

namespace App\Services\V1;

use Illuminate\Http\request;

class CursoQuery {
    protected $safeParms = [
        'id' => ['eq', 'gt', 'lt'],
        'nome' => ['eq'],
        'area' => ['eq'],
        'apresentacao' => ['eq'],
        'objetivo' => ['eq'],
        'conteudo' => ['eq'],
        'cl' => ['eq'],
        'duracao' => ['eq', 'gt', 'lt'],
        'total' => ['eq', 'gt', 'lt'],
        'preco' => ['eq', 'gt', 'lt'],
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];

    public function transform(Request $request){
        $eloQuery = [];

        foreach($this->safeParms as $parm => $operators) {
            $query = $request->query($parm);

            if (!isset($query)) {
                continue;
            }

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$parm, $this->operatorMap[$operator], $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }
        
    
}