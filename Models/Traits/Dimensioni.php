<?php
trait Dimensioni {
    public $peso;
    public $altezza;


    public function setpeso($peso){
        $this->peso = $peso;
     
    }
    public function getpeso() {
        return '<span class="card-text text-primary">Peso: </span>'. $this->peso .'kg <br/>';
    }
    public function setAltezza( $altezza){
        $this->altezza = $altezza;
    }

    public function getAltezza() {
        return '<span class="card-text text-primary">Altezza: </span>'. $this->altezza . 'cm <br/>';
    }

    
}
