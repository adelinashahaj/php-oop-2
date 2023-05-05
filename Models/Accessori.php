<?php
require_once __DIR__ . '/Prodotto.php';
class Accessori extends Prodotti
{
    public $materiale;
    public $dimensioni;

    public function __construct($nomeProdotto, $prezzo, $materiale, $dimensioni)

    {
        parent::__construct($titolo, $prezzo);
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;
    }
};