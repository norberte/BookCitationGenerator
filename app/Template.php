<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $guarded = [];

    // laravel uses "snake case" which automatically looks for the plural of the table
    // since ours is not plural, we can specify a custom table it will look for. In this case, ours is book
    protected $table = 'template';

    protected $tname;
    protected $position = [];
    protected $attribute = [];
    protected $attributeStyle = [];
    protected $keyword = [];
    protected $keywordStyle = [];

}
