<?php
trait Material{
    public $material;
    public static $type;
    function __construct
        (
            $animal, 
            $id, 
            $name,
            $image, 
            $price, 
            $quantity,
            $description,
            $ratings,
            string $material  
        )
        {
            parent::__construct
            (
                $animal, 
                $id, 
                $name,
                $image, 
                $price, 
                $quantity,
                $description,
                $ratings
            );
            $this->material = $material;
        }
    function set_type(){
        if (($this->material == 'oro') || ($this->material == 'argento') || ($this->material == 'acciaio')) {
            static::$type;
            return 'Material anallergic';

        }else{
            return 'Material allergic';
        }
    }
    function get_type(){
        return $this->set_type();
    }
}