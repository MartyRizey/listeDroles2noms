<?php

// source : https://openclassrooms.com/forum/sujet/generateur-automatique-de-fil-d-ariane-59766

function get_fil_ariane($array_fil){

    define('NOM_SITE', '', true);
    $fil = '<span>' . NOM_SITE . '</span>';

    // on parcours le tableau associatif passé en paramètre de la fonction et les clés sont les URL
    // les valeurs des clés les liens.
    foreach($array_fil as $url => $lien){
        $fil .= '<span style="color:gray;"> \ </span>';
        if($url == 'final'){
            $fil .= $lien;
            break;
        }

        $fil .= '<a href="' . $url . ' " style="color:green">' . $lien . '</a>';
    }

    return $fil;

}