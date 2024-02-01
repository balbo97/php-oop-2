<?php

// definisco la classe CATEGORIA 
class Categoria {
    public $name 

    public function __construct($name) {
        $this->name = $name;
    }
}

// definisco la classe PRODOTTO 
class Prodotto {
    public $name;
    public $prezzo;
    public $categoria;
    public $immagine;

    public function __construct($name, $prezzo, Categoria $categoria, $immagine) {
        $this->name = $name;
        $this->prezzo = $prezzo;
        $this->categoria = $categoria;
        $this->immagine = $immagine;
    }

    // definisco il metodo per stampare i dettagli del prodotto 
    public function stampaDettagli() {
        echo "<div>";
        echo "<img src='{$this->immagine}' alt='{$this->nome}'>";
        echo "<h3>{$this->nome}</h3>";
        echo "<p>Prezzo: €{$this->prezzo}</p>";
        echo "<p>Categoria: {$this->categoria->name}</p>";
        echo "</div>";
    }
}

// definisco la sottoclasse PRODOTTO ALIMENTARE 
class ProdottoAlimentare extends Prodotto {
    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        parent::__construct($name, $prezzo, $categoria, $immagine);
        $this->tipo = "Cibo";
    }

    public function stampaDettagli() {
        parent::stampaDettagli();
        echo "<p>Tipo: {$this->tipo}</p>";  
        echo "</div>";
    }
}

// definisco la sottoclasse PRODOTTO GIOCO 
class ProdottoAlimentare extends Prodotto {
    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        parent::__construct($name, $prezzo, $categoria, $immagine);
        $this->tipo = "Gioco";
    }

    public function stampaDettagli() {
        parent::stampaDettagli();
        echo "<p>Tipo: {$this->tipo}</p>";  
        echo "</div>";
    }
}

// definisco la sottoclasse PRODOTTO ACCESSORIO
class ProdottoAlimentare extends Prodotto {
    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        parent::__construct($name, $prezzo, $categoria, $immagine);
        $this->tipo = "Accessorio";
    }

    public function stampaDettagli() {
        parent::stampaDettagli();
        echo "<p>Tipo: {$this->tipo}</p>";  
        echo "</div>";
    }
}

?>

