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
?>
</body>
</html>