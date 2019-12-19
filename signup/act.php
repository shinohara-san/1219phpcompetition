<?php
// var_dump($_FILES);
// exit();

include('../functions.php');
$pdo = connectToDb();

$nickname = $_POST['nickname'];
$email = $_POST['email'];
$password = $_POST['password'];
$family_name = $_POST['family_name'];
$given_name = $_POST['given_name'];
$family_name_kana = $_POST['family_name_kana'];
$given_name_kana = $_POST['given_name_kana'];
$year = $_POST['year'];
$month = $_POST['month'];
$day = $_POST['day'];

$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];

// プロフィール写真
$uploadedFileName = $_FILES['image']['name']; //ファイル名の取得
$tempPathName = $_FILES['image']['tmp_name']; //tmpフォルダの場所
$fileDirectoryPath = 'upload/'; //アップロード先フォルダ

$extension = pathinfo($uploadedFileName, PATHINFO_EXTENSION);
// $uniqueName = date('YmdHis') . md5(session_id()) . "." . $extension;
$uniqueName = date('YmdHis') . "." . $extension;
$fileNameToSave = $fileDirectoryPath . $uniqueName;

if (is_uploaded_file($tempPathName)) {
  if (move_uploaded_file($tempPathName, $fileNameToSave)) {
    chmod($fileNameToSave, 0644);
  } else {
    exit('Error:アップロードできませんでした'); // 画像の保存に失敗
  }
} else {
  exit('Error:画像がありません');
} 

//データ登録SQL作成
$sql = 'INSERT INTO user_table(id, nickname, email, password, family_name, given_name, family_name_kana, given_name_kana, year, month, day, kanri_flg, life_flg, image)
VALUES(NULL, :a1, :a2, :a3, :a4, :a5, :a6, :a7, :a8, :a9, :a10, :a11, :a12, :image)';
// :と;を間違えるな
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $nickname, PDO::PARAM_STR);
$stmt->bindValue(':a2', $email, PDO::PARAM_STR);
$stmt->bindValue(':a3', $password, PDO::PARAM_STR);
$stmt->bindValue(':a4', $family_name, PDO::PARAM_STR);
$stmt->bindValue(':a5', $given_name, PDO::PARAM_STR);
$stmt->bindValue(':a6', $family_name_kana, PDO::PARAM_STR);
$stmt->bindValue(':a7', $given_name_kana, PDO::PARAM_STR);
$stmt->bindValue(':a8', $year, PDO::PARAM_INT);
$stmt->bindValue(':a9', $month, PDO::PARAM_INT);
$stmt->bindValue(':a10', $day, PDO::PARAM_INT);
$stmt->bindValue(':a11', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':a12', $life_flg, PDO::PARAM_INT);
$stmt->bindValue(':image', $fileNameToSave, PDO::PARAM_STR);
$status = $stmt->execute();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../sell/css/sell.css">
  <link rel="stylesheet" href="signup.css">
  <title>登録完了</title>
  <style>
    div {
      text-align: center;
    }

    .back_to_top {
      padding-top: 20px;
    }

    .back_to_top:hover {
      text-decoration: underline;
    }

    main {
      background: white;
      width: 40%;
      margin: 0 auto;
    }

    main div {
      padding: 20px 0;
    }
  </style>
</head>

<body>
  <div class="top"><a href="../index.php"><img src="../img/logo.svg" alt=""></a></div>
  <main>
    <div>
      <div>新規登録が完了しました。</div>
      <div class="back_to_top"><a href="../index.php">トップへ戻る</a></div>
    </div>
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
</body>

</html>