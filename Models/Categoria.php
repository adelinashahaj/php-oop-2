<?php

class Categoria {
    
    public $animale;

    public function __construct($_animale)
    {
        $this->animale = $_animale;
    }
    public function get_animale(){
        return $this->animale;
    }

    public function set_animale($_animale){
        $this->animale = $_animale;
    }
    
}