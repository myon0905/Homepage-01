<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
 
define('ZEI','10%');

$en = '鉛筆';

$kes = '消しゴム';

?>

<p>現在、消費税は<?= ZEI; ?>です。</p>
<p><?= $en; ?>が100円で税込110円です。</p>
<p><?= $kes; ?>が200円で税込220円です。</p>

</body>
</html>