<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Cursos_prod;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\BulkStoreCursoRequest;
use App\Http\Resources\V1\CursoResource;
use App\Http\Resources\V1\CursoCollection;
use App\Services\V1\CursoQuery;
use App\Http\Requests\V1\StoreCursoRequest;
use App\Http\Requests\V1\UpdateCursoRequest;
use Illuminate\Support\Arr;

class ApiCursoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new CursoQuery();
        $queryItems = $filter->transform($request); // [['column', 'operator', 'value']]

        if(count($queryItems) == 0) {
            return new CursoCollection(Cursos_prod::paginate());
        } else {
            return new CursoCollection(Cursos_prod::where($queryItems)->paginate());
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCursoRequest $request)
    {
        return new CursoResource(Cursos_prod::create($request->all()));
    }

    public function bulkStore(BulkStoreCursoRequest $request)
    {
        Cursos_prod::insert($request->toArray());
    }

    /**
     * Display the specified resource.
     * 
     * @param \App\Models\Cursos_prod
     * @return \Illuminate\Http\Response
     */
    public function show(Cursos_prod $curso)
    {
        return new CursoResource($curso);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCursoRequest $request, Cursos_prod $curso)
    {
        $curso->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
