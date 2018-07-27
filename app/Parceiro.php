<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parceiro extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'parceiros';
    protected $fillable = [
    	'nome', 'thumb', 'title_thumb', 'alt_thumb', 'ativo'
    ];

}
