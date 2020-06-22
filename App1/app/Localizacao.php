<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacoes extends Model
{
    public function trabalhos()
    {
        return $this->belongsTo(Trabalhos::class);
    }
}
