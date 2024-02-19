<?php
require_once __DIR__.'./prodotti/Product.php';
//require_once __DIR__ . './prodotti/DogProduct.php';
//require_once __DIR__ . './prodotti/CatProduct.php';
require_once __DIR__ . './prodotti/FoodDog.php';
require_once __DIR__ . './prodotti/FoodCat.php';
require_once __DIR__ . './prodotti/ToysCat.php';
require_once __DIR__ . './prodotti/ToysDog.php';
require_once __DIR__ . './prodotti/DogHouse.php';


$product_one = new ToysDog(2,'collare',12.97,'Gioco','Gomitolo','material','alta');
echo $product_one->get_info();

$product_two = new FoodCat(2,'collare',12.97,'Cibo','Croccantini','12');
echo $product_two->get_info();

$product_three = new DogHouse(1,'ciao',12.97, 'Cuccia',255,105,555.98);
echo $product_three->get_info();

    