<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateKeyword extends Model
{
    protected $guarded = [];

    // laravel uses "snake case" which automatically looks for the plural of the table
    // since ours is not plural, we can specify a custom table it will look for. In this case, ours is book
    protected $table = 'templatekeywords';

    protected $tname;
    protected $position;
    protected $keyword;
    protected $keywordStyle;

    public function getTemplateName(){
        global $tname;
        return $tname;
    }

    public function setTemplateName($name){
        global $tname;
        $tname = $name;
    }

    public function getPosition(){
        global $position;
        return $position;
    }

    public function setPosition($pos){
        global $position;
        $position= $pos;
    }

    public function getKeyword(){
        global $keyword;
        return $keyword;
    }

    public function setKeyword($k){
        global $keyword;
        $keyword = $k;
    }

    public function getKeywordStyle(){
        global $keywordStyle;
        return $keywordStyle;
    }

    public function setAttributeStyle($style){
        global $keywordStyle;
        $keywordStyle = $style;
    }

}
