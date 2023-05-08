<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/./Traits/Dimensioni.php';

class Cibo extends Prodotti {
  
  public $calorie;
  public $type;
  
  

  public function __construct($titolo, $prezzo, $immagine, $calorie, $categoria) {

     parent::__construct($titolo, $prezzo, $immagine, $categoria);
    $this->calorie = $calorie;
  
    
  }

  
public function getClassName(){
  return get_class($this);
}
};