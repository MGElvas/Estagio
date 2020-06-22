<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estados extends Model
{
    public function alunos()
    {
        return $this->belongsTo(Alunos::class);
    }
    public function empresas()
    {
        return $this->belongsTo(Empresa::class);
    }
}
