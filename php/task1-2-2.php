<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
 
// 定数を定義
define('TAX', 1.1); 
 
$enpitu = 100;

$kesigomu = 200;

?>

<p>現在、消費税は10%です。</p>

<?php
 
echo '<p>鉛筆が' . $enpitu . '円で税込' . $enpitu * TAX . '円です。</p>';

echo '<p>消しゴムが' . $kesigomu . '円で税込' . $kesigomu * TAX . '円です。</p>';
echo '<p>消しゴムが {$kesigomu} 円で税込 $kesigomu * TAX 円です</p>';//??
echo "<p>消しゴムが  $kesigomu  円で税込  " . $kesigomu*TAX . "  円です。</p>";

?>

</body>
</html>