<?php

class Product {
    private $name;
    private $price;
    private $image;
    private $category;
    private $type;

    public function __construct($name, $price, $image, $category, $type) {
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

// Creazione delle categorie
$dogCategory = new Category("Cani", "dog-icon.png");
$catCategory = new Category("Gatti", "cat-icon.png");

// Creazione di alcuni prodotti
$product1 = new Product("Croccantini per Cani", 20.99, "./images/MC_SI_crocchette_MV_2-5.jpg", $dogCategory, "Cibo");
$product2 = new Product("Pallina per Gatti", 5.99, "./images/Screenshot_2024-09-18_175301.png", $catCategory, "Gioco");
$product3 = new Product("Cuccia per Cani", 45.00, "./images/Screenshot_2024-09-18_175749.png", $dogCategory, "Cuccia");

// Creazione del negozio e aggiunta dei prodotti
$shop = new Shop();
$shop->addProduct($product1);
$shop->addProduct($product2);
$shop->addProduct($product3);

?>

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
<div class="cards-container">
    <?php
    foreach ($shop->getProducts() as $product) {
        ?>
        <div class="card">
            <img class="product-img" src="<?php echo $product->getImage(); ?>" alt="<?php echo $product->getName(); ?>">
            <h2><?php echo $product->getName(); ?></h2>
            <p>Prezzo: €<?php echo $product->getPrice(); ?></p>
            <p>Categoria: <?php echo $product->getCategory()->getName(); ?></p>
            <p>Tipo: <?php echo $product->getType(); ?></p>
            <img class="icon" src="<?php echo $product->getCategory()->getIcon(); ?>" alt="Icona <?php echo $product->getCategory()->getName(); ?>">
        </div>
        <?php
    }
    ?>
</div>

</body>
</html>
