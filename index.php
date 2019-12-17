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
    <!-- <header> -->
      <div class="header_width">
      <div class="header_top">
        <div class="header_img"><a href=""><img src="img/top_logo.png" alt="ロゴ"></a></div>
        <div class="search_box"><input id="search_box"type="text" name="search" placeholder=" 何かお探しですか？"><a class="search_logo"href="#"><i class="fas fa-search"></i></a></div>
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
                <li  style="margin-top: 11px;"><a href="#">シャネル</a></li>
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
         
          <div class="flex_right member">
            <div class="iine"><a href=""><i class="far fa-heart"></i> いいね!一覧</a></div>
            <div class="notice"><a href=""><i class="far fa-bell"></i> お知らせ</a></div>
            <div class="todo"><a href=""><i class="fas fa-check"></i> やることリスト</a></div>
            <div class="mypage"><a href=""><i class="far fa-user-circle"></i> マイページ</a></div>
          </div>

          <div class="flex_right non_member">
            <div class="register btn">
              <a href="signup/signup.php">新規会員登録</a>
            </div>
            <div class="login btn">
              <a href="login/login.php">ログイン</a>
            </div>
          </div>
        </div>
        </div>
    <!-- </header> -->
        

        
   
    
    <main>

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

        <div  class="category_title">
          <div id="ladies"class="category_title_title">レディース新着アイテム</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
            <div class="product_pic"><img class="product_img"src="img/itempic.jpg" alt=""><div class="price">¥1000円</div></div>
            <div class="product_info">ああああ</div>
            </a>
          </div>
        </div>
        
        
        <div  class="category_title">
          <div id="mens"class="category_title_title">メンズ新着アイテム</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
          <div class="each_product">
            <a href="">
              <div class="product_pic"><img class="product_img" src="img/itempic.jpg" alt="">
                <div class="price">¥1000円</div>
              </div>
              <div class="product_info">ああああ</div>
            </a>
          </div>
        </div>

        <div  class="category_title">
          <div id="appliance" class="category_title_title">家電・スマホ・カメラ</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
        </div>
        <div  class="category_title">
          <div id="toys" class="category_title_title">おもちゃ・ホビー・グッズ</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
        </div>
        </div>
        

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
          <div id="chanel"class="category_title_title">シャネル新着アイテム</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
        </div>
    
      <div class="product_section">
        <div class="category_title">
          <div id="vuitton"class="category_title_title">ルイヴィトン新着アイテム</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
        </div>
    
      <div class="product_section">
        <div class="category_title">
          <div id="supreme"class="category_title_title">シュプリーム新着アイテム</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
        </div>
    
      <div class="product_section">
        <div class="category_title">
          <div id="nike" class="category_title_title">ナイキ新着アイテム</div>
          <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
        </div>
        
        <div class="product_inner">
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          <div class="each_product">
            <div><a href=""><img class="product_img"src="img/itempic.jpg" alt=""></div>
            <div class="product_info">ああああ</a></div>
          </div>
          </div>
        </div>
    

    </main>
    <div class="footer_pic"><img class="app_img" src="img/footer_pic.png" alt=""></div>
    <div class="shuppin_btn"><a href="sell/sell.php">出品<div class="camera_btn"><i class="fas fa-camera"></i></div></a></div>

    <footer>
    <div class="footer_inner">
      <div class="column_gap">
       <div class="column_title">メルカリについて</div>
       <div class="otherlinks"><a href="">会社概要（運営会社）</a></div>
       <div class="otherlinks"><a href="">採用情報</a></div>
       <div class="otherlinks"><a href="">プレスリリース</a></div>
       <div class="otherlinks"><a href="">公式ブログ</a></div>
       <div class="otherlinks"><a href="">メルカリロゴ利用ガイドライン</a></div>
       <div class="sns_account">
         <div><a href="https://twitter.com/mercari_jp" target="_block" class="twitter_account"><i class="fab fa-twitter"></i></a></div>
         <div><a href="https://www.facebook.com/mercarijp" target="_block"><i class="fab fa-facebook-square"></i></a></div></div>
        <div><a href=""><img src="img/white_logo.svg" alt=""></a></div>
      </div>
      
      <div class="column_gap">
       <div class="column_title">ヘルプ＆ガイド</div>
       <div class="otherlinks"><a href="">メルカリガイド</a></div>
       <div class="otherlinks"><a href="">らくらくメルカリ便</a></div>
       <div class="otherlinks"><a href="">ゆうゆうメルカリ便</a></div>
       <div class="otherlinks"><a href="">大型メルカリ便</a></div>
       <div class="otherlinks"><a href="">メルカリあんしん・あんぜん宣言！</a></div>
       <div class="otherlinks"><a href="">偽ブランド品撲滅への取組</a></div>
       <div class="otherlinks"><a href="">メルカリボックス</a></div>
      </div>
      <div class="column_gap">
       <div class="column_title">プライバシーと利用規約</div>
       <div class="otherlinks"><a href="">プライバシーポリシー</a></div>
       <div class="otherlinks"><a href="">メルカリ利用規約</a></div>
       <div class="otherlinks"><a href="">コンプライアンスポリシー</a></div>
      <div class="footer_logo">© Mercari, Inc.</div>
      </div>
      <div class="column_gap">
        <div class="hidden_letter column_title">あああ</div>
       <div class="otherlinks"><a href="">個人データの安全管理に係る基本方針</a></div>
       <div class="otherlinks" ><a href="">特定商取引に関する表記</a></div>
       <div class="otherlinks"><a href="">資金決済法に基づく表示</a></div>
       <div class="otherlinks"><a href="">法令遵守と犯罪抑止のために</a></div>
      </div>
      <div class="column_gap">
       <div class="column_title">国</div>
       <div class="otherlinks"><a href="">日本</a></div>
       <div class="otherlinks"><a href="">United States</a></div>
      </div>
    </div>
    
    
   
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
