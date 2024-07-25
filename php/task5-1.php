<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  echo '<h1>九九の計算</h1>';
    for ($i = 1; $i <= 9; $i++) {
      for($j = 1; $j <= 9; $j++){
         $ans = $i*$j;
        echo $i . '×' . $j . '=' .$ans.'　';
      }
      echo'<br>';
    }
  ?>
</body>
</html>