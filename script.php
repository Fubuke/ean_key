<?php
    // on récupère l'input en tableau de caractère
    $input = str_split($argv[1]);
    if(count($input) !== 12) {
        echo "Code trop long";
    }elseif(!is_numeric($argv[1])){
        echo "Code invalide";
    }else{
        $sum = 0;
        foreach($input as $index => $value) {
            // false = 0
            // si $index est pair > $valeur
            // si $index est impair > 3x $valeur
            $sum += ($index % 2) ? 3 * $value : $value;
        }
        // le reste de la division de $sum/10, c'est $sum%10
        // 10- ce reste, modulo 10, est le résultat attendu
        echo "Code = ".(10 - ($sum % 10) % 10);
    }