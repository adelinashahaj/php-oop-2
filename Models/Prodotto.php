<?php

class Prodotti {
   
    public $titolo;
    public $prezzo;
    public $immagine;
    
    public function __construct($titolo, $prezzo, $immagine)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }

    public function getFullData()
    {
        return
        '<span class="text-primary">Titolo: </span>' . $this->titolo . '<br />'
        .'<span class="text-primary">Prezzo: </span>' . $this->prezzo . '<br />';
        
     }

     public function getimg() {
        return
        "<img src=' $this->immagine' class='card-img-top'>";
     }

};




