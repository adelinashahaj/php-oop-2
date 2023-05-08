<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/./Traits/Dimensioni.php';
class Accessori extends Prodotti {

    
 
    public function __construct($titolo, $prezzo, $immagine,   $categoria) {

        parent::__construct($titolo, $prezzo, $immagine, $categoria);
      
       
       
  }

 
    
    
}