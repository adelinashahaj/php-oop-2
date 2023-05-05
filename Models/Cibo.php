<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';

class Cibo extends Prodotti {
  public $calorie;
  public $type;
  public $categoria;

  public function __construct($titolo, $prezzo, $immagine, $calorie,$type, $categoria) {

     parent::__construct($titolo, $prezzo, $immagine);
    $this->calorie = $calorie;
    $this->type =$type;
    $this->categoria = $categoria;
  }

  public function getData()
  {
      return
          '<span class="card-text text-primary">Calorie: </span>' . $this->calorie . '<span> kcal</span>' . '<br />';
  }
  public function getCategoria()
  {

      return
                $this->categoria->tipoAnimale;
       
  
  }
  
  public function gettype() {
    return
    '<span class="card-text text-primary">Type: </span>' . $this->type . '<span></span>' . '<br />';
}
};