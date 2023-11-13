<?php

    include "inc/variables.php";
    require "inc/constantes.php";
    require_once "inc/functions.php";



    echo $firstName . " " . $lastName . " : " . $moyenne . PHP_EOL;
    print_r($eleves);
    print_r($classe);


    echo calculMoyenneEtudiant("Younes", $classe) . PHP_EOL;
