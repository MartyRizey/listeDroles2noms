<?php
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';

    // https://github.com/O-clock-Alumni/fiches-recap/blob/master/php/forms.md

    /* L'idée :
       --------
       - Si le nom existe et si le champ est rempli, on reste sur le formulaire.
       - Sinon si le formulaire est vide, alors on rempli et on stock chaque champ dans une variable. 
       - On insert ensuite les données dans la Bdd via l'appel à une fonction qui traitera cette insertion en Bdd.
       - on affiche la liste des adhérents.
    */
    require __DIR__.'/../inc/nav_path.php';
    require __DIR__.'/../Models/insertDatasBdd_sql.php';

    if(isset($_POST['familyname']) && empty($_POST['familyname'])){

        // on redirige vers le fichier inscription.php
        header('Location: INSCRIPTION_PATH');

    } elseif(!empty($_POST)){

        /**
         *Permet d'attribuer la valeur saisie dans le champ 'familyname' à la variable *'$familyname' pour être réutilisée dans l'attribut 'value' de l'input 'familyname' du *formulaire. Cela afin de re-remplir le champ concerné avec la valeur saisie.
        */
        $familyname = htmlspecialchars($_POST['familyname']);

        $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']): '' ;
        $age = !empty($_POST['age']) ? htmlspecialchars($_POST['age']): 0; 
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']): '';

        // fonction qui appel la requête d'insertion dans la Bdd
        insertDatasBdd($pdo, $familyname, $firstname, $age, $email);

        // on peut ensuite faire un 'require' de la liste d'adhérents, pour qu'elle s'affiche.
        require __DIR__.'/../views/listeAdherents.php';

    }
