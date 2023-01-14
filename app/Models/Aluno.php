<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nascimento',
        'sexo',
        'turma_id',
    ];

    protected $casts = [
        'nascimento' => 'date:d/m/Y',
    ];

    // protected $hidden = [
    //     'created_at',
    //     'updated_at',
    // ];

    protected $visible = [
        'id',
        'nome',
        'nascimento',
        'sexo',
        'turma_id',
        'turma',
    ];

    public function turma(): BelongsTo
    {
        return $this->belongsTo(Turma::class);
    }
}
