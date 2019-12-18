<?php
// session_start();
include('functions.php');

// checkSessionId();
$headerMenu = headerMenu();
$footerMenu = footerMenu();
// $pdo = connectToDb();

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
  <?= $headerMenu ?>
  <div class="shuppin_btn"><a href="sell/sell.php">出品<div class="camera_btn"><i class="fas fa-camera"></i></div></a></div>
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

          <div class="category_title">
            <div id="ladies" class="category_title_title">レディース新着アイテム</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>

          <div class="product_inner">
            <div class="each_product">
              <a href="item_detail.php">
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


          <div class="category_title">
            <div id="mens" class="category_title_title">メンズ新着アイテム</div>
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

          <div class="category_title">
            <div id="appliance" class="category_title_title">家電・スマホ・カメラ</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>

          <div class="product_inner">
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
          </div>
          <div class="category_title">
            <div id="toys" class="category_title_title">おもちゃ・ホビー・グッズ</div>
            <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
          </div>

          <div class="product_inner">
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
              <div class="product_info">ああああ</a></div>
            </div>
            <div class="each_product">
              <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
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
                <div id="chanel" class="category_title_title">シャネル新着アイテム</div>
                <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
              </div>

              <div class="product_inner">
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
                <div class="each_product">
                  <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                  <div class="product_info">ああああ</a></div>
                </div>
              </div>

              <div class="product_section">
                <div class="category_title">
                  <div id="vuitton" class="category_title_title">ルイヴィトン新着アイテム</div>
                  <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
                </div>

                <div class="product_inner">
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                  <div class="each_product">
                    <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                    <div class="product_info">ああああ</a></div>
                  </div>
                </div>

                <div class="product_section">
                  <div class="category_title">
                    <div id="supreme" class="category_title_title">シュプリーム新着アイテム</div>
                    <div class="see_more"><a href="" class="see_more">もっと見る&gt;</a></div>
                  </div>

                  <div class="product_inner">
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                      <div class="product_info">ああああ</a></div>
                    </div>
                    <div class="each_product">
                      <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
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
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
                      </div>
                      <div class="each_product">
                        <div><a href=""><img class="product_img" src="img/itempic.jpg" alt=""></div>
                        <div class="product_info">ああああ</a></div>
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