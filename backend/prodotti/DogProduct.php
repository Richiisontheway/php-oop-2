<?php
//require_once __DIR__ . './Product.php';
trait DogProduct {
    public static $animal = 'Dog';
    function get_info(){
        $parentIntfo = parent::get_info();
        $sonInfo = 'Per: '.DogProduct::$animal. '<br>';
        return parent::get_info().' '.$sonInfo;
    }
}

// class DogProduct extends product {
//     public function __construct($nome,$prezzo)
//     {
//         parent::__construct($nome, $prezzo, 'Dogs');
//     }

//     public function write_on_page(){
//         return 'per'. $this->category .' '. $this->price;  
//     }
// }