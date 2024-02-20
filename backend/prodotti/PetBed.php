<?php
require_once __DIR__ . './Product.php';
require_once __DIR__ . './../traits/Size.php';
class PetBed extends Product{
    use Size;
    public $confort;
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
            $height,
            $width,
            string $confort  
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
            $this->height = $height;
            $this->width = $width;
            $this->confort = $confort;
        }
}