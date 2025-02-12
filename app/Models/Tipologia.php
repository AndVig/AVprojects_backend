<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipologia extends Model
{
    public function progetti()
    {
        return $this->hasMany(Progetto::class);
    }
}
