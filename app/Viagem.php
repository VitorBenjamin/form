<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'descricao', 'categorias_id'
    ];
    
    /** Consulta a imagem da Viagem
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function imgs()
    {
        return $this->belongsToMany('App\Img','viagem_imgs','viagems_id','imgs_id');
    }
    /** Consulta a Categoria da Viagem
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categorias_id');
    }
}
