<?php

// definisco la classe CATEGORIA 
class Categoria {
    public $name;

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
        echo "<div class='card'>";
        echo "<img src='{$this->immagine}' alt='{$this->name}' class='card-img-top'>";
        echo "<div class='card-body'>";
        echo "<h3 class='card-title'>{$this->name}</h3>";
        echo "<p class='card-text'>Prezzo: €{$this->prezzo}</p>";
        echo "<p class='card-text'>Categoria: {$this->categoria->name}</p>";
        echo "</div>";
        echo "</div>";
    }
}

// definisco la sottoclasse PRODOTTO ALIMENTARE 
class ProdottoAlimentare extends Prodotto {
    public $tipo;

    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        parent::__construct($name, $prezzo, $categoria, $immagine);
        $this->tipo = $tipo;
    }

    public function stampaDettagli() {
        parent::stampaDettagli();
        echo "<p>Tipo: {$this->tipo}</p>";  
        echo "</div>";
    }
}

// definisco la sottoclasse PRODOTTO GIOCO 
class ProdottoGioco extends Prodotto {
    public $tipo;

    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        parent::__construct($name, $prezzo, $categoria, $immagine);
        $this->tipo = $tipo;
    }

    public function stampaDettagli() {
        parent::stampaDettagli();
        echo "<p>Tipo: {$this->tipo}</p>";  
        echo "</div>";
    }
}

// definisco la sottoclasse PRODOTTO ACCESSORIO
class ProdottoAccessorio extends Prodotto {
    public $tipo;

    public function __construct($name, $prezzo, Categoria $categoria, $immagine, $tipo) {
        parent::__construct($name, $prezzo, $categoria, $immagine);
        $this->tipo = $tipo;
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
$prodottoCiboCane = new ProdottoAlimentare("Royal Canin Mini Adult", 20.99, $categoriaCane, "https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "Cibo");
$prodottoCiboGatto = new ProdottoAlimentare("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 15.99, $categoriaGatto, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Cibo");
$prodottoCiboGattoLattina = new ProdottoAlimentare("Almo Nature Cat Daily Lattina", 1.99, $categoriaGatto, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Cibo");
$prodottoCiboPesci = new ProdottoAlimentare("Mangime per Pesci Guppy in Fiocchi", 7.99, $categoriaPesce, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Cibo");
$prodottoAccessorioUccelli = new ProdottoAccessorio("Voliera Wilma in Legno", 89.99, $categoriaUccello, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Accessorio");
$prodottoAccessorioPesci = new ProdottoAccessorio("Cartucce Filtranti per Filtro EasyCrystal", 12.99, $categoriaPesce, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Accessorio");
$prodottoGiocoCane = new ProdottoGioco("Kong Classic", 15.99, $categoriaCane, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Gioco");
$prodottoGiocoGatto = new ProdottoGioco("Topini di peluche Trixie", 7.99, $categoriaGatto, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Gioco");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="container">
            <div class="row">
                
                <div class="col-4">
                    <?php echo $prodottoCiboCane->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoCiboGatto->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoCiboGattoLattina->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoCiboPesci->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoAccessorioPesci->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoAccessorioUccelli->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoGiocoCane->stampaDettagli(); ?>
                </div>
                <div class="col-4">
                    <?php echo $prodottoGiocoGatto->stampaDettagli(); ?>
                </div>
            </div>
        </div>

    </div>
    
</body>
</html>

