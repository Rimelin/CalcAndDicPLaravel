<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sinonimo extends Model
{
    use HasFactory;
    public function palabras()
    {
        return $this->belongsToMany(Palabra::class, 'palabra_sinonimo', 'sinonimo_id', 'palabra_id');
    }
}
