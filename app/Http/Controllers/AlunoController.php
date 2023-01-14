<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Response;
use App\Http\Resources\AlunoResource;
use App\Http\Resources\AlunoCollection;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AlunoCollection
     */
    public function index(): AlunoCollection
    {
        if (request()->query('relacao') === 'turma') {
            $alunos = Aluno::with('turma')->get();
        } else {
            $alunos = Aluno::get();
        }

        // return Aluno::all()->makeHidden('turma_id');
        // return Aluno::all()->makeVisible('created_at', 'updated_at');
        return new AlunoCollection($alunos);
        // return Aluno::all();
        // return Aluno::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AlunoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlunoRequest $request): Response
    {

        return response(Aluno::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno): AlunoResource
    {
        return new AlunoResource($aluno);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  AlunoRequest $request
     * @param  Aluno $aluno
     * @return Aluno
     */
    public function update(AlunoRequest $request, Aluno $aluno): Aluno
    {
        $aluno->update($request->all());

        return $aluno;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Aluno $aluno
     * @return response 204 No Content 
     */
    public function destroy(Aluno $aluno): Response
    {
        $aluno->delete();
        return response(null, 204);
    }
}
