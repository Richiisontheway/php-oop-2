<?php

class ToysDog extends DogProduct{
    public $Toys_name;
    public $material;
    public $durability;
    public $price;
    function __construct($id,$type,$image,string $Toys_name, string $material, string $durability,float $price)
    {
        parent::__construct($id, $type,$image);
        $this->Toys_name =  $Toys_name;
        $this->material =  $material;
        $this->durability = $durability;
        $this->price = $price;
        
    }
    function get_info(){
        parent::get_info();
        return 
        'Tipo di Gioco: ' .$this->Toys_name. '<br>' .
        'Tipologia di Materiale: ' .$this->material. '<br>' .
        'Durabilità: ' .$this->durability. '<br>'.
        'Prezzo del Gioco: ' .$this->price. '<br>';
        ;
    }
}