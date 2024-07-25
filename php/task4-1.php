<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$randNum = mt_rand(1, 100); // 1から100までの乱数を生成

if ($randNum <= 5) {
  $fortune = '大凶';
} elseif ($randNum <= 20) {
  $fortune = '凶';
} elseif ($randNum <= 50) {
  $fortune = '吉';
} elseif ($randNum <= 80) {
  $fortune = '中吉';
} else {
  $fortune = '大吉';
}

echo "今日の運勢は" . $fortune . "です。";
?>
</body>
</html>