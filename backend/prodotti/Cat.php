<?php
require_once __DIR__ . '/product.php';
class CatProduct extends Product {
    public static $animal = 'Dog';
    public function __construct($id,$name,$price,$category)
    {
        parent::__construct($id ,$name, $price, $category);
    }
    function get_info(){
        parent::get_info();
        return 
        'Per: '.DogProduct::$animal;
    }
}