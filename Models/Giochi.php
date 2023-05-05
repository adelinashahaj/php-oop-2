<?php
require_once __DIR__ . '/Prodotto.php';

class Giochi extends Prodotti {
    public $caratteristiche;
    public $dimensioni;

    public function __construct($nomeProdotto, $prezzo, $caratteristiche, $dimensioni)

    {
        parent::__construct($titolo, $prezzo);
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
    }

};
