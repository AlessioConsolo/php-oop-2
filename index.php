<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Negozio Online per Animali</title>
</head>
<body>
    <h1>Negozio Online per Animali</h1>
    
    <?php

    class Product {
        protected $name;
        protected $price;
        protected $image;
        protected $category;
        protected $type;

        public function __construct($name, $price, $image, Category $category, $type) {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->category = $category;
            $this->type = $type;
        }

        public function getName() {
            return $this->name;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getImage() {
            return $this->image;
        }

        public function getCategory() {
            return $this->category;
        }

        public function getType() {
            return $this->type;
        }
    }

    class Food extends Product {
        private $flavor;

        public function __construct($name, $price, $image, Category $category, $flavor) {
            parent::__construct($name, $price, $image, $category, 'Cibo');
            $this->flavor = $flavor;
        }

        public function getFlavor() {
            return $this->flavor;
        }
    }
    
    class Toy extends Product {
        private $material;

        public function __construct($name, $price, $image, Category $category, $material) {
            parent::__construct($name, $price, $image, $category, 'Gioco');
            $this->material = $material;
        }

        public function getMaterial() {
            return $this->material;
        }
    }
    class Bed extends Product {
        private $size;

        public function __construct($name, $price, $image, Category $category, $size) {
            parent::__construct($name, $price, $image, $category, 'Cuccia');
            $this->size = $size;
        }

        public function getSize() {
            return $this->size;
        }
    }

    class Category {
        private $name;
        private $icon;

        public function __construct($name, $icon) {
            $this->name = $name;
            $this->icon = $icon;
        }

        public function getName() {
            return $this->name;
        }

        public function getIcon() {
            return $this->icon;
        }
    }

    class Shop {
        private $products = [];

        public function addProduct(Product $product) {
            $this->products[] = $product;
        }

        public function getProducts() {
            return $this->products;
        }
    }

    class Card {
        public static function render(Product $product) {
            echo '<div class="card">';
            echo '<img class="product-img" src="' . $product->getImage() . '" alt="' . $product->getName() . '">';
            echo '<h2>' . $product->getName() . '</h2>';
            echo '<p>Prezzo: €' . $product->getPrice() . '</p>';
            echo '<p>Categoria: ' . $product->getCategory()->getName() . '</p>';
            echo '<p>Tipo: ' . $product->getType() . '</p>';
            echo '<img class="icon" src="' . $product->getCategory()->getIcon() . '" alt="Icona ' . $product->getCategory()->getName() . '">';
            echo '</div>';
        }
    }

    // Categorie
    $dogCategory = new Category("Cani", "./images/dog.png");
    $catCategory = new Category("Gatti", "./images/cat.png");

    // Prodotti
    $dogFood = new Food("Croccantini per Cani", 20.99, "./images/MC_SI_crocchette_MV_2-5.jpg", $dogCategory, "Pollo");
    $catToy = new Toy("Pallina per Gatti", 5.99, "./images/Screenshot_2024-09-18_175301.png", $catCategory, "Lana");
    $dogBed = new Bed("Cuccia per Cani", 50.00, "./images/Screenshot_2024-09-18_175749.png", $dogCategory, "Grande");

    // Negozio
    $shop = new Shop();
    $shop->addProduct($dogFood);
    $shop->addProduct($catToy);
    $shop->addProduct($dogBed);

?>
</body>
</html>