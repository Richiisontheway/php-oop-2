<?php
require __DIR__ . './CatProduct.php';
class FoodCat extends CatProduct{
    public $food_type;
    public $price;
    function __construct($id,$type, string $food_type, float $price)
    {
        parent::__construct($id, $type);
        $this->food_type =  $food_type;
        $this->price = $price;
    }
    function get_info(){
        parent::get_info();
        return 
        'Tipologia di Mangiare' .$this->food_type. '<br>' .
        'Prezzo del Mangiare' .$this->price. '€/kg' . '<br>';
    }
}
    