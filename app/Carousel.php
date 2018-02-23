<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome', 'descricao', 'imagem', 'ativo','viagens_id'
    ];

    public function viagem()
    {
    	return $this->belongsTo('App\Viagem','viagens_id');
    }
}
