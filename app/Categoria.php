<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'nome', 'thumb', 'capa','descricao','tag','ativo'
    ];

    public function viagem()
    {
    	return $this->hasMany('App\Viagem','categoria_id');
    }
}
