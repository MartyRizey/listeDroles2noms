<?php 

if(empty($_POST['deleteAdherentList'])) {

    // on redirige vers le fichier 'listeAdherents.php' si aucune checkbox n'est cochée.
    header('Location: /../../views/listeAdherents.php');
} 

else {

    foreach($_POST['deleteAdherentList'] as $checkbox_id) {

        echo 'La checkbox '.$checkbox_id.' a été cochée';

    }
}
