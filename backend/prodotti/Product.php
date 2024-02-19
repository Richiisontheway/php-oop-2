<?php
class Product {
    protected $id;
    public $type; // se cibo, cuccia o giochi

    function __construct
    (
        int $id,
        string $type
    )
    {
        $this->id = $id;
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


    