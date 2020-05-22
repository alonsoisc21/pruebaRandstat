<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use Notifiable;

    protected $fillable = [
        'id', 'descripcion', 'estado'
    ];
    public function scopelstareas($query, $estado){
      	return $query -> select('id','descripcion')
        ->where('estado', $estado)
        ->get();
    }
}
