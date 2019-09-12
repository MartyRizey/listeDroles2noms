<?php
    require __DIR__ .'/../../inc/nav_path.php';
?>
<!-- la 'class container' permet de centrer dans la page -->
<div class="container">
    <header>
    <!-- https://getbootstrap.com/docs/4.3/components/navs/ -->
        <nav class="navbar navbar-dark bg-dark">
            <ul class="nav nav-tabs justify-content-start">
                <li class="nav-item"><a class="nav-link active" href="<?= ACCUEIL_PATH ?>">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= INSCRIPTION_PATH ?>">Inscription</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= ADHERENTSLIST_PATH ?>">Liste Adhérents</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= CONTACT_PATH ?>">Contact</a></li>
            </ul>
            <!-- Champ de recherche : https://getbootstrap.com/docs/4.3/components/navbar -->
            <form class="form-inline searchBarre">
                <input class="form-control" type="search" placeholder="search" aria-label="search">
                <button class="btn btn-outline-success" type="submit">Ok</button>
            </form>
        </nav>
    </header>
    <main>
