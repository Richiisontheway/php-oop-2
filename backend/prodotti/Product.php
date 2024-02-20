<?php
require __DIR__ . './DogProduct.php';
class Product {
    use DogProduct;
    protected $id;
    public $type; // se cibo, cuccia o giochi
    public $image;
    function __construct
    (
        int $id,
        string $type,
        string $image
    )
    {
        $this->id = $id;
        $this->image = $image;
        $this->type = $type;

    }
    function get_id(){
        return $this->id;
    }
    function get_type(){
        $this->type;
    }
    function get_info(){
        echo 
        'Identificativo prodotto: '. $this->id. '<br>'.
        'Tipo di prodotto desiderato: ' .$this->type .'<br>' ;
    }
}


    