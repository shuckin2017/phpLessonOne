<?php

require ('bd.php');

$sql = mysqli_query($link, 'SELECT `id`, `name`, `Price`, `src`, `articul`, `description` FROM `goods` ' );
$idImg = (int)$_GET["goods"];
$select = "SELECT * FROM goods WHERE id = $idImg";
$res = mysqli_query($link, $select ) or die(mysqli_error($link));
$result = mysqli_fetch_assoc($res);


?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title></title>
</head>
<body>
    <div class="wrapper">   
      <header class="header">
        <div class="container">
          <div class="header-body">
            <div class="header-search">
              <input type="search" placeholder="Поиск">
              <button class="header-basket__btn" >Поиск</button>
            </div>           
            <div class="header-basket">
              <div class="dropdown">
                <button class="header-basket__btn" >Корзина</button>
            </div>
            </div>
          </div>
        </div>
      </header>
      <main>
        <section class="goods">
          <div class="container">  
            <div class="goods-wrapper">
              <div class="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Каталог товара</a></li>
                    <li class="breadcrumb-item" aria-current="page"><?= $result['name'] ?></li>
                  </ol>
              </div>
              <div class="row">
          
                  <div class="goods-element"> 
                    <h2 class="title-page"><?= $result['name'] ?></h2>
                    <div class="row">
                      <div class="col-md-6">
                          <img class="product-img-item" src="<?= $result['src'] ?>" alt="<?= $result['name'] ?>"> 
                      </div>
                        <div class="col-md-6">
                          <div class="goods-element__art">Артикул: <b><?= $result['articul'] ?></b> </div>
                          <div class="goods-price"><h4><?= $result['price'] ?> р.</h4></div>
                          <div class="product-buy_btn"> 
                            <button class="basket_btn"><span>В корзину</span></button> 
                          </div> 
                          <div class="goods-desc"><?= $result['description'] ?></div>
                        </div> 
                    </div>



                  </div> 
              </div>    
            </div>
          </div>
        </section>

      </main>
      <footer class="footer">
  
      </footer>
    </div>

  

</body>
</html>