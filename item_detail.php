<?php

session_start();
include('functions.php');
$pdo = connectToDb();
// var_dump($_GET);
// var_dump($_POST);
// var_dump($_SESSION);
// exit();
if (
  !isset($_SESSION['session_id']) ||
  $_SESSION['session_id'] != session_id()
) {
  // header('Location: index.php'); // ダメだった場合ログイン画面へ移動
  $item_id = intval($_GET['id']);
  $sql = 'SELECT * FROM product
  LEFT OUTER JOIN (SELECT nickname, id AS id FROM user_table) AS user
  ON product.user_id = user.id
  where product.id = :id'; //追加行

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $item_id, PDO::PARAM_INT);
  $status = $stmt->execute();

  //データ表示
  if ($status == false) {
    // エラーのとき
    showSqlErrorMsg($stmt);
  } else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // $rs = $stmt->fetchAll();
  }

  $view = '<div class="flex_right">
          <div class="register btn">
            <a href="signup/signup.php">新規会員登録</a>
          </div>
          <div class="login btn">
            <a href="login/login.php">ログイン</a>
          </div>
        </div>';
  $comment = '';
  $link_to_buy = 'login/login.php';
} else {
  session_regenerate_id(true); // OKの場合セッションidの再生成
  $_SESSION['session_id'] = session_id();
  // 新しくできたセッション変数を格納
  $user_id = $_SESSION['id']; //ユーザー
  $item_id = intval($_GET['id']);
  // $sql = 'SELECT * FROM product where id = :id';

  $sql = 'SELECT * FROM product
LEFT OUTER JOIN (SELECT nickname, id AS id FROM user_table) AS user
ON product.user_id = user.id
where product.id = :id'; //追加行

  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $item_id, PDO::PARAM_INT);
  $status = $stmt->execute();

  //データ表示
  if ($status == false) {
    // エラーのとき
    showSqlErrorMsg($stmt);
  } else {
    // エラーでないとき
    $rs = $stmt->fetch();
    // $rs = $stmt->fetchAll();
  }
  // var_dump($rs[0]);
  // exit();
  $view = '<div class="flex_right">
          <div class="iine"><a href=""><i class="far fa-heart"></i> いいね!一覧</a></div>
          <div class="notice"><a href=""><i class="far fa-bell"></i> お知らせ</a></div>
          <div class="todo"><a href=""><i class="fas fa-check"></i> やることリスト</a></div>
          <div class="mypage"><a href="mypage.php?id=';
  $view .= $user_id;
  $view .= '"><i class="far fa-user-circle"></i> マイページ</a></div>
        </div>';
  $comment = '<div class="gap">コメント</div>
    <div class="comment_area">
      <div class="comment_rule">相手のことを考え丁寧なコメントを心がけましょう。不快な言葉遣いなどは利用制限や退会処分となることがあります。</div>
      <form action="comment.php" method="POST">
        <textarea name="comment"></textarea>
        <button type="submit">コメントする</button>
      </form>
    </div>
  </main>';
  $link_to_buy = 'purchase.php?id='.$rs[0];
}

// $id = $_GET['id'];
// echo $id;
// exit();


// $headerMenu = headerMenu();
$footerMenu = footerMenu();

// var_dump($id);
// var_dump($rs);
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
  <link rel="stylesheet" href="css/item_detail.css">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <style>
    .search_box button {
      height: 100%;
      width: 6%;
      top: -14px;
      right: 3px;
      padding: 0;
    }
  </style>
  <title>商品詳細ページ</title>
</head>

<body>
  <div class="header_width">

    <div class="header_top">
      <div class="header_img"><a href="index.php"><img src="img/top_logo.png" alt="ロゴ"></a></div>
      <div style="width: 86%;">
        <form style="width:100%;" name="top_form" action="list.php" method="GET">
          <div class="search_box"><input id="search_box" type="text" name="search" placeholder=" 何かお探しですか？"><button><i class="fas fa-search"></i></button></div>
        </form>
      </div>
    </div>

    <div class="menu_row">
      <div class="flex_left">
        <div>
          <ul class="gnav">
            <li class="category_search">
              <a class="category_root" href=""></a><span><i class="fas fa-list"></i></span>
              カテゴリーから探す</a>
              <ul class="list1">
                <li class="ladies_list">
                  <a href="#">レディース</a>
                  <ul class="ladies_category">
                    <li><a href="">トップス</a></li>
                    <li><a href="">ジャケット/アウター</a></li>
                    <li><a href="">パンツ</a></li>
                    <li class="skirt"><a href="">スカート</a>
                      <ul class="skirt_category">
                        <li><a href="">ミニスカート</a></li>
                        <li><a href="">ひざ丈スカート</a></li>
                        <li><a href="">ロングスカート</a></li>
                        <li><a href="">キュロット</a></li>
                        <li><a href="">その他</a></li>
                      </ul>
                    </li>
                    <li><a href="">ワンピース</a></li>
                    <li><a href="">靴</a></li>
                    <li><a href="">ルームウェア</a></li>
                    <li><a href="">レッグウェア</a></li>
                    <li><a href="">帽子</li>
                    <li><a href="">バッグ</a></li>
                    <li><a href="">アクセサリー</a></li>
                    <li><a href="">ヘアアクセサリー</a></li>
                    <li><a href="">小物</a></li>
                    <li><a href="">時計</a></li>
                  </ul>
                </li>
                <li><a href="#">メンズ</a></li>
                <li><a href="#">ベビー・キッズ</a></li>
                <li><a href="#">インテリア・住まい・小物</a></li>
                <li><a href="#">本・音楽・ゲーム</a></li>
                <li><a href="#">おもちゃ・ホビー・グッズ</a></li>
                <li><a href="#">コスメ・香水・美容</a></li>
                <li><a href="#">家電・スマホ・カメラ</a></li>
                <li><a href="#">スポーツ・レジャー</a></li>
                <li><a href="#">ハンドメイド</a></li>
                <li><a href="#">チケット</a></li>
                <li><a href="#">自動車・オートバイ</a></li>
                <li><a href="#">その他</a></li>
                <li><a href="#">カテゴリー一覧</a></li>
              </ul>
            </li>
          </ul>
        </div>

        <div>
          <li class="brand_search">
            <a href=""></a><span><i class="fas fa-tag"></i></span>
            ブランドから探す</a>
            <ul class="list2">
              <!-- <ul class="list2"> -->
              <li style="margin-top: 11px;"><a href="#">シャネル</a></li>
              <li><a href="#">ナイキ</a></li>
              <li><a href="#">ルイ ヴィトン</a></li>
              <li><a href="#">シュプリーム</a></li>
              <li><a href="#">アディダス</a></li>
              <li><a href="#">ブランド一覧</a></li>
            </ul>
          </li>
          </ul>
        </div>
      </div>
      <?= $view ?>


    </div>
  </div>

  <main>
    <div class="gap">商品</div>
    <div class="item_detail">

      <h1><?= $rs['name'] ?></h1>
      <div class="item_flex">
        <div class="image_section">
          <img src="sell/<?= $rs['image'] ?>" alt="">
        </div>
        <div class="info_section">
          <table id="table" border="1">
            <tr>
              <th>出品者</th>
              <th><?= $rs['nickname']?></th>
              
            </tr>
            <tr>
              <th>カテゴリー</th>
              <th><?= $rs['category'] ?></th>
            </tr>
            <tr>
              <th>ブランド</th>
              <th></th>
            </tr>
            <tr>
              <th>商品の状態</th>
              <th><?= $rs['item_condition'] ?></th>
            </tr>
            <tr>
              <th>配送料の負担</th>
              <th><?= $rs['shipping_fee'] ?></th>
            </tr>
            <tr>
              <th>配送の方法</th>
              <th>ゆうゆうメルカリ便</th>
            </tr>
            <tr>
              <th>配送元地域</th>
              <th><?= $rs['area'] ?></th>
            </tr>
            <tr>
              <th>発送日の目安</th>
              <th><?= $rs['necessary_days'] ?></th>
            </tr>
          </table>
        </div>
      </div>
      <!-- フレックス終わり -->

      <h2><?= $rs['price'] ?>円<span>(税込)送料込み</span></h2>

      <button type="button" class="proceed_to_purchase"><a href="<?=$link_to_buy?>">購入画面に進む</a></button>

      <div class="item_description"><?= $rs['description'] ?></div>
      <!-- 商品の説明はありません -->
      <div class="bottom_flex">
        <div class="gray"><i class="far fa-heart"></i> いいね! 0</div>
        <div class="gray"><i class="far fa-flag"></i> 不適切な商品の報告</div>
        <div class="blue"><i class="fas fa-lock"></i> あんしん・あんぜんへの取り組み</div>
      </div>
    </div>
    <?= $comment ?>
    <div class="gap">コメント</div>
    <?= $footerMenu ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>