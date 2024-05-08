<?php

namespace App\Http\Controllers;

use App\Models\Cursos_prod;
use App\Models\Parcelas_model;
use App\Models\Review_model;
use App\Models\whatsAppLink_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    public function index()
    {
        return view('home');
    }

    //rota de um unico curso
    public function curso(Cursos_prod $thisCurso)
    {
        $parcelas = Parcelas_model::find(2); //curso
        
        return view('curso', compact('thisCurso', 'parcelas'));
    }

    public function cursoCL(Cursos_prod $thisCurso)
    {
        $parcelas = Parcelas_model::find(1); //curso
        
        return view('cursoCL', compact('thisCurso', 'parcelas'));
    }

    // TODO: refactor das funções de paginas, fazer novo filtro para entregar apenas cursos referentes a area
    // rotas dos cursos
    public function page_posgraduacoes()
    {
        return view('cursos.posgraduacoes', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), null)
                ->paginate(5),
        ]);
    }

    public function page_engenharia()
    {
        return view('cursos.engenharia', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['engenharia'])
                ->paginate(5),
        ]);
    }

    public function page_saude()
    {
        return view('cursos.saude', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['saude'])
                ->paginate(5),
        ]);
    }

    public function page_educacao()
    {
        return view('cursos.educacao', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['educacao'], 0)
                ->paginate(5),
        ]);
    }

    public function page_tecnologia()
    {
        return view('cursos.tecnologia', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['tecnologia'], 0)
                ->paginate(5),
        ]);
    }

    public function page_direito()
    {
        return view('cursos.direito', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['direito'], 0)
                ->paginate(5),

        ]);
    }

    public function page_gestao()
    {
        return view('cursos.gestao-de-negocios', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['gestao-e-negocios'], 0)
                ->paginate(5),

        ]);
    }

    public function page_psicologia()
    {
        return view('cursos.psicologia', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), ['psicologia'], 0)
                ->paginate(5),

        ]);
    }

    public function page_corporativa()
    {
        return view('cursos.educacao-corporativa', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), request(['search'], 0))
                ->paginate(5),

        ]);
    }

    public function page_aperfeicoamento()
    {
        return view('cursos.aperfeicoamento', [
            'cursos' => Cursos_prod::orderBy('nome', 'asc')
                ->filter(request(['search']), request(['search']), 1)
                ->paginate(5),

        ]);
    }
}
