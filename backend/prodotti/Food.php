<?php
require_once __DIR__ . './Product.php';
class Food extends Product{
    public $quality;
    public $weight;
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
            string $quality,
            float $weight,
              
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
            $this->quality = $quality;
            $this->weight = $weight;
        }
}