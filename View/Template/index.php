<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use View\ViewGenerator;

     echo "Acceuil";
     echo "<br>";
     echo "<a href='".ViewGenerator::path('Personne',['id'=>6])."'> Personnes </a>";
     ?>
</body>
</html>