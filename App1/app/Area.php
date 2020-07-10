<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Areas extends Model
{
    public function trabalhos()
    {
        return $this->belongsTo(Trabalhos::class);
    }
}
