<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  $pen = array('name' =>'鉛筆', 'pri' =>'100円','tax' =>'110円');
  $era = array('name' =>'消しゴム', 'pri' =>'200円','tax' =>'220円');
  $rul = array('name' =>'定規', 'pri' =>'300円','tax' =>'330円');

  $items = array($pen, $era, $rul);

  echo '<table  border="1" style="width: 300px;border-collapse: collapse">';

  echo '<tr>';
  echo '<th>商品名</th>';
  echo '<th>価格</th>';
  echo '<th>税込価格</th>';
  echo '</tr>';

  echo '<br>';

  foreach($items as $item){
  echo '<tr>';
  echo '<td>' . $item['name'] . '</td>';
  echo '<td>' . $item['pri'] . '</td>';
  echo '<td>' . $item['tax'] . '</td>';
  echo '</tr>';
  }

  echo '</table>'
  ?>
</body>
</html>