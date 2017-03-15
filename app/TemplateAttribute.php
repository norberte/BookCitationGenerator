<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TemplateAttribute extends Model
{
    protected $guarded = [];

    // laravel uses "snake case" which automatically looks for the plural of the table
    // since ours is not plural, we can specify a custom table it will look for. In this case, ours is book
    protected $table = 'templateattributes';

    protected $tname;
    protected $position;
    protected $attribute;
    protected $attributeStyle;

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

    public function getAttribute(){
        global $attribute;
        return $attribute;
    }

    public function setAttribute($attr){
        global $attribute;
        $attribute = $attr;
    }

    public function getAttributeStyle(){
        global $attributeStyle;
        return $attributeStyle;
    }

    public function setAttributeStyle($style){
        global $attributeStyle;
        $attributeStyle = $style;
    }
}
