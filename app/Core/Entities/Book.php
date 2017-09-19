<?php

namespace App\Core\Entities;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table='books'; // indica la tabla sobre la que se va a trabajar
    protected $fillabel=['title','description','picture','category_id']; // maching entre vista y controlador
    
    public function category(){
      return $this->belongsto(Category::class,'category_id' );

    }

}
