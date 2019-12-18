<?php
session_start();
include('functions.php');

checkSessionId();


?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login/login.css">
  <link rel="stylesheet" href="sell/css/sell.css">
  <title>Document</title>
  <style>
    main{
      text-align:center;
    }
  </style>
</head>

<body>
  <div class="top"><a href="index.php"><img src="img/logo.svg" alt=""></a></div>
  <main>

    <div>購入が完了しました。</div>
    <a href="index.php">トップへ戻る</a>
  </main>

  <footer>
    <div class="footer_wrapper">
      <div class="footer_flex">
        <div>プライバシーポリシー</div>
        <div>メルカリ利用規約</div>
        <div>特定商取引に関する表記</div>
      </div>
      <div>
        <div class="footer_logo_position"><img class="footer_img" src="sell/sell_footer_logo.svg" alt=""></div>
      </div>
      <div class="footer_company_logo">© Mercari, Inc.</div>

    </div>
  </footer>
</body>

</html>