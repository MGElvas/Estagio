<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicoes extends Model
{

    public function trabalhos()
    {
        return $this->belongsTo(Trabalhos::class);
    }
}