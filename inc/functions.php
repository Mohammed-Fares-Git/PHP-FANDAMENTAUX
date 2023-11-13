<?php

    function calculMoyenneEtudiant (string $name,array $table_eleves): float{
        
        $resultat = 0;
        $nbr_note = 0;
        $table_notes = [];

        foreach ($table_eleves as $etudiant) {
            if ($etudiant["nom"] == $name) {
                $table_notes = $etudiant["notes"];
                break;
            }
        }

        foreach ($table_notes as $note) {
            $nbr_note++;
            $resultat += $note;
        }

        if($nbr_note == 0) {
            return 0;
        }

        $resultat /= $nbr_note;

       return $resultat; 
    }