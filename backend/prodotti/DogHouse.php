<?php
// require __DIR__ . './DogProduct.php';
class DogHouse extends CatProduct{
    public $width;
    public $height;
    public $priceHouse;
    function __construct($id,$name,$price,$type, int $width, int $height,float $priceHouse)
    {
        parent::__construct($id ,$name, $price, $type);
        $this->width =  $width;
        $this->height = $height;
        $this->priceHouse = $priceHouse;
    }
    function get_info(){
        parent::get_info();
        return 
        'Altezza Cuccia: ' .$this->height. '<br>' .
        'Larghezza Cuccia: ' .$this->width. '<br>' .
        'Prezzo della cuccia' .$this->priceHouse. '€' . '<br>';
    }
}