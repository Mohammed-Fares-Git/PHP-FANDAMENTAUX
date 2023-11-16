<?php

    require_once "../inc/constantes.php";

    $lang = "en";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- utilise les constans de "inc/constantes.php" -->
    <title><?php if ($lang == "en") : ?>Welcome<?php else : ?>Bonjour<?php endif ?> <?= WEB_SITE_NAME ?> </title>
</head>
<body>

