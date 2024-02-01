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

// creazione di categorie 
$categoriaCane = new Categoria ('Cane');
$categoriaGatto = new Categoria ('Gatto');
$categoriaUccello = new Categoria ('Uccello');
$categoriaPesce = new Categoria ('Pesce');

// creazione di prodotti
$prodottoCiboCane = new ProdottoAlimentare("Royal Canin Mini Adult", 20.99, $categoriaCane, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000");
$prodottoCiboGatto = new ProdottoAlimentare("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 15.99, $categoriaGatto, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg");
$prodottoCiboGattoLattina = new ProdottoAlimentare("Almo Nature Cat Daily Lattina", 1.99, $categoriaGatto, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg");
$prodottoCiboPesci = new ProdottoAlimentare("Mangime per Pesci Guppy in Fiocchi", 7.99, $categoriaPesci, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg");
$prodottoAccessorioUccelli = new ProdottoAccessorio("Voliera Wilma in Legno", 89.99, $categoriaUccelli, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg");
$prodottoAccessorioPesci = new ProdottoAccessorio("Cartucce Filtranti per Filtro EasyCrystal", 12.99, $categoriaPesci, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg");
$prodottoGiocoCane = new ProdottoGioco("Kong Classic", 15.99, $categoriaCane, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg");
$prodottoGiocoGatto = new ProdottoGioco("Topini di peluche Trixie", 7.99, $categoriaGatto, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg");

?>

