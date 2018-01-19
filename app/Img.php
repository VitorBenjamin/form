<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo', 'alt'
    ];
}
