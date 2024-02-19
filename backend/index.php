<?php
    require_once __DIR__.'./prodotti/product.php';
    //require_once __DIR__ . './prodotti/Dog.php';
    require_once __DIR__ . './prodotti/Food.php';


    $product_one = new DogProduct(2,'collare',12.97,'cibo');
    
    echo $product_one->get_info();
    