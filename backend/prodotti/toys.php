<?php
require_once __DIR__ . './Product.php';
require_once __DIR__ . './../traits/Price.php';
require_once __DIR__ . './../traits/Material.php';


class Toys extends Product{
    use Material;
    public $durability;
    function __construct
        (
            $animal, 
            $id, 
            $name,
            $image, 
            $price, 
            $quantity,
            $description,
            $ratings,
            $material,
            string $durability  
        )
        {
            parent::__construct
            (
                $animal, 
                $id, 
                $name,
                $image, 
                $price, 
                $quantity,
                $description,
                $ratings,
            );
            $this->material = $material;
            $this->durability = $durability;
        }
    
}