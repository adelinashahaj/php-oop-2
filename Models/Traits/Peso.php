<?php
trait Peso {
    public $peso;


    public function setpeso($peso){
        $this->peso = $peso;
    }
    public function getpeso() {
        return '<span class="card-text text-primary">Peso: </span>'. $this->peso. 'kg <br/>';
    }
    
}
