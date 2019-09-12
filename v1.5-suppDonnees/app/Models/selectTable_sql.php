<?php require __DIR__.'/connexBdd.php';

function selectDatasTable($pdo){

    // on selectionne tous les champs de la table "identity" de la bdd.
    $selectTable = "SELECT * FROM identity";
    // $pdoStmt = pdoStatement, 
    $pdoStmt = $pdo->prepare($selectTable);
    $pdoStmt->execute();

    if($pdoStmt === false){

        echo '<h1 style="color:red;"><strong>Un problème est survenu, merci de rééssayer.</strong>';

    } else {

        $results = $pdoStmt->fetchAll(PDO::FETCH_ASSOC);

    }    

    return $results;
}