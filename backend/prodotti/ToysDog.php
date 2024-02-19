<?php

class ToysDog extends DogProduct{
    public $Toys_name;
    public $material;
    public $durability;
    function __construct($id,$name,$price,$type,string $Toys_name, string $material, string $durability)
    {
        parent::__construct($id,$name,$price,$type);
        $this->Toys_name =  $Toys_name;
        $this->material =  $material;
        $this->durability = $durability;
    }
    function get_info(){
        parent::get_info();
        return 
        'Tipo di Gioco: ' .$this->Toys_name. '<br>' .
        'Tipologia di Materiale: ' .$this->material. '<br>' .
        'Prezzo del Gioco: ' .$this->durability. '<br>';
    }
}