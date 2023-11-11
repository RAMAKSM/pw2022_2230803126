<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
     .warna-ganjil{
      background-color: yellow;
     }
     .warna-genap{
      background-color: blue;
     }
  </style>
</head>
<body>
  <table border="1" cellpadding="10" cellspacing="0">
    <?php for($i = 1; $i <= 19; $i++) : ?>
    <?php if ($i % 2 == 1) : ?>
      <tr class="warna-ganjil">
        <?php else: ?>
      <tr class="warna-genap">
        <?php endif; ?>
          <?php for($j = 1; $j <= 5; $j++) : ?>
             <td><?="$i,$j"; ?></td>
        <?php endfor; ?>
      </tr>
      <?php endfor; ?>
    </table>
</body>
</html>