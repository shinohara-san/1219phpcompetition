<?php

session_start();
include('functions.php');

// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SESSION);
// exit();

// checkSessionId();
$headerMenu = headerMenu();
$footerMenu = footerMenu();
$pdo = connectToDb();

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/header_hovermenu.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/item_detail.css">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

  <title>商品詳細ページ</title>
</head>

<body>
  <?= $headerMenu ?>
  <main>
    <div class="gap">商品</div>
    <div class="item_detail">

      <h1>ブルーアイズホワイトドラゴン</h1>
      <div class="item_flex">
        <div class="image_section">
          <img src="dummy/blueeys.png" alt="">
        </div>
        <div class="info_section">
          <table id="table" border="1">
            <tr>
              <th>出品者</th>
              <th>あああ0 0 0</th>
            </tr>
            <tr>
              <th>カテゴリー</th>
              <th>おもちゃ・ホビー・グッズ
                トレーディングカード
                遊戯王</th>
            </tr>
            <tr>
              <th>ブランド</th>
              <th></th>
            </tr>
            <tr>
              <th>商品の状態</th>
              <th>目立った傷や汚れなし</th>
            </tr>
            <tr>
              <th>配送料の負担</th>
              <th>送料込み(出品者負担)</th>
            </tr>
            <tr>
              <th>配送の方法</th>
              <th>ゆうゆうメルカリ便</th>
            </tr>
            <tr>
              <th>配送元地域</th>
              <th>愛媛県</th>
            </tr>
            <tr>
              <th>発送日の目安</th>
              <th>1~2日で発送</th>
            </tr>
          </table>
        </div>
      </div>
      <!-- フレックス終わり -->

      <h2>¥360<span>(税込)送料込み</span></h2>

      <button type="button" class="proceed_to_purchase"><a href="purchase.php">購入画面に進む</a></button>

      <div class="item_description">あああああああああああああああ</div>
      <!-- 商品の説明はありません -->
      <div class="bottom_flex">
        <div class="gray"><i class="far fa-heart"></i> いいね! 0</div>
        <div class="gray"><i class="far fa-flag"></i> 不適切な商品の報告</div>
        <div class="blue"><i class="fas fa-lock"></i> あんしん・あんぜんへの取り組み</div>
      </div>
    </div>
    <div class="gap">コメント</div>
    <div class="comment_area">
      <div class="comment_rule">相手のことを考え丁寧なコメントを心がけましょう。不快な言葉遣いなどは利用制限や退会処分となることがあります。</div>
      <form action="comment.php" method="POST">
        <textarea name="comment"></textarea>
        <button type="submit">コメントする</button>
      </form>
    </div>
  </main>
  <div class="gap">コメント</div>
  <?= $footerMenu ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>