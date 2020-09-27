<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $fillable=[
        "titulo","contenido","user_id"
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }

    public function comentarios(){
        return $this->hasMany('App\Models\Comentario','entrada_id','id');
    }

}
