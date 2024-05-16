<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Cursos_prod extends Model
{
    protected $fillable = ['nome', 'area', 'apresentacao', 'objetivo', 'conteudo', 'cl', 'duracao', 'total', 'preco', 'desconto', 'link'];

    protected $table = 'Cursos_prod';

    public function path()
    {
        return url("/pos-graduacoes/{$this->id}-" . Str::slug($this->nome));
    }

    public function pathCL()
    {
        return url("/pos-graduacoes/CL/{$this->id}-" . Str::slug($this->nome));
    }

    public function scopeFilter($query, array $filters, array $customArea = null, int $CL = null)
    {
        $searchTerm = request('search');

        $query->where(function ($query) use ($searchTerm, $customArea, $CL) {
            if (!empty($searchTerm)) {
                $query->where(function ($query) use ($searchTerm) {
                    $query
                        ->where('nome', 'like', '%' . $searchTerm . '%')
                        ->orWhere('descricao', 'like', '%' . $searchTerm . '%')
                        ->orWhere('apresentacao', 'like', '%' . $searchTerm . '%');
                });
            }

            if (!empty($customArea) && (is_null($CL) || $CL == 0)) {
                $query->where(function ($query) use ($customArea) {
                    foreach ($customArea as $area) {
                        // Assuming $area is validated elsewhere
                        $query->orWhere('area', 'like', '%' . $area . '%')->where('cl', '!=', 1);
                    }
                });
            }
            if (!is_null($CL) && $CL == 1) {
                $query->where('cl', '1');
            }
        });
    }

    public static function find($id)
    {
        $cursos = self::all();

        foreach ($cursos as $curso) {
            if ($curso['id'] == $id) {
                return $curso;
            }
        }
    }
}   

