<?php

    // 1. Les variables doivent commencer par un signe dollar "$".
    // 2. Toutes les instructions doivent se terminer par un point-virgule ";".
    
    $firstName = "Mohammed";
    $lastName = "Fares";
    
    // 3. On utilise "." pour la concatenation.

    $fullName = $firstName . " " . $lastName;

    // 4. On utilise "echo" pour afficher.
    // 5. PHP_EOL = php end of line.

    echo $fullName . PHP_EOL;

    $note1 = 12;
    $note2 = 17;
    $moyenne = ($note1 + $note2) / 2;

    echo $fullName . " vou avez eu " . $moyen . ' de moyenne' . PHP_EOL;


    $reussite = true;
    $reussite = false;
    $reussite = null;