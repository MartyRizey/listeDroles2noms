<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Ajout du CDN de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Drole de Noms</title>
</head>
<body>

<?php 
    // print_r(__DIR__); die();
    require __DIR__.'/../../inc/nav_path.php'; 
?>
    <!-- la 'class container' permet de centrer dans la page -->
    <div class="container">
        <header>
        <!-- https://getbootstrap.com/docs/4.3/components/navs/ -->
            <nav class="navbar navbar-dark bg-dark">
                <ul class="nav nav-tabs justify-content-start">
                    <li class="nav-item"><a class="nav-link active" href="<?= ACCUEIL_PATH ?>">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= INSCRIPTION_PATH ?>">Inscription</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= ADHERENTS_LIST ?>">Liste Adhérents</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= CONTACT ?>">Contact</a></li>
                </ul>
                <!-- Champ de recherche : https://getbootstrap.com/docs/4.3/components/navbar -->
                <form class="form-inline">
                    <input class="form-control" type="search" placeholder="search" aria-label="search">
                    <button class="btn btn-outline-success" type="submit">Ok</button>
                </form>
            </nav>
        </header>
        <main>
