<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arquitetura extends Model
{
    use HasFactory;
    public function compatibilidade(){

        return $this->hasMany(Compatibilidade::class);

    }
}
