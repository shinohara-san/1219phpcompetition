<?php
session_start();
include('functions.php');

checkSessionId();
$headerMenu = headerMenu();
$footerMenu = footerMenu();
$pdo = connectToDb();

// var_dump(intval($_GET['id']));
// exit();
// 写真をデータベースから持ってくる
$id = intval($_GET['id']);

$sql = 'SELECT * FROM user_table WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
  // エラーのとき
  showSqlErrorMsg($stmt);
} else {
  // エラーでないとき
  $rs = $stmt->fetch();
}

// echo $rs;
// exit();

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
  <link rel="stylesheet" href="css/mypage.css">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>マイページ</title>
</head>

<body>
  <?= $headerMenu ?>
  <div class="mypage_header">
    <div><a href="index.php">メルカリ</a>　&gt;　マイページ</div>
  </div>

  <main>
    <div class="main_wrapper">
      <div class="mypage_left">
        <h2 class="mypage_left_title">マイページ</h2>
        <div class="border_btm">お知らせ</div>
        <div class="border_btm">やることリスト</div>
        <div class="border_btm">いいね！一覧</div>
        <div class="border_btm">出品する</div>
        <div class="border_btm">出品した商品 - 出品中</div>
        <div class="border_btm">出品した商品 - 取引中</div>
        <div class="border_btm">出品した商品 - 売却済み</div>
        <div class="border_btm">購入した商品 - 取引中</div>
        <div class="border_btm">購入した商品 - 過去の取引</div>
        <div class="border_btm">ニュース一覧</div>
        <div class="border_btm">評価一覧</div>
        <div class="border_btm">ガイド</div>
        <div>お問い合わせ</div>

        <h2 class="sub_title">メルペイ</h2>
        <div class="border_btm">残高・振込申請</div>
        <div>ポイント</div>

        <h2 class="sub_title">設定</h2>
        <div class="border_btm">プロフィール</div>
        <div class="border_btm">発送元・お届け先住所変更</div>
        <div class="border_btm">支払い方法</div>
        <div class="border_btm">メール/パスワード</div>
        <div class="border_btm">本人情報</div>
        <div class="border_btm">電話番号の確認</div>
        <div><a href="logout.php">ログアウト</a></div>
      </div>

      <div class="mypage_right">
        <div class="mypage_right_top">
          <div class="profile_picture"><img src="https://gurimu-blog.com/wp-content/uploads/%E6%9C%89%E6%9D%91%E6%9E%B6%E7%B4%94-%E5%A4%A7%E5%AD%A6.jpg" alt=""></div>
          <div class="user_name"><?= $rs['nickname']?></div>
          <div class="right_top_flex">
            <div>評価 59</div>
            <div>出品数 69</div>
          </div>
        </div>
        <div class="mypage_right_middle">
          <div class="oshirase  bg_gray tab is-active">お知らせ</div>
          <div class="yarukotorisuto bg_gray tab">やることリスト</div>
        </div>
        <div class="notice_from_merukari panel is-show">
          <div class="notice_msg">
            <img src="img/mercari_profile.png" alt="">あああああああああ</div>
          <hr>
          <div class="notice_msg"><img src="img/mercari_profile.png" alt="">いいいいいいいいい</div>
          <hr>
          <div class="notice_msg"><img src="img/mercari_profile.png" alt="">ううううううううう</div>
          <hr>
          <div class="notice_msg"><img src="img/mercari_profile.png" alt="">えええええええええ</div>
          <hr>
          <div class="notice_msg"><img src="img/mercari_profile.png" alt="">おおおおおおおおお</div>
          <hr>
          <div class="check_all">一覧を見る</div>
        </div>
        <div class="todolist panel">
          <div class="nothingtodo_pic"><img src="img/gray_logo.png" alt=""></div>
          <p class="nothingtodo">現在、やることリストはありません</p>
</div>


        <!-- <div class="history">
          <div>購入した商品</div>
          <div class="transaction">
            <div>取引中</div>
            <div>過去の取引</div>
          </div>
          <div></div>
          <div></div>
        </div> -->


      </div>


    </div>
  </main>
  <?= $footerMenu ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>