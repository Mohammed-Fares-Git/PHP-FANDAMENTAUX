<?php
    $note = readline("- Entrer votre note : ");
    
    if ( $note > 10 ) {
        $reussite = true;
    } else {
        $reussite = false;
    }

    $resultat = $reussite ? "- Vous avez la moyenne." :  "- Domage vous n'avez pas la moyenne";

    echo $resultat . PHP_EOL;


    /*
        - Les operateurs logiques [
            "and" => &&,
            "or" => ||,
            "not" => !
        ];
        - Les operateurs de comparaisons [
            <,
            >,
            <=,
            >=,
            ==,
            ===
        ]
            
    */

    

    // On peut aussi utiliser switch
    /*
        switch($note){
        case $note >10 :
            $resultat = "- Vous avez la moyenne.";
            break;
        case $note < 10 :
            $resultat = "- Domage vous n'avez pas la moyenne";
            break;
        default :
            $resultat = "inconnue";
    }
     */