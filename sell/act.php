<?php
session_start();
include('../functions.php');
checkSessionId();
// var_dump($_POST);
// var_dump($_FILES);
// exit();
// 入力チェック
// if (
//   !isset($_POST['product_name']) || $_POST['product_name'] == '' ||
//   !isset($_POST['product_price']) || $_POST['product_price'] == '' ||
//   !isset($_FILES['product_pic']) || $_FILES["product_pic"] == '' ||
//   !isset($_POST['product_description']) || $_POST['product_description'] == ''
//   !isset($_POST['product_description']) || $_POST['product_description'] == ''
//   !isset($_POST['product_description']) || $_POST['product_description'] == ''
//   !isset($_POST['product_description']) || $_POST['product_description'] == ''
// ) {
//   exit('ParamError');
// }

//DB接続
$pdo = connectToDb();

//POSTデータ取得

$user_id = $_SESSION['id'];
echo $user_id;

$name = $_POST['name'];
$description = $_POST['description'];
$category = $_POST['category'];
$item_condition = $_POST['item_condition'];
$shipping_fee = $_POST['shipping_fee'];
$area = $_POST['area'];
$necessary_days = $_POST['necessary_days'];
$price = $_POST['price'];

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
} // tmpフォルダにデータがない }
// $id = intval($_SESSION['id']);
// var_dump($id);
// exit();
// echo $product_price;
// exit();


//データ登録SQL作成
$sql = 'INSERT INTO product(id, name, image, price, description, created_at, user_id, category, item_condition, shipping_fee, area, necessary_days)
VALUES(NULL, :a1, :image, :a2, :a3, sysdate(), :a4, :a5, :a6, :a7, :a8, :a9)';
// :と;を間違えるな
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $name, PDO::PARAM_STR);    //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':image', $fileNameToSave, PDO::PARAM_STR);   //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $price, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a3', $description, PDO::PARAM_STR);
$stmt->bindValue(':a4', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':a5', $category, PDO::PARAM_STR);
$stmt->bindValue(':a6', $item_condition, PDO::PARAM_STR);
$stmt->bindValue(':a7', $shipping_fee, PDO::PARAM_STR);
$stmt->bindValue(':a8', $area, PDO::PARAM_STR);
$stmt->bindValue(':a9', $necessary_days, PDO::PARAM_STR);
$status = $stmt->execute();

//データ登録処理後
if ($status == false) {
  showSqlErrorMsg($stmt);
  exit('エラーが発生しました。');
}

// exit();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/sell.css">
  <title>出品完了</title>
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
      <div>出品が完了しました。</div>
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
        <div class="footer_logo_position"><img class="footer_img" src="sell_footer_logo.svg" alt=""></div>
      </div>
      <div class="footer_company_logo">© Mercari, Inc.</div>

    </div>
  </footer>
</body>

</html>