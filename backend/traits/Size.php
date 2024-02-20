<?php

trait Size{
    public $height;
    public $width;
    public static $size;
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
            float $height,
            float $width  
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
            $this->height = $height;
            $this->width = $width;
        }
    function set_size(){
        self::$size = (($this->height * $this->width) / 10000);
        return self::$size;
    }
    function get_size(){
        return $this->set_size();
    }
}