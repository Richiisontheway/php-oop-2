<?php
require_once __DIR__ . '/product.php';
class DogProduct extends Product {
    public static $animal = 'Dog';
    public function __construct($id,$name,$price,$category)
    {
        parent::__construct($id ,$name, $price, $category);
    }
    function get_info(){
        parent::get_info();
        echo 'Per: '.DogProduct::$animal. '<br>';
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