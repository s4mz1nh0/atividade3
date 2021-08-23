<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compatibilidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'game_id',
        'sistema_id',
        'arquitetura_id',
        'processador',
        'video' ,
        'ram',
        'espaco'
    ];

    public function sistema(){

        return $this->belongsTo(Sistema::class);
        }
    public function arquitetura(){

        return $this->belongsTo(Arquitetura::class);
            }
    public function game(){

        return $this->belongsTo(Game::class);
                    }

}
