<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable=[
        "contenido","user_id","entrada_id"
    ];
    protected $table="comentarios";
    protected $primaryKey="id";

    public function user(){
        return $this->belongsTo('App\User','user_id','id');
    }
    public function entrada(){
        return $this->belongsTo('App\Models\Entrada','entrada_id','id');
    }
}
