<?php
require_once __DIR__ . './../traits/Price.php';

class Product {
    public $animal;
    public $id;
    public $name;
    public $image;
    use Price;
    public $quantity;
    public $description;
    public $raiting;

    function __construct
    (
        string $animal,
        int $id,
        string $name,
        string $image,
        float $price,
        int $quantity,
        string $description,
        int $raiting
    )
    {
        $this->animal = $animal;
        $this->id = $id;
        $this->name = $name;
        $this->image = $image;
        if (is_numeric($price)) {
            $this->price = $price;
        }else{
            throw new Exception('Error type price is not numeric');
        }
        if (is_int($quantity)) {
            $this->quantity = $quantity;
        }else{
            throw new Exception('Error type quantity is not int');
        }
        $this->description = $description;
        if ($raiting >= 0) {
            $this->raiting = $raiting;
        }else{
            throw new Exception('Error type raiting cannot be negative');
        }
    }
    
}


    