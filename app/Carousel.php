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
    	'nome', 'descricao', 'ativo'
    ];

    public function imgs()
    {
    	return $this->hasMany('App\Img','carousels_id');
    }
}
