<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    $a = array('name' => '商品名', 'pen' => '鉛筆', 'era' => '消しゴム', 'rul' => '定規');
    $b = array('pri' => '価格', 'ppen' => '100円', 'pera' => '200円', 'prul' => '300円');
    $c = array('tax' => '税込価格', 'tpen' => '110円', 'tera' => '220円', 'trul' => '330円');
  ?>

  <table border="1"style="width: 300px;border-collapse: collapse">
    <tbody style="text-aling: center;">
    <tr>
      <th><?= $a[name] ?></th>
      <th style="width: 100px;"><?= $b[pri] ?></th>
      <th><?= $c[tax] ?></th>
    </tr>
    <tr>
      <td><?= $a[pen] ?></td>
      <td><?= $b[ppen] ?></td>
      <td><?= $c[tpen] ?></td>
    </tr>
    <tr>
      <td><?= $a[era] ?></td>
      <td><?= $b[pera] ?></td>
      <td><?= $c[tera] ?></td>
    </tr>
    <tr>
      <td><?= $a[rul] ?></td>
      <td><?= $b[prul] ?></td>
      <td><?= $c[trul] ?></td>
    </tr>
  </tbody>
  </table>

</body>
</html>