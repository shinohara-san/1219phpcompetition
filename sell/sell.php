<?php
session_start();
include('../functions.php');

checkSessionId();

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/sell.css">
  <title>出品ページ</title>
  <style>
    *{
      outline: none;
    }
  </style>
</head>

<body>
  <div class="top"><a href="../index.php"><img src="../img/logo.svg" alt=""></a></div>
  <form action="act.php" method="post" enctype="multipart/form-data">
    <div class="input_top">商品の情報を入力</div>
    <hr>
    <div class="input_inner">
      <div class="item_pic_title shuppin_section">出品画像　<span>必須</span></div>
      <div class="shuppin_second_section">最大10枚までアップロードできます</div>

      <div class="picture_flex">
        <div class="show hidden">
          <img src="" alt="" id="thumbnail">
          <div class="edit_flex">
            <div>編集</div>
            <div>削除</div>
          </div>
        </div>
        <div class="dragdrop">
          <input id="upfile" type="file" name="image" required>
          <!-- <div class="dragdrop_msg"> -->
          <div class="dragdrop1">ドラッグアンドドロップ</div><br>
          <div class="dragdrop2">またはクリックしてファイルをアップロード</div>
          <!-- </div> -->
        </div>
      </div>
    </div>
    <hr>
    <div class="input_inner item_info">
      <div class="shuppin_section">商品名　<span>必須</span></div>
      <div><input required type="text" name="name" placeholder="商品名（必須 40文字まで)"></div>
      <div class="shuppin_section">商品の説明　<span>必須</span></div>
      <div>
        <textarea required name="description" id="" cols="30" rows="10" placeholder=" 商品の説明（必須 1,000文字以内）（色、素材、重さ、定価、注意点など）例）2010年頃に1万円で購入したジャケットです。ライトグレーで傷はありません。あわせやすいのでおすすめです。"></textarea>
      </div>
    </div>
    <hr>

    <div class="input_inner">
      <div class="section_flex">
        <div class="product_detail left">商品の詳細</div>
        <div class="product_category right">
          <div class="product_category_title">カテゴリー　<span>必須</span></div>
          <select class="category_select" required name="category">
            <option value="">---</option>
            <option value="レディース">レディース</option>
            <option value="メンズ">メンズ</option>
            <option value="ベビー・キッズ">ベビー・キッズ</option>
            <option value="インテリア・住まい・小物">インテリア・住まい・小物</option>
            <option value="本・音楽・ゲーム">本・音楽・ゲーム</option>
            <option value="おもちゃ・ホビー・グッズ">おもちゃ・ホビー・グッズ</option>
            <option value="コスメ・香水">コスメ・香水</option>
            <option value="家電・スマホ・カメラ">家電・スマホ・カメラ</option>
            <option value="スポーツ・レジャー">スポーツ・レジャー</option>
            <option value="ハンドメイド">ハンドメイド</option>
            <option value="チケット">チケット</option>
            <option value="自転車・オートバイ">自転車・オートバイ</option>
            <option value="その他">その他</option>
          </select>
          <div class="product_category_title shuppin_section">商品の状態　<span>必須</span></div>
          <select class="condition_select" required name="item_condition">
            <option value="">---</option>
            <option value="新品、未使用">新品、未使用</option>
            <option value="未使用に近い">未使用に近い</option>
            <option value="目立った傷や汚れなし">目立った傷や汚れなし</option>
            <option value="やや傷や汚れあり">やや傷や汚れあり</option>
            <option value="傷や汚れあり">傷や汚れあり</option>
            <option value="全体的に状態が悪い">全体的に状態が悪い</option>

          </select>
        </div>
      </div>
    </div>
    <hr>
    <div class="input_inner">
      <div class="section_flex">
        <div class="product_detail left">配送について<a href=""><span class="question">？</span></a></div>
        <div class="product_category right">
          <div class="product_category_title">配送料の負担　<span>必須</span></div>
          <select class="condition_select" required name="shipping_fee">
            <option value="">---</option>
            <option name="shipping_fee" value="送料込み（出品者負担）">送料込み（出品者負担）</option>
            <option name="shipping_fee" value="着払い（購入者負担）">着払い（購入者負担）</option>
          </select>
          <div class="product_category_title shipping_area">発送元の地域　<span>必須</span></div>
          <select class="condition_select" name="area" required>
            <option value="" selected>---</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県</option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫県">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
          <div class="product_category_title shipping_days">発送までの日数　<span>必須</span></div>
          <select class="condition_select" name="necessary_days" required>
            <option value="">---</option>
            <option value="1~2日で発送">1~2日で発送</option>
            <option value="2~3日で発送">2~3日で発送</option>
            <option value="4~7日で発送">4~7日で発送</option>
          </select>


        </div>
      </div>
    </div>
    <hr>
    <div class="input_inner">
      <div class="section_flex">
        <div class="product_detail left">販売価格(300〜9,999,999)<a href=""><span class="question">？</span></a></div>
        <div class="product_category right">
          <div class="price_flex">
            <div class="product_category_title padding_adjust">価格　<span>必須</span></div>
            <div class="dollar_mark padding_adjust">￥　</div>
            <div class="price_input">
              <input required type="text" name="price" class="price_input_input" placeholder="例)　300"></div>
          </div>
          <hr>
          <div class="transaction_fee_wrapper">
            <div class="product_category_title padding_adjust2">販売手数料 (10%)</div>
            <!-- <hr> -->
            <div class="transaction_fee">-</div>
          </div>
          <hr>
          <div class="profit_wrapper">
            <div class="product_category_title padding_adjust2">販売利益</div>
            <div class="profit">-</div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="input_inner fontsize_adjust">
      <div><span class="sell_rule padding-reset"><a href="">禁止されている出品</a></span>、<span class="sell_rule padding-reset"><a href="">行為</a></span>を必ずご確認ください。</div>
      <div>またブランド品でシリアルナンバー等がある場合はご記載ください。<span class="sell_rule padding-reset"><a href="">偽ブランドの販売</a></span>は犯罪であり処罰される可能性があります。</div>
      <div>また、出品をもちまして<span class="sell_rule padding-reset"><a href="">加盟店規約</a></span>に同意したことになります。</div>
    </div>
    <div class="btn_area">
      <button class="submit" type="submit">出品</button>
      <button class="return" type="button">
        <a href="../index.php">もどる</a>
      </button>
    </div>
    </div>
  </form>
  <footer>
    <div class="footer_wrapper">
      <div class="footer_flex">
        <div>プライバシーポリシー</div>
        <div>メルカリ利用規約</div>
        <div>特定商取引に関する表記</div>
      </div>
      <div>
        <div class="footer_logo_position"><img class="footer_img" src="sell_footer_logo.svg" alt=""></div>
      </div>
      <div class="footer_company_logo">© Mercari, Inc.</div>

    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../js/sell.js"></script>
</body>

</html>