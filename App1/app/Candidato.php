<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidatos extends Model
{
    public function user()
    {
        return $this->belongsToMany(Trabalhos::class);
    }
    public function empresas()
    {
        return $this->belongsTo(Alunos::class);
    }
}
