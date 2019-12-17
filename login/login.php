<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="../sell/css/sell.css">

  <title>ログイン</title>

<body>
  <div class="top"><a href="../index.php"><img src="../img/logo.svg" alt=""></a></div>

  <main>
    <form action="act.php" method="POST">
      <div class="no_account">
        <div>アカウントをお持ちでない方はこちら</div>
        <div class="to_signup"><a href="../signup/signup.php">新規会員登録</a></div>

      </div>
      <hr>
      <div class="login_input">
        <div><input type="email" name="email" placeholder="メールアドレス"></div>
        <div><input type="password" name="password" placeholder="パスワード"></div>
      </div>
      <div id="robot_check"><label class="iamnotarobot"><input type="checkbox" v-model="myAgree">私はロボットではありません<img src="recapture.jpg" alt=""></label>
        <div class="login_submit"><button v-bind:disabled="myAgree==false" type="submit">ログイン</button></div>
      </div>


      <div class="fogotten_pwd">パスワードをお忘れの方</div>
    </form>
  </main>

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
  <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
  <script>
    new Vue({
      el: "#robot_check",
      data: {
        myAgree: false
      }
    })
  </script>
</body>

</html>