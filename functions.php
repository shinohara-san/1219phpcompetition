<?php
//共通で使うものを別ファイルにしておきましょう。

//DB接続関数（PDO）
function connectToDb()
{
  $dbn = 'mysql:dbname=phpcompetition201912;charset=utf8;port=3306;host=localhost';
  $user = 'root';
  $pwd = '';
  try {
    return new PDO($dbn, $user, $pwd);
  } catch (PDOException $e) {
    exit('dbError:' . $e->getMessage());
  }
}

// テーブル名
$product = 'product';

//SQL処理エラー
function showSqlErrorMsg($stmt)
{
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
}

// function h($str)
// {
//   return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
// }

function checkSessionId()
{
  // ログイン失敗時の処理（ログイン画面に移動）
  // isset->値ありますか？という意味
  if (
    !isset($_SESSION['session_id']) ||
    $_SESSION['session_id'] != session_id()
  ) {
    header('Location: index.php'); // ダメだった場合ログイン画面へ移動
  } else {
    session_regenerate_id(true); // OKの場合セッションidの再生成
    $_SESSION['session_id'] = session_id(); // 新しくできたセッション変数を格納
  }
}

function headerMenu(){
$header = '<div class="header_width">
    <div class="header_top">
      <div class="header_img"><a href="index.php"><img src="img/top_logo.png" alt="ロゴ"></a></div>
      <div class="search_box"><input id="search_box" type="text" name="search" placeholder=" 何かお探しですか？"><a class="search_logo" href="#"><i class="fas fa-search"></i></a></div>
    </div>';

$header .='<div class="menu_row">
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
        </div>';

  $header .='<div>
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
      </div>';
    
    $header .='<div class="flex_right">
        <div class="iine"><a href=""><i class="far fa-heart"></i> いいね!一覧</a></div>
        <div class="notice"><a href=""><i class="far fa-bell"></i> お知らせ</a></div>
        <div class="todo"><a href=""><i class="fas fa-check"></i> やることリスト</a></div>
        <div class="mypage"><a href="mypage.php?id=<?= $id ?>"><i class="far fa-user-circle"></i> マイページ</a></div>
      </div>';
    
    
    $header .= '<div class="flex_right">
        <div class="register btn">
          <a href="signup/signup.php">新規会員登録</a>
        </div>
        <div class="login btn">
          <a href="login/login.php">ログイン</a>
        </div>
      </div>';
    
    $header .= '</div></div>';

  return $header;
}

function footerMenu(){
  $footer = '<div class="footer_pic"><img class="app_img" src="img/footer_pic.png" alt=""></div>
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
          <div><a href="https://www.facebook.com/mercarijp" target="_block"><i class="fab fa-facebook-square"></i></a></div>
        </div>
        <div><a href=""><img src="img/logo-white.svg" alt=""></a></div>
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
        <div class="otherlinks"><a href="">特定商取引に関する表記</a></div>
        <div class="otherlinks"><a href="">資金決済法に基づく表示</a></div>
        <div class="otherlinks"><a href="">法令遵守と犯罪抑止のために</a></div>
      </div>
      <div class="column_gap">
        <div class="column_title">国</div>
        <div class="otherlinks"><a href="">日本</a></div>
        <div class="otherlinks"><a href="">United States</a></div>
      </div>
    </div>



  </footer>';

  return $footer;
}