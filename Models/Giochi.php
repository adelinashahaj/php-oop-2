<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/./Traits/Peso.php';
class Giochi extends Prodotti {

    public $materiale;
   

    public function __construct($titolo, $prezzo, $immagine, $materiale, $categoria ){

        parent::__construct($titolo, $prezzo, $immagine, $categoria);
        $this->materiale = $materiale;
        
       
       
    }
  
    public function getClassName(){
        return get_class($this);
     }
    
}


