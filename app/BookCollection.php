<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookcollection extends Model
{   
    protected $guarded =[];
     
    public function books()
   	{
   		return $this->belongsToMany(Book::class);
   	}

   	 public function templates()
   	{
   		return $this->belongsToMany(Template::class);
   	}
   
}
