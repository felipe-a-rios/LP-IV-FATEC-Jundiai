<?php
define('NUM1', 2);
define('NUM2', 4);
define('NUM3', 6);
define('NUM4', 8);

$avg = (NUM1 + NUM2 + NUM3 + NUM4) / 4;


$pondavg = ((NUM1 * 1) + (NUM2 * 2) + (NUM3 * 3) + (NUM4 * 4)) / (1 + 2 + 3 + 4);




?>
<!DOCTYPE html>
<html lang="en">
<style>
  body {
    font-family: Roboto;
    margin: 0;
    box-sizing: border-box;
    background-color: black;
    color: white
  }

  .num1 {
    color: #a818da
  }

  .num2 {
    color: #dd08c3
  }

  .num3 {
    color: #a7091a
  }

  .num4 {
    color: white
  }

  .avg {
    color: aquamarine
  }

  .pondavg {
    color: green
  }
</style>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <h1 class="num1">numero 1: <?php echo NUM1 ?></h1>
  <h1 class="num2">numero 2: <?php echo NUM2 ?></h1>
  <h1 class="num3">numero 3: <?php echo NUM3 ?></h1>
  <h1 class="num4">numero 4: <?php echo NUM4 ?></h1>
  <h1 class="avg">média: <?php echo $avg ?></h1>
  <h1 class="pondavg">média ponderada: <?php echo $pondavg ?></h1>
</body>

</html>