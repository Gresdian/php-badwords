<?php
$paragraph = $_GET['paragraph'];
$badword = $_GET['badword'];

$censored = str_replace($badword, '***', $paragraph)
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center m-4">Testo originale</h1>
    <p class="text-center m-4"><?php echo $paragraph; ?></p>
    <p class="text-center">Lunghezza testo: <?php echo strlen($paragraph); ?></p>
    <h1 class="text-center m-4">Testo censurato</h1>
    <p class="text-center m-4"><?php echo $censored; ?></p>
    <p class="text-center">Lunghezza testo censurato: <?php echo strlen($censored); ?></p>
</body>

</html>