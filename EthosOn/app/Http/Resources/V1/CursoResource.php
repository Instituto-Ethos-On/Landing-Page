<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CursoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'area' => $this->area,
            'apresentacao' => $this->apresentacao,
            'objetivo' => $this->objetivo,
            'conteudo' => $this->conteudo,
            'cl' => $this->cl,
            'duracao' => $this->duracao,
            'total' => $this->total,
            'preco' => $this->preco,
            'image' => $this->image,
            'link' => $this->link,
            'desconto' => $this->desconto
        ];
    }
}
