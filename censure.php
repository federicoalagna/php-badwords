<?php


// var_dump ($_GET);

$my_text = $_GET ['my-text'];
$badword = $_GET ['badword'];

$my_text_lenght = strlen(my_text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Paragrafo da censurare</h2>
<p> <?php echo $my_text </p>
<h3>Parola da censurare</h3>
</body>
</html>