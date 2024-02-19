<?php
require_once __DIR__.'./prodotti/Product.php';
//require_once __DIR__ . './prodotti/DogProduct.php';
//require_once __DIR__ . './prodotti/CatProduct.php';
require_once __DIR__ . './prodotti/FoodDog.php';
require_once __DIR__ . './prodotti/FoodCat.php';
require_once __DIR__ . './prodotti/ToysCat.php';
require_once __DIR__ . './prodotti/ToysDog.php';




$product_one = new ToysDog(2,'collare',12.97,'Gioco','Gomitolo','material','alta');

echo $product_one->get_info();
    