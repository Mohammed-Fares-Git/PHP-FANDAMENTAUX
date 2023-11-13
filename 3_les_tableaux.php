<?php

    // 1. On utilise les tableaux pour sauvgarder plusieur variables.
    // 2. Pour creer un tableau on utilise [] ou array().
    // 3. On peut utiliser differents types de variables dans un tableau.

    $notes = [13,16,45];

    $names = array("Mohammed Fares","Abdlah El Felhy","Amine Ouanda");

    // 4. On peut acceder une valeur dans un tableau par par son "index".

    echo $names[0] . ":" . $notes[0] . PHP_EOL;

    // 5. Tableau associatif
    $eleves = [
        "Mohammed Fares" => 16,
        "Abdlah El Felhy" => 16,
        "Amine Ouanda" => 16
    ];

    // 6. Pour ajouter ou modifier un element
    $eleves["Soufyane Felate"] = 17;

    echo $eleves["Soufyane Felate"] . PHP_EOL;

    // 7. Representation grafique
    print_r($notes);
    print_r($eleves);


    $classe = [
        [
            "nom" => "Mohammed",
            "prenom" => "Fares",
            "notes" => [
                16,
                15,
                19
            ]
        ],
        [
            "nom" => "Younes",
            "prenom" => "Kinany",
            "notes" => [
                16,
                15,
                19
            ]
        ],
    ];

    echo $eleves[1]["notes"][0] . PHP_EOL;
