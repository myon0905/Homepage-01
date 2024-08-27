<?php

$name = $_POST["name"];
$furigana = $_POST["furigana"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$sel = $_POST["sel"];
$inq = $_POST["inq"];
$check = $_POST["check"];
$allok = false;

  try {
    // データベース接続情報
    $pdo = new PDO(
      'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
      'root',
      'root'
    );
    // エラーモードを例外に設定
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // データベースにデータを挿入
    $stmt = $pdo->prepare("INSERT INTO inquiries (name, furigana, email, tel, inquiry_type, inquiry, consent, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
    $stmt->bindParam(1, $name, PDO::PARAM_STR);
    $stmt->bindParam(2, $furigana, PDO::PARAM_STR);
    $stmt->bindParam(3, $email, PDO::PARAM_STR);
    $stmt->bindParam(4, $tel, PDO::PARAM_STR);
    $stmt->bindParam(5, $sel, PDO::PARAM_STR);
    $stmt->bindParam(6, $inq, PDO::PARAM_STR);
    $stmt->bindParam(7, $check, PDO::PARAM_BOOL);
    $stmt->execute();

    echo "データが正常に送信されました。";
  } catch (PDOException $e) {
    echo "データベース接続に失敗しました: " . $e->getMessage();
  }


?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="contact.css">
  <title>contact page</title>
</head>
<body>

<header>
 <div class="wrapper">
    <div class="header">
     <h1>
      ここには会社名が入ります
     </h1>
    <a href="#" class="btn01">ボタン01</a>
    <a href="#" class="btn02">ボタン02</a>
  </div>

<div class="menu">
  <p>メニュー01</p>
  <p>メニュー02</p>
  <p>メニュー03</p>
</div>

<div class="mv_img">
  <img src="contact-img\mv.png" alt="">
</div>
</div>

<div class="sec_01">
  <h1>お問い合わせ</h1>
  <p>
    お問合せや業務内容に関するご質問は、電話またはこちらのお問合せフォームより承っております。
    <br>後ほど担当者よりご連絡させていただきます。
  </p>
  <h1 style="padding-top: 30px;">送信完了</h1>
</div>



<div class="sec_05">
  <div class="btn_red">
    <h4>こちらからご購入ください</h4>
    <a href="#" class="btn_03">ネットショップ</a>	
  </div>
  <div class="btn_green">
    <h4>お気軽にお問合せください</h4>
    <a href="contact/" class="btn_04">お問合せ</a>	
  </div>
</div>

<div class="sec_06">
  <h4>ここには会社名が入ります</h4>
  <p>住所が入ります</p>
  <p>03-1234-5678</p>
  <p>営業時間:9:00～18:00</p>
</div>

  <div class="sec_07">
    <ul class="link_01">
      <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク01</a></li>
      <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク02</a></li>
      <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク03</a></li>
      <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク04</a></li>
      <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク05</a></li>
      <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク06</a></li>
    </ul>
    <ul class="link_02">
    <li><a href="https://www.google.co.jp/" target="_blank" rel="noopener noreferrer">リンク07</a></li>
    </ul>
  </div>

  <footer>
    <p>ここには会社名が入ります©copyright</p>
    </footer>

</body>
</html>