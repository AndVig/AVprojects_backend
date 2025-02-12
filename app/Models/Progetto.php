<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Progetto extends Model
{
    public function tipologia()
    {
        return $this->belongsTo(Tipologia::class);
    }

    public function tecnologie()
    {
        return $this->belongsToMany(Tecnologia::class, 'progetto_tecnologia');
    }
}
