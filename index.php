<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php learn</title>
</head>

<body style="width:80%; margin:auto; padding:50px;">
  <h1>LEARN PHP</h1>
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
    echo '<hr>';
    echo '<h1>';
    $z = 'Heading1';
    echo $z . '</h1>';
    $value = 2;
    echo '<hr>';
  ?>
  <p><b>Input:</b></p>
  <input type="text" value="<?php echo $value?>"> <br><br>
  <input type="text" value="<?= $value+1?>"> <br><br>

  <?php
    echo "<hr>";
    $basket = array('12',45,123.45,'keys');
    echo $basket[1];
    echo "<br>";
    var_dump($basket);
  ?> <br><br>
  <?php
  $basket_array = array(
    'phone' => 998932743776,
    'keys' => 'String',
    'money' => '123.45',
    'name' => "Hello Php <br>",
    'fruits' => ['banana','orange','apple','potato'],

  );
    var_dump( $basket_array);
    $money1 = $basket_array['money'];
    $money1 = $money1+10;
    $money1++;
    $money1+=10;
    echo 'Money' .' : '. $money1;
    /* or */
    echo "Money : $money1";
  ?>
  <br><br>
  <?php
    var_dump( $basket_array['fruits']);
    echo "<hr>";
            /*   0       1       3       4       5  */
    $items = ['item1','item2','item3','item4','item5',];
    $counter = 0;
    while($counter <= 3){
      echo $items[$counter] . '<br>';
      $counter++;
    }

  ?>
  <strong>print_r() function :</strong>
  echo "
  <hr>";
  <?php  print_r($items)?>
  <hr>
  <p><b>Foreach loop:</b></p>
  <?php
  $students = ['Mark',"Tom","John","Davron"];
  foreach($students as $key => $student){
    echo $key . ' : ' . $student . '<br>';
    /* or */
    echo "$key - $student<br>";
  };
  ?>
  <hr>
  <?php
  echo "absdef \"Hello PHP!\" 12345 ";
  echo "<hr>"
  ?>
</body>

</html>