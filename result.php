<?php

$badword = $_GET ['badword'];
$paragraph =$_GET ['paragraph'];

$censored_paragraph = str_replace($badword, '***', $paragraph);

$paragraph_length = strlen($paragraph);

$censored_paragraph_length = strlen($censored_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
    <h3>paragrafo originale</h3>
    <p><?= $paragraph ?></p>
    <em>Il paragrafo originale è lungo <?= $paragraph_length ?> caratteri</em>
</section>
<section>
    <h3>paragrafo originale</h3>
    <p><?= $censored_paragraph ?></p>
    <em>Il paragrafo originale è lungo <?= $censored_paragraph_length ?> caratteri</em>
</section>
</body>
</html>

