<?php
require_once __DIR__ . '/Categoria.php';
require_once __DIR__ . '/./Traits/Dimensioni.php';
class Prodotti {
   
    public $titolo;
    public $prezzo;
    public $immagine;
    public $categoria;
    use Dimensioni;
    
    
    public function __construct($titolo, $prezzo, $immagine, $categoria)
    {
        $this->titolo = $titolo;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->categoria = $categoria;
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
     public function getCategoria()
     {
   
         return
         $this->categoria->tipoAnimale;
          
     
     }
     public function getClassName(){
        return get_class($this);
     }
/**
     * Calcola l'anno di produzione
     * 
     * metodo richiamabile pubblicamente che consente di calcolare l'anno di produzione  a partire dal un anno qualsiasi
     * @param int $yob anno qualsiasi
     * @return string Ritorna una stringa contenente l'anno di produzione
     */
     public function calcAnno($yob) {

        $now = date("Y");

        if (!is_numeric($yob)) {
            throw new Exception('Il valore passato non è un numero valido');
        } else if ($yob < 1900 || $yob > $now) {
            throw new Exception('Anno di produzione non valido');
        }

        return "<br/> " . ($now - $yob) . ' anni di produzione';

    }

};




