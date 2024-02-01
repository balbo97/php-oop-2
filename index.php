<?php

// <!-- definisco la classe CATEGORIA  -->
class Categoria {
    public $name 

    public function __construct($name) {
        $this->name = $name;
    }
}

class Prodotto {
    public $name;
    public $prezzo;
    public $categoria;
    public $immagine;

    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        $this->name = $name;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->immagine = $immagine;
    }

    public function stampaDettagli() {
        echo "<div>";
        echo "<img src='{$this->immagine}' alt='{$this->nome}'>";
        echo "<h3>{$this->nome}</h3>";
        echo "<p>Prezzo: €{$this->prezzo}</p>";
        echo "<p>Categoria: {$this->categoria->name}</p>";
        echo "</div>";
    }
}

?>

