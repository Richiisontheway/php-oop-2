<?php
require_once __DIR__.'./prodotti/Product.php';
//require_once __DIR__ . './prodotti/DogProduct.php';
//require_once __DIR__ . './prodotti/CatProduct.php';
require_once __DIR__ . './prodotti/FoodDog.php';
require_once __DIR__ . './prodotti/FoodCat.php';
require_once __DIR__ . './prodotti/ToysCat.php';
require_once __DIR__ . './prodotti/ToysDog.php';
require_once __DIR__ . './prodotti/DogHouse.php';


$product_one = new ToysDog(2,'Gioco','Gomitolo','material','alta',5.99);
echo $product_one->get_info();

 $product_two = new FoodCat(2,'cibo','Croccantini','12');
echo $product_two->get_info();

$product_three = new DogHouse(1,'Cuccia',255,105,555.98);
 echo $product_three->get_info();

 $productsArray[] = $product_one;
 $productsArray[] = $product_two;
 $productsArray[] = $product_three;

 var_dump($productsArray);
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">
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
            <?php foreach ($productsArray as $key => $singleProduct) { ?>

                <div class="card-product">
                    <div class="frame">
                        <img src="" alt="non disponibile">
                    </div>
                    <div class="info">
                        <h3 class="m-0">
                            <?php echo $singleProduct-> type ?>
                        </h3>
                        
                        <h2 class=" text-success ">
                            <?php echo $singleProduct->price ?>
                        </h2>
                        <span>
                            <!-- <?php
                            // if($singleProduct->category == 1){
                            //     echo '<i class="fa-solid fa-dog"></i>';
                            // }else{
                            //     echo '<i class="fa-solid fa-cat"></i>';
                            // }
                            ?> -->
                        </span>
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>