<?php

require ('bd.php');


$query = mysqli_query($link, 'SELECT * FROM goods');
$id = !empty($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : 0;
$productQuery = mysqli_query($link, "SELECT * FROM goods where id = $id");
$productRes = mysqli_fetch_assoc($productQuery);
$sql = mysqli_query($link, 'SELECT `id`, `Name`, `Price`, `src` FROM `goods`');

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
              <h2 class="title-page">Каталог товара</h2>
              <div class="row">
                <?php while ($result = mysqli_fetch_array($sql)) { ?>
                <div class="col-md-3 goods-item " > 
                  <div class="product-img"> 
                    <a href="catalog-element.php"> 
                      <img class="product-img-item" src="<?= $result['src'] ?>" alt="<?= $result['Name'] ?>"> 
                    </a> 
                  </div> 
                  <div class="product-name"> 
                    <a rel="stylesheet" href="catalog-element.php?goods=<?= $result["id"] ?>"> <h5><?= $result['Name'] ?></h5> </a> 
                  </div> 
                    <div class="product-buy"> 
                      <div class="product-price"> 
                        <h4><?= $result['Price'] ?></h4>                        
                      </div>  
                      <div class="product-buy_btn"> 
                        <button class="basket_btn"><span>В корзину</span>
                        </button> 
                      </div> 
                    </div> 
                  </div> 
              <?php }?> 
              </div>    
            </div>
          </div>
        </section>


        <aside class="basket-list" style="display: none;">
          <h2>Корзина</h2>
          <div class="basket-item">
              <img src="#" alt="#">
              <button>&times;</button>
              <div class="basket-item-info">
                  <h3>{{good.title}}</h3>
                  <p>{{good.price}}</p>
              </div>
          </div>
          <small class="totalCart">{{totalPriceMessage}}</small>
      </aside>
      </main>
      <footer class="footer">
  
      </footer>
    </div>

  

</body>
</html>