<?php

// connexion à la Bdd
require __DIR__.'/connexBdd.php';

/** 
 *  On passe en paramètre de la fonction les valeurs passées en argument de l'appel à la function *  dans le fichier DatasForm.php
 *  On transmet ainsi la valeur qui est dans la variable.
 */
function insertDatasBdd($pdo, $familyname, $firstname, $age, $email){

    // Evite les injections SQL, pour le hack.
    $stmt = $pdo->prepare("INSERT INTO identity (familyname, firstname, age, email) VALUES (?, ?, ?, ?)");
    $stmt->bindParam(1, $familyname);
    $stmt->bindParam(2, $firstname);
    $stmt->bindParam(3, $age);
    $stmt->bindParam(4, $email);
    $stmt->execute();

    // OU, mais moins secure

    /*
        $insertQuery = "INSERT INTO identity (familyname, lastname, age, email)
                        VALUES ('$familyname', '$lastname', '$age', '$email')";

        $pdo->exec($insertQuery);
    */



}