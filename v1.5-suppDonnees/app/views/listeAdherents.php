<?php
    require __DIR__.'/templates/doctype-tpl.php';
    require __DIR__.'/templates/header-tpl.php';
    require __DIR__.'/../inc/breadcrumb.php'; 
    require '../Controllers/AdherentListSort_ctrl.php';
    require '../Controllers/AdherentListDelete_ctrl.php';
?>

<section id="adherentsList">
    <h1 class="title_page">Liste d'adhérents</h1>
    <!-- ----------------------------------------------------------------------------------------- -->
    <?php 
        // fil d'Ariane
        $fil = get_fil_ariane(array('accueil.php' => 'Accueil', 'inscription.php' => 'Inscription', '#' => 'Adhérents'));
        require __DIR__.'/templates/breadcrumb-tpl.php';
    ?>    
    <hr>
    <!-- -----------------------------------------------------------------------------------------
        Modal du dernier formulaire rempli 
        https://getbootstrap.com/docs/4.3/components/modal/
        Button trigger modal
    -->   
    <button type="button" class="btn btn-primary btn-displayDataSubmit" data-toggle="modal" data-target="#exempleModal">Dernières données soumisent</button>

    <!-- vue de la fenêtre modal -->
    <?php require __DIR__.'/modalDatasSubmit.php'; ?>
    
    <div id="adherentsSort_btn">
        <!-- ------------------------------------------------------------------------------------
            Boutons de tri de la liste des adhérents 
            https://getbootstrap.com/docs/4.3/components/dropdowns/    
        -->
        <div class="btn-group" role="group">
            <!-- 
                bouton de tri à proprement dit.
            -->
            <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Liste de tri</button>
            <!-- 
                Menu de selection d'un tri du bouton.
                Envoi en GET dans l'URL via l'attribut 'href', une chaîne de requête après le ? qui permet de selectionner un tri.
            -->
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <!-- Après le nom du fichier, "?order=...." tri par l'attribut 'name' de la balise input -->
                <a class="dropdown-item" href="listeAdherents.php?order=familyname">Tri par nom</a>
                <a class="dropdown-item" href="listeAdherents.php?order=firstname">Tri par prénom</a>
                <a class="dropdown-item" href="listeAdherents.php?order=age">Tri par age</a>
                <a class="dropdown-item" href="listeAdherents.php?order=email">Tri par email</a>
                <!-- <a class="dropdown-item default_sort" href="listeAdherents.php?order=id" >Tri par défaut</a> -->       
            </div> 

            <!-- ---------------------------------------------------------------------------------
                Bouton 'pas de tri'.
                Affichage du bouton si il y a un tri. Si il n'y a pas de tri le bouton est caché.
            -->
            <div class="btn-noSort">
                <!-- 
                    'order' contient et permet de selectionner ou non un tri. 
                    Ici, si $GET['order'] et différent de vide, donc si 'order=à quelque chose', donc si il y a un tri...
                --> 
                <?php if(!empty($_GET['order'])): ?>
                    <!-- On affiche le bouton 'Pas de tri'. Le click sur celui-ci recheargera la page sans tri -->
                    <a class="btn btn-info btn_cancel" href="listeAdherents.php">Annule le tri</a>
                <?php endif; ?>
            </div>
        </div>    
    </div>

    <table id="adherentsList_item">

        <thead>
            <tr>
                <th>Delete</th>
                <th>Id</th>
                <th>Nom de famille</th>
                <th>Prènom</th>
                <!-- La classe 'hidden' permettra de cacher les colonnes via le CSS -->
                <th class="hidden">Age</th>
                <th class="hiddenBis">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($results as $currentRow): ?>
                <tr>
                    <td>
                        <!-- https://jeanbaptistemarie.com/notes/code/php/recuperer-les-valeurs-des-checkbox-avec-php.html -->
                        <form action="../Controllers/AdherentListDelete_ctrl.php" method="POST">
                            <input type="checkbox" name="deleteAdherentList[]" value="<?= $currentRow['id']; ?>"/>     
                            <button type="button"  class="btnDeleteRow btn btn-warning" data-toggle="modal" data-target="#exampleModal">suppr</button>             

                            <!-- vue de la fenêtre modal -->
                            <?php require __DIR__.'/modalConfirmAdherentDelete.php'; ?>
                        </form>                         
                    </td>
                    <td><?= $currentRow['id']; ?></td>
                    <!-- l'attribut 'title' permet d'avoir une info au survol du nom -->
                    <td title="<?= $currentRow['age'].' ans '.' / '.'email : '.$currentRow['email']; ?>"><?= $currentRow['familyname']; ?></td>
                    <td><?= $currentRow['firstname']; ?></td>
                    <!-- La classe 'hidden' permettra de cacher les colonnes via le CSS en fonction des mediaQueries -->
                    <td class="hidden"><?= $currentRow['age']; ?></td>
                    <td class="hiddenBis"><?= $currentRow['email']; ?></td>                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>    
</section>

<?php
    require __DIR__.'/templates/footer-tpl.php';
?>