 <?php
    // class animal extends product{
    //     public $type;
    //     public function __construct($nome,$prezzo,$tipo)
    //     {
    //         parent::__construct($nome,$prezzo);
    //         $this->type = $tipo;
    //     }
    //     public function write_on_page(){
    //         return 'per'. $this->type .' '. $this->price;  
    //     }
    // } 
    class category{
        private $id;
        private $name;
        function __construct($id,$name)
        {
            $this->id = $id;
            $this->name = $name;
        }
        function get_id(){
            return $this->id;
        }
        function get_name(){
            return $this->name;
        }
    }
    