<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artigo extends Model
{
    protected $table = 'artigos';
    protected $fillable = [
        'titulo', 'resumo', 'descricao', 'title_thumb', 'alt_thumb', 'thumb', 'title_capa', 'alt_capa', 'capa', 'ativo'
    ];
    
}
