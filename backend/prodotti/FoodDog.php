<?php
require __DIR__ . './DogProduct.php';
class FoodDog extends DogProduct{
    public $food_type;
    public $price;
    function __construct($id,$type,$image, string $food_type, float $price)
    {
        parent::__construct($id, $type,$image);
        $this->food_type =  $food_type;
        $this->price = $price;
    }
    function get_info(){
        parent::get_info();
        echo 
        'Tipologia di Mangiare' .$this->food_type. '<br>' .
        'Prezzo del Mangiare' .$this->price. '€' . '<br>';
    }
}

