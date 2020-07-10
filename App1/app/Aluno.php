<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    public function estados()
    {
        return $this->hasOne(Estados::class);
    }
    public function empresas()
    {
        return $this->hasOne(Candidatos::class);
    }
}
