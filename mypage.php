<?php
session_start();
include('functions.php');

if (
  !isset($_SESSION['session_id']) ||
  $_SESSION['session_id'] != session_id()
) {
  header('Location: index.php'); // ダメだった場合ログイン画面へ移動

} else {
  session_regenerate_id(true); // OKの場合セッションidの再生成
  $_SESSION['session_id'] = session_id();
  $id = $_GET['id'];
  // var_dump($id);
  // exit();
  // 新しくできたセッション変数を格納
  // $id = $_SESSION['id'];
  $view = '<div class="flex_right">
          <div class="iine"><a href=""><i class="far fa-heart"></i> いいね!一覧</a></div>
          <div class="notice"><a href=""><i class="far fa-bell"></i> お知らせ</a></div>
          <div class="todo"><a href=""><i class="fas fa-check"></i> やることリスト</a></div>
          <div class="mypage"><a href="mypage.php?id=';
  $view .= $id;
  $view .= '"><i class="far fa-user-circle"></i> マイページ</a></div>
        </div>';
}

$headerMenu = headerMenu();
$footerMenu = footerMenu();
$pdo = connectToDb();

// var_dump(($_GET['id']));
// var_dump(intval($_GET['id']));
// exit();



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

if (!$rs['image']) {
  $image = '<img src="img/nophoto.jpg" alt="">';
} else {
  $image = '<img src="signup/<?=';
  $image .= $rs;
  $image .= '["image"]?>" alt="">';
}
// $id=intval($id);
// var_dump($id);
// exit();

// 出品個数
$sql = 'SELECT COUNT(*) FROM product WHERE user_id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//データ表示
if ($status == false) {
  // エラーのとき
  showSqlErrorMsg($stmt);
} else {
  // エラーでないとき
  $cnt = $stmt->fetch();
}
// echo $cnt;
// exit();

// var_dump($_cnt);
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
<img src="" alt="">

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
              <ul class="list1" style="top:90px">
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
            <ul class="list2" style="top:90px">
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
          <div class="profile_picture"><?= $image ?></div>
          <div class="user_name"><?= $rs['nickname'] ?></div>
          <div class="right_top_flex">
            <div>評価 59</div>
            <div>出品数 <?= $cnt['COUNT(*)'] ?></div>
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