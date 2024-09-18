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


?>
</body>
</html>