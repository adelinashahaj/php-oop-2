<?php
require_once __DIR__ . '/Prodotto.php';

class Cibo extends Prodotti {
    public $pesoNetto;
    public $ingredienti;

    public function get_pesoNetto(){
        return $this->pesoNetto;
    }

    public function set_pesoNetto($_pesoNetto){
        $this->pesoNetto = $_pesoNetto;
    }

    public function get_ingredienti(){
        return $this->ingredienti;
    }

    public function set_ingredienti($_ingredienti){
        $this->ingredienti = $_ingredienti;
    }
};