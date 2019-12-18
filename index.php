<?php
session_start();
include('functions.php');

// checkSessionId();
// if (
//   !isset($_SESSION['session_id']) ||
//   $_SESSION['session_id'] != session_id()
// ) {
//   // header('Location: index.php'); // ダメだった場合ログイン画面へ移動
// } else {
//   session_regenerate_id(true); // OKの場合セッションidの再生成
//   $_SESSION['session_id'] = session_id(); // 新しくできたセッション変数を格納

// }

$id = $_SESSION['id'];
// echo $id;
// exit();

// $headerMenu = headerMenu();
$footerMenu = footerMenu();
$pdo = connectToDb();
// レディース
$sql = 'SELECT * FROM product WHERE category LIKE "レディース" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll();
// メンズ
$sql = 'SELECT * FROM product WHERE category LIKE "メンズ" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$mens = $stmt->fetchAll();
// 家電
$sql = 'SELECT * FROM product WHERE category LIKE "家電・スマホ・カメラ" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$homeappliance = $stmt->fetchAll();
// おもちゃ
$sql = 'SELECT * FROM product WHERE category LIKE "おもちゃ・ホビー・グッズ" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$toy = $stmt->fetchAll();

// シャネル
$sql = 'SELECT * FROM product WHERE name LIKE "%シャネル%" ORDER BY created_at DESC LIMIT 10';
// ホントはWHEREの後ろはカテゴリー内のブランド名で検索したい
$stmt = $pdo->prepare($sql);
$stmt->execute();
$chanel = $stmt->fetchAll();
// ヴィトン
$sql = 'SELECT * FROM product WHERE name LIKE "%ヴィトン%" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$vuitton = $stmt->fetchAll();
// シュプリーム
$sql = 'SELECT * FROM product WHERE name LIKE "%シュプリーム%" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$supreme = $stmt->fetchAll();
// ナイキ
$sql = 'SELECT * FROM product WHERE name LIKE "%ナイキ%" ORDER BY created_at DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$nike = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/header_hovermenu.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/product.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <title>メルカリ</title>
</head>

<body>

  <div class="shuppin_btn" style="z-index:1"><a href="sell/sell.php">出品<div class="camera_btn"><i class="fas fa-camera"></i></div></a></div>
  <main>
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

        <div class="flex_right">
          <div class="iine"><a href=""><i class="far fa-heart"></i> いいね!一覧</a></div>
          <div class="notice"><a href=""><i class="far fa-bell"></i> お知らせ</a></div>
          <div class="todo"><a href=""><i class="fas fa-check"></i> やることリスト</a></div>
          <div class="mypage"><a href="mypage.php?id=<?= $id ?>"><i class="far fa-user-circle"></i> マイページ</a></div>
        </div>

        <div class="flex_right">
          <div class="register btn">
            <a href="signup/signup.php">新規会員登録</a>
          </div>
          <div class="login btn">
            <a href="login/login.php">ログイン</a>
          </div>
        </div>

      </div>
    </div>;

    <div class="slider">
      <div><img src="img/slide1.png"></div>
      <div><img src="img/slide2.png"></div>
    </div>



    <div>
      <div class="popular">人気のカテゴリー</div>
      <div class="category_keyword">
        <div><a href="#ladies">レディース</a></div>
        <div><a href="#mens">メンズ</a></div>
        <div><a href="#appliance">家電・スマホ・カメラ</a></div>
        <div><a href="#toys">おもちゃ・ホビー・グッズ</a></div>
      </div>
      <div class="product_section">

        <div class="product_section_inner">

          <div class="category_title">
            <div id="ladies" class="category_title_title">レディース新着アイテム</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>
          <div class="product_inner">
            <?php for ($i = 0; $i < count($products); $i++) : ?>
              <div class="each_product">
                <a href="item_detail.php?id=<?= $products[$i]['id'] ?>">
                  <div class="product_pic"><img class="product_img" src="sell/<?= $products[$i]['image'] ?>" alt="">
                    <div class="price">¥<?= $products[$i]['price'] ?>円</div>
                  </div>
                  <div class="product_info"><?= $products[$i]['description'] ?></div>
                </a>
              </div>
            <?php endfor; ?>
          </div>

          <div class="category_title">
            <div id="mens" class="category_title_title">メンズ新着アイテム</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>

          <div class="product_inner">
            <?php for ($i = 0; $i < count($mens); $i++) : ?>
              <div class="each_product">
                <a href="item_detail.php?id=<?= $mens[$i]['id'] ?>">
                  <div class="product_pic"><img class="product_img" src="sell/<?= $mens[$i]['image'] ?>" alt="">
                    <div class="price">¥<?= $mens[$i]['price'] ?>円</div>
                  </div>
                  <div class="product_info"><?= $mens[$i]['description'] ?></div>
                </a>
              </div>
            <?php endfor; ?>
          </div>

          <div class="category_title">
            <div id="appliance" class="category_title_title">家電・スマホ・カメラ</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>

          <div class="product_inner">
            <?php for ($i = 0; $i < count($homeappliance); $i++) : ?>
              <div class="each_product">
                <a href="item_detail.php?id=<?= $homeappliance[$i]['id'] ?>">
                  <div class="product_pic"><img class="product_img" src="sell/<?= $homeappliance[$i]['image'] ?>" alt="">
                    <div class="price">¥<?= $homeappliance[$i]['price'] ?>円</div>
                  </div>
                  <div class="product_info"><?= $homeappliance[$i]['description'] ?></div>
                </a>
              </div>
            <?php endfor; ?>
          </div>
          <div class="category_title">
            <div id="toys" class="category_title_title">おもちゃ・ホビー・グッズ</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>

          <div class="product_inner">
            <?php for ($i = 0; $i < count($toy); $i++) : ?>
              <div class="each_product">
                <a href="item_detail.php?id=<?= $toy[$i]['id'] ?>">
                  <div class="product_pic"><img class="product_img" src="sell/<?= $toy[$i]['image'] ?>" alt="">
                    <div class="price">¥<?= $toy[$i]['price'] ?>円</div>
                  </div>
                  <div class="product_info"><?= $toy[$i]['description'] ?></div>
                </a>
              </div>
            <?php endfor; ?>
          </div>
        </div>

        <!-- ------------------------------------------------------------------------------------------------------------------------------------ -->
        <div>
          <div class="popular">人気のブランド</div>
          <div class="category_keyword">
            <div><a href="#chanel">シャネル</a></div>
            <div><a href="#vuitton">ルイヴィトン</a></div>
            <div><a href="#supreme">シュプリーム</a></div>
            <div><a href="#nike">ナイキ</a></div>
          </div>

          <div class="product_section_inner">
            <div class="product_section">
              <div class="category_title">
                <div id="chanel" class="category_title_title">シャネル新着アイテム</div>
                <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
              </div>
              <div class="product_inner">
                <!-- コピー -->
                <?php for ($i = 0; $i < count($chanel); $i++) : ?>
                  <div class="each_product">
                    <a href="item_detail.php?id=<?= $chanel[$i]['id'] ?>">
                      <div class="product_pic"><img class="product_img" src="sell/<?= $chanel[$i]['image'] ?>" alt="">
                        <div class="price">¥<?= $chanel[$i]['price'] ?>円</div>
                      </div>
                      <div class="product_info"><?= $chanel[$i]['description'] ?></div>
                    </a>
                  </div>
                <?php endfor; ?>
                <!-- コピー終わり -->
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/chanel.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
              </div>
              <div class="product_section">
                <div class="category_title">
                  <div id="vuitton" class="category_title_title">ルイヴィトン新着アイテム</div>
                  <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
                </div>
                <div class="product_inner">
                  <!-- コピー -->
                  <?php for ($i = 0; $i < count($vuitton); $i++) : ?>
                    <div class="each_product">
                      <a href="item_detail.php?id=<?= $vuitton[$i]['id'] ?>">
                        <div class="product_pic"><img class="product_img" src="sell/<?= $vuitton[$i]['image'] ?>" alt="">
                          <div class="price">¥<?= $vuitton[$i]['price'] ?>円</div>
                        </div>
                        <div class="product_info"><?= $vuitton[$i]['description'] ?></div>
                      </a>
                    </div>
                  <?php endfor; ?>
                  <!-- コピー終わり -->
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                  <div class="each_product">
                    <a href="item_detail.php">
                      <div class="product_pic"><img class="product_img" src="dummy/vuitton.jpg" alt="">
                        <div class="price">¥3000円</div>
                      </div>
                      <div class="product_info">ああああ</div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="product_section">
              <div class="category_title">
                <div id="supreme" class="category_title_title">シュプリーム新着アイテム</div>
                <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
              </div>
              <div class="product_inner">
                <!-- コピー -->
                <?php for ($i = 0; $i < count($supreme); $i++) : ?>
                  <div class="each_product">
                    <a href="item_detail.php?id=<?= $supreme[$i]['id'] ?>">
                      <div class="product_pic"><img class="product_img" src="sell/<?= $supreme[$i]['image'] ?>" alt="">
                        <div class="price">¥<?= $supreme[$i]['price'] ?>円</div>
                      </div>
                      <div class="product_info"><?= $supreme[$i]['description'] ?></div>
                    </a>
                  </div>
                <?php endfor; ?>
                <!-- コピー終わり -->
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/supreme.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
              </div>
            </div>
            <div class="product_section">
              <div class="category_title">
                <div id="nike" class="category_title_title">ナイキ新着アイテム</div>
                <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
              </div>
              <div class="product_inner">
                <!-- コピー -->
                <?php for ($i = 0; $i < count($nike); $i++) : ?>
                  <div class="each_product">
                    <a href="item_detail.php?id=<?= $nike[$i]['id'] ?>">
                      <div class="product_pic"><img class="product_img" src="sell/<?= $nike[$i]['image'] ?>" alt="">
                        <div class="price">¥<?= $nike[$i]['price'] ?>円</div>
                      </div>
                      <div class="product_info"><?= $nike[$i]['description'] ?></div>
                    </a>
                  </div>
                <?php endfor; ?>
                <!-- コピー終わり -->

                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>
                <div class="each_product">
                  <a href="item_detail.php">
                    <div class="product_pic"><img class="product_img" src="dummy/nike.jpg" alt="">
                      <div class="price">¥3000円</div>
                    </div>
                    <div class="product_info">ああああ</div>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
  <?= $footerMenu ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>