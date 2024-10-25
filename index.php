<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php learn</title>
</head>

<body>
  <?php
  /* comments */
  $phone = 998932743776;
  $keys = 'String';
  $money = '123.45';
  echo "$phone  <br>";
  echo "$keys  <br>";
  echo "$money  <br>";
  echo "Hello Php <br>";
  print $keys;

  echo '<h1>';
  $z = 'Heading1';
  echo $z . '</h1>';
  $value = 2;
  ?>

  <input type="text" value="<?php echo $value?>"> <br><br>
  <input type="text" value="<?= $value+1?>"> <br><br>

  <?php
  $basket = array('12',45,123.45,'keys');
  var_dump($basket);
  ?>
</body>

</html>