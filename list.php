<?php
// var_dump($_GET);
// exit();

// session_start();
include('functions.php');

$search = $_GET['search'];

$pdo = connectToDb();
$sql = "SELECT * FROM product WHERE name LIKE '%" . $search . "%'";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$all = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/header_hovermenu.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="css/footer.css">
 
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>検索一覧</title>
  <style>
    body {
      background: rgb(245, 244, 244);
    }

    .top {
      width: 15%;
      margin: 30px auto;
    }
  </style>

  <head>

  <body>
    <div class="top"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
    <div class="product_inner">
      <?php for ($i = 0; $i < count($all); $i++) : ?>
        <div class="each_product">
          <a href="item_detail.php?id=<?= $all[$i]['id'] ?>">
            <div class="product_pic"><img class="product_img" src="sell/<?= $all[$i]['image'] ?>" alt="">
              <div class="price">¥<?= $all[$i]['price'] ?>円</div>
            </div>
            <div class="product_info"><?= $all[$i]['description'] ?></div>
          </a>
        </div>
      <?php endfor; ?>
    </div>
    

  </body>

</html>