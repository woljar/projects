<?php
    $x = rand(0,100);
    echo '<pre>';
    echo 'Заданное число - '.$x . PHP_EOL;

    $a = 1 ;
    $b = 1 ;
    $z = false ;

do {
    if ( $a > $x ) {

        echo 'Заданное число не входит в числовой ряд' ;
        $z = true ;
        exit();
    }
    elseif ( $a == $x ) {

        echo 'Заданное число входит в числовой ряд';
        $z = true;
        exit();

    }
    else {

        $c = $a ;
        $a = $a + $b ;
        $b = $c ;

    }
} while ($z == false );

?>