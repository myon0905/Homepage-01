<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  
  $a = array('日曜日','月曜日','火曜日','水曜日','木曜日','金曜日','土曜日');
  $b = 0;

  while($b< count($a)){
    echo '<li>' . $a[$b] . '</li>';
    $b++;
  }
  ?>
</body>
</html>