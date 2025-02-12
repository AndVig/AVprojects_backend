<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tecnologia extends Model
{
    public function progetti()
    {
        return $this->belongsToMany(Progetto::class, 'progetto_tecnologia');
    }
}
