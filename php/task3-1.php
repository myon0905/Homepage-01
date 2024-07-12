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
    $a = array('name' => '商品名', 'pen' => '鉛筆', 'era' => '消しゴム', 'rul' => '定規');
    $b = array('pri' => '価格', 'ppen' => '100円', 'pera' => '200円', 'prul' => '300円');
    $c = array('tax' => '税込価格',);
    $d = array('Dz' => '1Dzの価格')
  ?>

  <table border="1"style="width: 500px;border-collapse: collapse">
    <tbody style="text-aling: center;">
    <tr>
      <th style="width: 500px;"><?= $a[name] ?></th>
      <th style="width: 500px;"><?= $b[pri] ?></th>
      <th style="width: 500px;"><?= $c[tax] ?></th>
      <th style="width: 500px;"><?= $d[Dz] ?></th>
    </tr>
    <tr>
    <tr>
      <td><?= $a[pen] ?></td>
      <td><?= $b[ppen] ?></td>
      <td><?= $b[ppen]*TAX ?>円</td>
      <td><?= $b[ppen]*TAX*12 ?>円</td>
    </tr>
    <tr>
      <td><?= $a[era] ?></td>
      <td><?= $b[pera] ?></td>
      <td><?= $b[pera]*TAX ?>円</td>
      <td><?= $b[pera]*TAX*12 ?>円</td>
    </tr>
  </tbody>
  </table>

</body>
</html>