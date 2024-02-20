<?php 
require_once __DIR__ . '/prodotti/Product.php';
require_once __DIR__ . '/prodotti/toys.php';
require_once __DIR__ . '/prodotti/PetBed.php';
require_once __DIR__ . '/prodotti/Food.php';




try{
    $product = new Product('cat',2,'collare','data:image/jpeg;base64,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',
    12.87,88,'Collare per Gatti molto carino e coccoloso',1);

}catch(Exception $e){
    
    echo '<h3 class="fw-bold text-center my-3" style="color: red;">'.$e->getMessage().'</h3>';
    
}
//var_dump($product);
$products_array[] = $product;

$product_one = new Toys('cat',2,'collare','cc',12.87,88,'lorem',1,'oro','high');
//var_dump($product_one, $product_one->get_type());
$products_array[] = $product_one;

$product_two= new PetBed('dog',48,'cuccia','cc',4785,78,'aaa',8,47,78,'very well');

//var_dump($product_two, $product_two ->get_size());
$products_array[] = $product_two;

$product_three = new Food('dog',48,'cuccia','cc',4785,78,'aaa',8,'very good', 12);

$products_array[] = $product_three;

var_dump($products_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
    <title>Arca Planet</title>
</head>
<body>
    <header>
        <h1>
            Arca Planet
        </h1>
    </header>

    <main>
        <div class="container">
            <div class="d-flex flex-wrap">
            <?php foreach ($products_array as $single_product) { ?>

                <div class="flex-grow-1">
                    <div class="">
                        <img src="<?php echo $single_product-> image ?>" alt="non disponibile">
                    </div>
                    <div>
                        <h3 class="m-0">
                            <?php 
                            echo $single_product-> animal;
                            if($single_product->animal == 'dog'){
                                echo '<i class="fa-solid fa-dog"></i>';
                            }else{
                                echo '<i class="fa-solid fa-cat"></i>';
                            }

                            ?>
                        </h3>
                        <div>
                            <?php
                                echo 'Nome Prodotto: '. $single_product-> name 
                            ?>
                        </div><div>
                            <?php
                                echo 'Descrizione Prodotto: '. $single_product-> description 
                            ?>
                        </div><div>
                            <?php
                                echo 'Valutazione: '. $single_product-> raiting .'/10'; 
                            ?>
                        </div>
                        </div><div>
                            <?php
                                if (isset ($single_product->durability) && 
                                ($single_product->material)) {

                                    echo $single_product-> durability ;
                                    echo $single_product-> material ;
                                    //echo $single_product-> type;

                                }elseif
                                (isset ($single_product->confort) && 
                                ($single_product->height) && 
                                ($single_product->width)){

                                    echo $single_product->confort;
                                    echo $single_product->height;
                                    echo $single_product->width;

                                }elseif
                                (isset ($single_product->quality) && 
                                ($single_product->weight)){

                                    echo $single_product->quality;
                                    echo $single_product->weight;
                                    
                                }
                            ?>
                        </div>
                        <h2 class=" text-success ">
                            <?php echo 'Prezzo : ' .$single_product-> price. '€' ?>
                        </h2>
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>


