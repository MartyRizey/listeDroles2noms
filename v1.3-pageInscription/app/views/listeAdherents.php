<?php
    require __DIR__.'/templates/doctype-tpl.php';
    require __DIR__.'/templates/header-tpl.php';
    require __DIR__.'/../inc/breadcrumb.php'; 
    require __DIR__.'/../Models/selectTable_sql.php';
?>

<h1 class="title_page">Liste d'adhérents</h1>

<?php 
    // fil d'Ariane
    $fil = get_fil_ariane(array('accueil.php' => 'Accueil', 'inscription.php' => 'Inscription', '#' => 'Adhérents'));
    require __DIR__.'/templates/breadcrumb_tpl.php';
?>

<hr>

<?php
    echo '<pre>';
    print_r($results);
    echo'</pre>';
?>
<?php
    require __DIR__.'/templates/footer-tpl.php';
?>