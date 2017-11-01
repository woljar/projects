<?php
    $animals = [
        "africa" => [
            "elephantidae" ,
            "crocodilia" ,
            "Serpentes" ,
            "syncerus caffer"
        ] ,
        "asia" => [
            "panthera tigris" ,
            "canis lupus" ,
            "ursidae" ,
        ] ,

        "europe" => [
            "alces alces" ,
            "Sciurus" ,
            "cervidae" ,
            "orca" ,
            "vulpes vulpes"
            ]
    ];
    foreach ($animals as $k => $v) {
        $continent = $k;
        foreach ($v as $animal) {
            $z = strpos($animal,' ');
            if ($z != false)
                $double_name[] = $animal; // создается массив с животными из двух слов
        }
    }
    foreach ($double_name as $v){
        $dn_animal = $v ;
        $probel = strpos($dn_animal, ' ');
        $firstname[] = substr($dn_animal, 0, $probel); //создается массив с первыми частями названий
        $lastname[] = substr($dn_animal, $probel + 1, strlen($dn_animal) - ($probel+1)); // вторыми


    }
    shuffle($firstname);
    shuffle($lastname);
    for ($i = 0; $i <= count($firstname)-1; $i++) {
        $final_animals[] = ($firstname[$i] . ' ' . $lastname[$i]);   // циклом создаем массив с новыми животными
    }
    echo implode(', ', $final_animals);
?>




