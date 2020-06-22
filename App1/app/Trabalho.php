<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabalhos extends Model
{
    public function empresas()
    {
        return $this->belongsTo(Empresa::class);
    }
    public function candidatos()
    {
        return $this->hasMany(Candidatos::class);
    }
    public function areas()
    {
        return $this->hasMany(Areas::class);
    }
    public function localizacoes()
    {
        return $this->hasOne(Localizacoes::class);
    }
    public function condicoes()
    {
        return $this->hasOne(Condicoes::class);
    }

}
