<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $a = array('pen' => '鉛筆', 'ppen' => '100円', 'tpen' => '110円');
    $b = array('era' => '消しゴム', 'pera' => '200円', 'tera' => '220円');
    $c = array('rul' => '定規', 'prul' => '300円', 'trul' => '330円');
  ?>

  <table border="1"style="width: 300px;border-collapse: collapse">
    <tbody style="text-aling: center;">
    <tr>
      <th>商品名</th>
      <th style="width: 100px;">価格</th>
      <th>税込価格</th>
    </tr>
    <tr>
      <td><?= $a[pen] ?></td>
      <td><?= $a[ppen] ?></td>
      <td><?= $a[tpen] ?></td>
    </tr>
    <tr>
      <td><?= $b[era] ?></td>
      <td><?= $b[pera] ?></td>
      <td><?= $b[tera] ?></td>
    </tr>
    <tr>
      <td><?= $c[rul] ?></td>
      <td><?= $c[prul] ?></td>
      <td><?= $c[trul] ?></td>
    </tr>
  </tbody>
  </table>

</body>
</html>