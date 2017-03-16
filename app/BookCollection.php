<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookcollection extends Model
{
    public function books()
   	{
   		return $this->belongsToMany(Book::class);
   	}
}
