<?php
class Product {
    protected $id;
    public $name;
    public $price;
    private $type; // se cibo, cuccia o altro

    function __construct
    (
        int $id,
        string $name,
        float $price, 
        string $type
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;

    }
    function get_id(){
        return $this->id;
    }
    function get_name(){
        return $this->name;
    }
    function get_price(){
        return $this->price;
    }
    function get_type(){
        $this->type;
    }
    function get_info(){
        echo 
        'Identificativo prodotto: '. $this->id. '<br>'.
        'Nome prodotto: ' .$this->name. '<br>'.
        'Prezzo prodotto: ' .$this->price. '€' .'<br>' .
        'Tipo di prodotto desiderato: ' .$this->type .'<br>' ;
    }
}


    