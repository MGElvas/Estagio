<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    /*
    public $timestamps=true;
    public $incrementing = true;
    const CREATED_AT='dtCriado';
    const UPDATED_AT='dtAtualizado';
    protected $keyType='int';
    protected $primaryKey='idEmpresa'; */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function especilidades()
    {
        return $this->hasMany(Especialidades::class);
    }
    public function estado()
    {
        return $this->hasOne(Estado::class);
    }
    public function trabalhos()
    {
        return $this->hasMany(Trabalhos::class);
    }
}
