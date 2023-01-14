<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Services\LinksGenerator;

class AlunoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $links = new LinksGenerator;
        $links->get(route('alunos.show', $this->id), 'aluno_detalhes');
        $links->put(route('alunos.update', $this->id), 'atualizar_aluno');
        $links->delete(route('alunos.destroy', $this->id), 'deletar_aluno');


        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'nascimento' => $this->nascimento,
            'sexo' => $this->sexo,
            'turma' => new TurmaResource($this->whenLoaded('turma')),
            'links' => $links->toArray()
        ];
    }
}
