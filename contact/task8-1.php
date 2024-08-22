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
</div>

<?php
  $action = $allok ? 'task8-2.php' : 'task8-1.php';
  $name = $_POST["name"];
  $furigana = $_POST["furigana"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $sel = $_POST["sel"];
  $inq = $_POST["inq"];
  $check = $_POST["check"];
  $allok = false;
  
  
  //if文使って入力確認
  $errors = [];
  
  if (empty($name)) {
    $errors[] = "名前が未入力です。";
  }
  
  if (empty($furigana)) {
    $errors[] = "フリガナが未入力です。";
  }
  
  if (empty($email)) {
    $errors[] = "メールアドレスが未入力です。";
  }elseif(strpos($email,'@') === false){
    $errors[] = "@が含まれていません。";
  }
  
  if (empty($tel)) {
    $errors[] = "電話番号が未入力です。";
  } elseif (strlen($tel) != 10 && strlen($tel) != 11) {
    $errors[] = "電話番号は10桁または11桁で入力してください。";
  }
  
  if (empty($sel)) {
    $errors[] = "お問い合わせ項目が未選択です。";
  }
  
  if (empty($inq)) {
    $errors[] = "お問い合わせ内容が未入力です。";
  }  elseif (strlen($inq) < 10 || strlen($inq) > 256) {
    $errors[] = "10文字以上 256文字以内で入力してください";
  }
  
  if (empty($check)) {
    $errors[] = "チェックが入っていません。";
  }  
  
  if ($errors) {
    foreach ($errors as $error) {
      echo "<span style='color: red;'> $error <br></span>";
    }
    $allok = false;
  } else {
    echo "全ての入力が確認されました。";
    $allok = true;
  }

  if ($allok) {
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
  }

  $action = $allok ? 'task8-2.php' : 'task8-1.php';

?>

<div class="Form">
  <form action="<?= $action ?>" method="post">
    <div class="Form-Item">
      <p class="Form-Item-Label">
        <span class="Form-Item-Label-Required">必須</span>お名前
      </p>
      <input type="text" class="Form-Item-Input" placeholder="山田太郎" value="<?= $name; ?>" name="name">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>フリガナ</p>
      <input type="text" class="Form-Item-Input" placeholder="ヤマダタロウ"  value="<?= $furigana; ?>" name="furigana">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>メールアドレス</p>
      <input type="text" class="Form-Item-Input" placeholder="example@gmail.com"  value="<?= $email; ?>" name="email">
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>電話番号</p>
      <input type="text" class="Form-Item-Input" placeholder="00000000000"  value="<?= $tel; ?>" name="tel">
    </div>

    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>お問合せ項目</p>
      <select class="Form-Item-Input" tabindex="0" name="sel">
        <option option value tabindex="0" selected>選択してください</option>
        <option value="選択1" tabindex="1" <?php if($sel == '選択1'){echo "selected";}?>>選択1</option>
        <option value="選択2" tabindex="1" <?php if($sel == '選択2'){echo "selected";}?>>選択2</option>
        <option value="選択3" tabindex="1" <?php if($sel == '選択3'){echo "selected";}?>>選択3</option>
      </select>
    </div>
    
    <div class="Form-Item">
      <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">必須</span>お問い合わせ内容</p>
      <textarea class="Form-Item-Textarea"  name="inq"><?= $inq; ?></textarea>
    </div>
    <div class="Form-Item">
      <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>個人情報保護方針</p>
      <input type="checkbox" style="margin-left: 35px;" 
      <?php if($check == 'on'){echo "checked";}?> name="check">
      <span><a class="PII" href="https://www.google.co.jp/">個人情報保護方針</a>に同意します。</span>
    </div>
    <!-- <input type="submit" class="Form-Btn" value="確認"> -->
    <?php
      if ($allok) {
        echo '<input type="submit" class="Form-Btn" value="送信">';
      } else {
        echo '<input type="submit" class="Form-Btn" value="確認">';
      }
    ?>
  </form>
</div>

<div class="sec_05">
  <div class="btn_red">
    <h4>こちらからご購入ください</h4>
    <a href="#" class="btn_03">ネットショップ</a>	
  </div>
  <div class="btn_green">
    <h4>お気軽にお問合せください</h4>
    <a href="#" class="btn_04">お問合せ</a>	
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