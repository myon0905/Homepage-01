<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    define('TAX', 1.1);
    $a = array('pen' => '鉛筆', 'ppen' => '100円');
    $b = array('era' => '消しゴム', 'pera' => '200円');
    $c = array('rul' => '定規', 'prul' => '300円');
  ?>

  <table border="1"style="width: 500px;border-collapse: collapse">
    <tbody style="text-aling: center;">
    <tr>
      <th style="width: 500px;">商品名</th>
      <th style="width: 500px;">価格</th>
      <th style="width: 500px;">税込価格</th>
      <th style="width: 500px;">1Dzの価格</th>
    </tr>
    <tr>
    <tr>
      <td><?= $a[pen] ?></td>
      <td><?= $a[ppen] ?></td>
      <td><?= $a[ppen]*TAX ?>円</td>
      <td><?= $a[ppen]*TAX*12 ?>円</td>
    </tr>
    <tr>
      <td><?= $b[era] ?></td>
      <td><?= $b[pera] ?></td>
      <td><?= $b[pera]*TAX ?>円</td>
      <td><?= $b[pera]*TAX*12 ?>円</td>
    </tr>
    <tr>
      <td><?= $c[rul] ?></td>
      <td><?= $c[prul] ?></td>
      <td><?= $c[prul]*TAX ?>円</td>
      <td><?= $c[prul]*TAX*12 ?>円</td>
    </tr>
  </tbody>
  </table>

</body>
</html>