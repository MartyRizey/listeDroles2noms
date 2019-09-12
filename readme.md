# Formulaire :

    Page Accueil.
    Page Formulaire inscription.
    Page Liste d'adhérents.
    Page Contact.

    Architecture et structure de l'arborescence du site.
        
        Inspiration : MVC

        Création d'une 'Base de données' avec phpMyAdmin.
            + Définition des champs et caractéristiques.
        
        Utilisation d'une 'base de données' pour stocker les nouveau adhérents.

        -----
        | # | Header avec Barre de Navigation et footer :
        -----------------------------------------------
            HTML / CSS / BOOTSTRAP
                + flexbox - media Queries

        -----
        | # | Page d'accueil :
        --------------------
            HTML / CSS / BOOTSTRAP

        -----
        | # | Page Formulaire d'inscription :
        ------------------------------------        
            Création d'un formulaire pour récupérer les données saisies.
                + langages : HTML, CSS
                    - flexbox - media Queries

            Stocker les données saisies dans la Bdd.
                + via PDO et des requêtes SQL
                + langages : PHP, HTML, SQL

        -----
        | # | Page Liste d'adhérents :
        ----------------------------
            Récupérer les données saisies et stockées dans la Bdd.
                + via PDO et des requêtes SQL
                + langages : PHP, HTML, SQL

            Afficher les données dans un tableau.
                + bouton de trie par nom, prenom, mail
                + bouton 'pas de tri'
                + langages : HTML, CSS, BOOTSTRAP
           
