<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';
class Accessori extends Prodotti {

    public $peso;
    public $type;
    public $categoria;

    public function __construct($titolo, $prezzo, $immagine, $peso, $type, $categoria) {

        parent::__construct($titolo, $prezzo, $immagine);
       $this->peso = $peso;
       $this->type =$type;
       $this->categoria = $categoria;
  }

  public function getData()
    {
        return
            '<span class="card-text text-primary">Peso: </span>' . $this->peso . '<span> g</span>' . '<br />';
    }
    public function getCategoria()
    {

        return
            $this->categoria->tipoAnimale;
        // "<img src='" . $this->categoria->tipoAnimale . "'class='card-img-top'>";
    }

    
    public function gettype() {
        return
        '<span class="card-text text-primary">Type: </span>' . $this->type . '<span></span>' . '<br />';
    }
}