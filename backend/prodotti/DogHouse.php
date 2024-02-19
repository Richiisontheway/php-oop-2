<?php
// require __DIR__ . './DogProduct.php';
class DogHouse extends CatProduct{
    public $width;
    public $height;
    public $price;
    function __construct($id,$type, int $width, int $height,float $price)
    {
        parent::__construct($id, $type);
        $this->width =  $width;
        $this->height = $height;
        $this->price = $price;
    }
    function get_info(){
        parent::get_info();
        return 
        'Altezza Cuccia: ' .$this->height. '<br>' .
        'Larghezza Cuccia: ' .$this->width. '<br>' .
        'Prezzo della cuccia' .$this->price. '€' . '<br>';
    }
}