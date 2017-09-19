<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Category extends Model
{
    //
    use SoftDeletes; // se debe registrar para hacer un eliminado logico en caso de no poner esta linea se hace un eliminado fisico de la base
    protected $table='Categories'; // indica la tabla sobre la que se va a trabajar
    protected $fillabel=['name','description'];
    
    public function books(){

        return $this->hashMany(Book::Class,'category_id' );
    }

}
