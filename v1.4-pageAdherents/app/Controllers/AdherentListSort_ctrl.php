<?php

require '../Models/selectTable_sql.php';
require '../Models/selectSortTable_sql.php';

// permet de selectionner une requête en fonction du paramètre 'order' passé en GET dans l'URL.

if(empty($_GET['order'])){

    $results = selectDatasTable($pdo);

} else {

    /* 
        on assigne à '$order', la valeur passé en GET dans l'url de la clé 'order' soit
        - familyname ou firstname ou age ou email.
    */
    $order = $_GET['order'];

    $results = selectOrderColumn($pdo, $order);

}