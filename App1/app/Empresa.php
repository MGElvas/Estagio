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
}
