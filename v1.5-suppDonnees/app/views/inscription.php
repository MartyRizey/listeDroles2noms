<?php
    // print_r(__DIR__); die();
    require __DIR__.'/templates/doctype-tpl.php';
    require __DIR__.'/templates/header-tpl.php';
    require __DIR__.'/../inc/breadcrumb.php'; 
    require __DIR__.'/../inc/nav_path.php';

?>

<!-- l'attribut 'action' cible le fichier qui traite les données -->
<form action="<?= DATASFORM_PATH ?>" method="POST">
    <fieldset id="form_datas form-row">
        <legend> Formulaire d'inscription </legend>
        
        <?php
            // Fil d'Ariane
            $fil = get_fil_ariane(array('accueil.php' => 'Accueil', '#' => 'Inscription'));
            require __DIR__.'/templates/breadcrumb-tpl.php';
        ?>

        <div class="enter_datas">
           <div id="civility_datas">
                <input type="text" name="familyname" placeholder="entrer un nom de famille" title="Entrer à l'aide du clavier et vos petits doigts joufflus..." required>         
                <input type="text" name="firstname" placeholder="entrer un prénom">        
                <input type="number" name="age" placeholder="age">
           </div>
    
            <div id="contact_datas">
                <input type="number" name="phone" placeholder="téléphone">
                <input type="email" name="email" placeholder=".....@...."> 
                <input type="text" name="city" placeholder="nom de ville">
            </div>
        </div>
        <button type="submit" id="btn_send_datas">Envoyer</button>                 
    </fieldset>
</form>



<?php
    require __DIR__.'/templates/footer-tpl.php';
?>