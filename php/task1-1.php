<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
  $message = '暑中見舞い';
  define('TITLE','申し上げます。')
  ?>

<p>
  <?= $message; ?><?= TITLE; ?>
</p>
<?= $message; ?>
<br><?= TITLE; ?>

</body>
</html>