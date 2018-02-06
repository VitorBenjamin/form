<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dica extends Model
{
    protected $fillable = [
		'nome','tipo', 'descricao', 'ativo'
	];
}
