<?php
require __DIR__ . './CatProduct.php';
class FoodCat extends CatProduct{
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
        return 
        'Tipologia di Mangiare' .$this->food_type. '<br>' .
        'Prezzo del Mangiare' .$this->food_price. '€/kg' . '<br>';
    }
}
    