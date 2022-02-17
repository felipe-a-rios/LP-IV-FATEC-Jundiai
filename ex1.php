<?php
define('NOME', 'Felipe');
define('SOBRENOME', 'Rios');
define('IDADE', 20);


?>
<!DOCTYPE html>
<html lang="en">
<style>
    body {
        font-family: Roboto;
        margin: 0;
        box-sizing: border-box;
        background-color: black;

    }

    .nome {
        color: #a818da
    }

    .sobrenome {
        color: #dd08c3
    }

    .idade {
        color: #a7091a
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <h1 class="nome">
        <?php echo NOME; ?>
    </h1>
    <h1 class="sobrenome"><?php echo SOBRENOME; ?>
    </h1>
    <h1 class="idade"><?php echo IDADE; ?>
    </h1>
</body>


</html>