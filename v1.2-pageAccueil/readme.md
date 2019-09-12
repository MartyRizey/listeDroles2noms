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

        # Page Formulaire d'inscription :
          ------------------------------        
        Création d'un formulaire pour récupérer les données saisies.
            + langages : HTML, CSS, BOOTSTRAP

        Stocker les données saisies dans la Bdd.
            + via PDO et des requêtes SQL
            + langages : PHP, HTML, SQL

        # Page Liste d'adhérents :
          ----------------------
        Récupérer les données saisies et stockées dans la Bdd.
            + via PDO et des requêtes SQL
            + langages : PHP, HTML, SQL

        Afficher les données dans un tableau.
            + bouton de trie par nom, prenom, mail
            + bouton 'pas de tri'
            + langages : HTML, CSS, BOOTSTRAP
           
# Déroulement

- *Dossier* : __v1.0-structure__.
    - Arborescence et architecture des dossiers.    
    
- *Dossier* : __v1.1-templates__.
    - Création des fichiers de vues des pages.
        - accueil.php / formulaireInscription.php / listeAdherents.php / contact.php
    - Création des fichiers de templates.
        - doctypeHeader-tpl.php / footer_tpl.php
    - Création d'un fichier pour les chemins absolus vers les pages de la *nav* ou autres chemins.
        - dossier : inc/nav_path.php
    
- *Dossier* : __v1.2-pageAccueil__.
    - fichier *reset.css* ou *normelize* ou *reboot*  
    - Installation pluging vs-code *css-auto-prefix*
    - Intégration HTML et CSS pour la page d'acceuil.
    - Redécoupage du fichier doctypeHeader-tpl.php en 2 fichiers, doctype-tpl.php et header-tpl.php
    - Mise en place des liens vers les pages via des constantes et autres méthodes.
    - Responsive Web Design.
    idées : rendre l'image cliquable pour l'agrandir dans une autre fenêtre.
    --------- *&#60;a href="chemin de l'image" target="_blank"&#62;&#60;/a&#62;*



