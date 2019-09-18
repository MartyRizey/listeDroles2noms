<?php 

// print_r($_POST['deleteAdherentList']); die();
// `deleteAdherentList` est vide ... ?

if(isset($_POST['deleteAdherentList']) && !empty($_POST['deleteAdherentList'])) {
    
    foreach($_POST['deleteAdherentList'] as $checkbox_id) {

        // A terme ici on fera un 'require' d'un fichier contenant 
        // une requête de suppression de la ligne dans la Bdd.

        $checkedBox = 'La checkbox '.$checkbox_id.' a été cochée.<br>';

    }
    
} else {

    // on redirige vers le fichier 'listeAdherents.php' si aucune checkbox n'est cochée.
    // header('Location: https://https://localhost/programmation/repos_github/listeDroles2noms/v1.5-suppDonnees/app/views/listeAdherents.php');
    // exit();

    $checkedBox = '<br>Il n\'y a pas de case sélectionnée';
}

echo $checkedBox;
