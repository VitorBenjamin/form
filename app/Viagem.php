<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Viagem extends Model
{
    protected $table = 'viagens';
    protected $fillable = [
        'titulo', 'descricao', 'foto', 'thumb', 'especial', 'categorias_id','continente_id'
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
        return $this->belongsTo('App\Continente','continente_id');
    }
}
