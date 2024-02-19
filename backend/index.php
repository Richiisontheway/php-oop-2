<?php
require_once __DIR__.'./prodotti/Product.php';
//require_once __DIR__ . './prodotti/DogProduct.php';
//require_once __DIR__ . './prodotti/CatProduct.php';
require_once __DIR__ . './prodotti/FoodDog.php';
require_once __DIR__ . './prodotti/FoodCat.php';
require_once __DIR__ . './prodotti/ToysCat.php';
require_once __DIR__ . './prodotti/ToysDog.php';
require_once __DIR__ . './prodotti/DogHouse.php';


$product_one = new ToysDog(1,'Gioco','data:image/jpeg;base64,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','Maialino','material','alta',5.99);
echo $product_one->get_info();

 $product_two = new FoodCat(2,'cibo','https://www.my-personaltrainer.it/2021/04/13/cibo-secco-per-il-gatto-orig.jpeg','Croccantini','12');
echo $product_two->get_info();

$product_three = new DogHouse(3,'Cuccia','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYnq4spOtYCemOCrxeqfLMHs5BlJ1jKQ80XQ&usqp=CAU',255,105,555.98);
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
            <?php foreach ($productsArray as $singleProduct) { ?>

                <div class="card flex-grow-1">
                    <div class="img_container">
                        <img src="<?php echo $singleProduct-> image ?>" alt="non disponibile">
                    </div>
                    <div>
                        <h3 class="m-0">
                            <?php echo $singleProduct-> type ?>
                        </h3>
                        
                        <h2 class=" text-success ">
                            <?php echo 'Prezzo : ' .$singleProduct->price. '€' ?>
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