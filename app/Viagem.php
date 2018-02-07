<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table = 'viagens';
    protected $fillable = [
        'titulo', 'descricao', 'title_thumb', 'alt_thumb','title_foto', 'alt_foto', 'foto', 'thumb', 'especial', 'categorias_id','continentes_id','ativo'
    ];
    
    /** Consulta a imagem da Viagem
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    // public function imgs()
    // {
    //     return $this->belongsToMany('App\Img','viagem_imgs','viagems_id','imgs_id');
    // }
    /** Consulta a Categoria da Viagem
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categorias_id');
    }
    public function continente()
    {
        return $this->belongsTo('App\Continente','continentes_id');
    }
    public function carousel()
    {
        return $this->hasMany('App\Carousel','viagens_id');
    }
    public function imgs()
    {
        return $this->hasMany('App\Img','viagens_id');
    }
}
