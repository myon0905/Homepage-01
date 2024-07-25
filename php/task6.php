<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function avg($a, $b){
    $n = ($a + $b) / 2;
    return $n;
  }
  
  $num1 = 35;
  $num2 = 28;

  $avg1 = avg($num1, $num2);
  $avg2 = avg(1.2, 5.3);

  echo "{$num1}と{$num2}の平均値は、{$avg1}です。<br>"
  echo "1.2と5.3の平均値は、{$avg2}です。"
  
  ?>
</body>
</html>