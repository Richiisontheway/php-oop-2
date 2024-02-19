<?php
require_once __DIR__.'./prodotti/Product.php';
//require_once __DIR__ . './prodotti/DogProduct.php';
//require_once __DIR__ . './prodotti/CatProduct.php';
require_once __DIR__ . './prodotti/FoodDog.php';
require_once __DIR__ . './prodotti/FoodCat.php';


$product_one = new CatProduct(2,'collare',12.97,'cibo');

echo $product_one->get_info();
    