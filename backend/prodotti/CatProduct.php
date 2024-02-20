<?php
require_once __DIR__ . './Product.php';
class CatProduct extends Product {
    public static $animal = 'Cat';
    function get_info(){
        parent::get_info();
        return 
        'Per: '.CatProduct::$animal;
    }
}