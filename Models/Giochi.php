<?php
require_once __DIR__ . '/Prodotto.php';
require_once __DIR__ . '/Categoria.php';

class Giochi extends Prodotti {
    public $materiale;
    public $type;
    public $categoria;
    

    public function __construct($titolo, $prezzo, $immagine, $materiale, $type,  $categoria ){

        parent::__construct($titolo, $prezzo, $immagine);
        $this->materiale = $materiale;
        $this->type =$type;
        $this->categoria = $categoria;
       
    }


    public function getData()
    {
        return
            '<span class="card-text text-primary">Materiale: </span>' . $this->materiale . '<span> </span>' . '<br />';
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

}


