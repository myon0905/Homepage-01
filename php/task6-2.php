<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function max_number($n1, $n2){
    if ($n1 > $n2){
      return $n1;
    }else{
      return $n2;
    }
  }
  
  $a = 9;
  $b = 21;

  $max_value = max_number($a, $b);

  echo '$a = 9 <br>';
  echo '$b = 21 <br>';

  echo '$aと$bのうち最大値は' . $max_value . 'です。';
  ?>
</body>
</html>