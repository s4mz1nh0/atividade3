<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = ['nome', 'desenvolvedora', 'link'];

    //protected $primarykey = 'gameId';

    //public $timestamps = false;

    public function compatibilidade(){

        return $this->hasMany(Compatibilidade::class);

    }
}
