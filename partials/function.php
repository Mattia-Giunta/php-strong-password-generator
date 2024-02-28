<?php 


function generaPasword($lunghezzaPassword, $letters , $numbers , $symbols, $consentiDuplicazioni ){

    $newPassword ='';

    $allCaracters = $letters . $numbers . $symbols;

    while( strlen($newPassword) < $lunghezzaPassword){

        $indiceLetters = rand( 0, strlen($allCaracters) -1 );

        if( $consentiDuplicazioni == true || !str_contains( $newPassword , $allCaracters[$indiceLetters]) ){

            $newPassword .= $allCaracters[$indiceLetters];
        }

        
    }

    return $newPassword;
}




?>