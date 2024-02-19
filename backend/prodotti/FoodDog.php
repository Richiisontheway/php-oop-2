<?php
require __DIR__ . './DogProduct.php';
class FoodDog extends DogProduct{
    public $food_type;
    public $food_price;
    function __construct($id,$name,$price,$type, string $food_type, float $food_price)
    {
        parent::__construct($id ,$name, $price, $type);
        $this->food_type =  $food_type;
        $this->food_price = $food_price;
    }
    function get_info(){
        parent::get_info();
        echo 
        'Tipologia di Mangiare' .$this->food_type. '<br>' .
        'Prezzo del Mangiare' .$this->food_price. '€' . '<br>';
    }
}

