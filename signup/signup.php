<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../sell/css/sell.css">
  <link rel="stylesheet" href="signup.css">
  <title>新規会員登録</title>
  <style>
    input[type=file]{
      border: none;
    }
  </style>

</head>

<body>
  <div class="top"><a href="../index.php"><img src="../img/logo.svg" alt=""></a></div>
  <form action="act.php" method="post" enctype="multipart/form-data">

    <div class="input_top">会員情報入力</div>
    <hr>
    <div class="form_inner">
      <div>ニックネーム　<span>必須</span></div>
      <div class="section_input">
        <input class="member_info_input" type="text" name="nickname" placeholder="例) メルカリ太郎" required>
        <div class="hidden alert">ニックネームを入力してください</div>
      </div>

      <div>メールアドレス　<span>必須</span></div>
      <div class="section_input"><input class="member_info_input" type="email" name="email" placeholder="PC・携帯どちらでも可" required>
        <div class="hidden alert">メールアドレスを入力してください</div>
      </div>

      <div>パスワード　<span>必須</span></div>
      <div class="section_input"><input id="password" class="member_info_input" name="password" type="password" placeholder="7文字以上の半角英数" required>
        <div class="hidden alert">パスワードを入力してください</div>
      </div>

      <div class="caution">※ 英字と数字の両方を含めて設定してください</div>
      <label><input type="checkbox" id="password-check">パスワードを表示する</label>
      <div class="section_divider">本人確認</div>
      <div class="detail">安心・安全にご利用いただくために、お客さまの本人情報の登録にご協力ください。他のお客さまに公開されることはありません。</div>

      <div style="padding-bottom:10px"><input type="file" name="image"></div>

      <div>お名前(全角)　<span>必須</span></div>
      <div class="name_flex">
        <div class="section_input"><input class="member_info_input" type="text" name="family_name" placeholder="例) 山田" required>
          <div class="hidden alert">姓を入力してください</div>
        </div>
        <div class="section_input"><input class="member_info_input" type="text" name="given_name" placeholder="例) 彩" required>
          <div class="hidden alert">名を入力してください</div>
        </div>
      </div>

      <div>お名前カナ(全角)　<span>必須</span></div>
      <div class="name_flex">
        <div class="section_input"><input class="member_info_input" type="text" name="family_name_kana" placeholder="例) ヤマダ" required>
          <div class="hidden alert">姓カナを入力してください</div>
        </div>
        <div class="section_input"><input class="member_info_input" type="text" name="given_name_kana" placeholder="例) アヤ" required>
          <div class="hidden alert">名カナを入力してください</div>
        </div>
      </div>

      <div>生年月日　<span>必須</span></div>
      <div class="birthday_wrapper">
        <select id="select_year" name="year" required>
          <option value="--">--</option>
        </select><span class="ymd_position">年</span>
        <select id="select_month" name="month" required>
          <option value="--">--</option>
        </select>
        <span class="ymd_position">月</span>
        <select id="select_day" name="day" required>
          <option value="--">--</option>
        </select>
        <span class="ymd_position">日</span>
      </div>
      <div class="hidden alert">生年月日を入力してください</div>

      <div class="caution">※ 本人情報は正しく入力してください。会員登録後、修正するにはお時間を頂く場合があります。</div>

      <div class="agreement">「次へ進む」のボタンを押すことにより、<span class="usage_rule">利用規約</span>に同意したものとみなします</div>
      <input type="hidden" name="kanri_flg" value="0">
      <input type="hidden" name="life_flg" value="0">

      <button type="submit" class="wide_btn">次へ進む</button>

      <div class="see_more">本人情報の登録について&gt;</div>

      <div class="protection">
        <div>This site is protected by reCAPTCHA and the Google <span class="usage_rule bg_gray">Privacy Policy</span> and <span class="usage_rule bg_gray">Terms of Service</span>
          apply.</div>
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
        <div class="footer_logo_position"><a href="../index.php"><img class="footer_img" src="../sell/sell_footer_logo.svg" alt=""></a></div>
      </div>
      <div class="footer_company_logo">© Mercari, Inc.</div>

    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="signup.js"></script>
</body>

</html>