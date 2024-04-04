<?php

namespace App\Models;
use App\Models\Sinonimo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    use HasFactory;
    public function sinonimos()
    {
        return $this->belongsToMany(Sinonimo::class, 'palabra_sinonimo', 'palabra_id', 'sinonimo_id');
    }
}
