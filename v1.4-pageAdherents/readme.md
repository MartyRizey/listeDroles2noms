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
            + langages : HTML, CSS

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
----   
- *Dossier* : __v1.1-templates__.
    - Création des fichiers de vues des pages.
        - *accueil.php* / *inscription.php* / *listeAdherents.php* / *contact.php*
    - Création des fichiers de templates.
        - *doctypeHeader-tpl.php* / *footer_tpl.php*
    - Création d'un fichier pour les chemins absolus vers les pages de la *nav* ou autres chemins.
        - dossier : *inc/nav_path.php*
----  
- *Dossier* : __v1.2-pageAccueil__.
    - fichier *reset.css* ou *normelize* ou *reboot*  
    - Installation pluging vs-code *css-auto-prefix*
    - Intégration HTML et CSS pour le header, la Nav et le footer et la page d'acceuil.
    - Redécoupage du fichier *doctypeHeader-tpl.php* en :
        - *doctype-tpl.php*  
        - *header-tpl.php*
    - Mise en place des liens vers les pages via des constantes et autres méthodes.
    - Responsive Web Design, via `Bootstrap`,`Flexbox` et `Media Queries`
    - Idées : rendre l'image cliquable pour l'agrandir dans une autre fenêtre.
    --------- *`<a href="chemin de l'image" target="_blank"></a>`*  
----
- *Dossier* : __v1.3-pageInscription__.
    - Création du formulaire : HTML/CSS.
    - Responsive Web Design de la page, via du `flexbox` et `media Queries`, dans le fichier *public/assets/css/style.css*
    - Mise en place d'un fil d'Ariane sur les pages.
        - fichier -> *breadcrumb.php* dans le dossier *app/inc*
        - fichier -> *breadcrumb_tpl.php* dans le dossier *app/views/templates*
    - *Etape 2 : *insertion des données du formulaire en Bdd*      
        - Paramètrer la connection à la Base de données -> *app/Models/paramConnexBdd.php*
        - Connection à la Base de données -> *app/Models/connexBdd.php*
        - Ajout d'un fichier *DatasForm_ctrl.php* dans le dossier *app/Controller/*
        - Ajout d'un fichier *insertDatasBdd_sql.php* dans le dossier *app/Models/*
----
- *Dossier* : __v1.4-pageAdherents__.
    - Récupération des données en Bdd : fichier -> *app/Models/selectTable_sql.php*
    - Affichage et formatage des données : fichier -> *app/views/listeAdherents.php*
        - Création d'un bouton de selection de tri .
        - Création d'un bouton d'annulation de tri.
        - Création d'un bouton qui affiche une fenêtre `modal` qui reprends le dernier enregistrement.    
        - Création d'un style via le fichier *style.css* de la liste d'adhérents.

#Structure des fichiers de l'arborescence

fichier `point d'entrée` : 
> public/__index.php__
 &#9205; *app/views/__accueil.php__*  
---
> app/views/__accueil.php__
 &#9205; *app/views/templates/__doctype-tpl.php__*
 &#9205; *app/views/templates/__header-tpl.php__*
 .. &#9205; *app/inc/__nav_path.php__* `(navigation)`
 &#9205; *app/inc/__breacrumb.php__* `(fil d'Ariane)`
 &#9205; *app/views/templates/__breadcrumb-tpl.php__* `(affichage, fil d'Ariane)`
 &#9205; *app/views/templates/__footer-tpl.php__*  
---
> app/views/__inscription.php__
 &#9205; *app/views/templates/__doctype-tpl.php__*
 &#9205; *app/views/templates/__header-tpl.php__*
 .. &#9205; *app/inc/__nav_path.php__* `(navigation)`
 &#9205; *app/inc/__breacrumb.php__* `(fil d'Ariane)`
 &#9205; *app/inc/__nav_path.php__*
```
- L'attribut *action* de la balise *form*, renvoi vers : 
  > app/Controllers/DatasForm_ctrl.php
    .. app/inc/nav_path.php
    .. app/Models/insertDatasBdd_sql.php
    ..... app/Models/connexBdd.php
    ........ app/Models/paramConnexBdd.php
```
> &#9205; *app/views/templates/__breadcrumb-tpl.php__* `(affichage, fil d'Ariane)`
  &#9205; *app/views/templates/__footer-tpl.php__*
---
> app/views/__listeAdherents.php__ 
 &#9205; *app/views/templates/__doctype-tpl.php__*
 &#9205; *app/views/templates/__header-tpl.php__*
 .. &#9205; *app/inc/__nav_path.php__* `(navigation)`
 &#9205; *app/inc/__breacrumb.php__* `(fil d'Ariane)`
 &#9205; *app/Controllers/__AdherentListSort_ctrl.php__* `(affichage selon un tri de la liste d'adhérents via 2 boutons)`
 .. &#9205; *app/Models/__selectTable_sql.php__*
 ..... &#9205; *app/Models/__connexBdd.php__*
 ........ &#9205; *app/Models/__paramConnexBdd.php__*
 .. &#9205; *app/Models/__selectSortTable_sql.php__*
..... &#9205; *app/Models/__connexBdd.php__*
 ........ &#9205; *app/Models/__paramConnexBdd.php__*
 &#9205; *app/views/templates/__breadcrumb-tpl.php__* `(affichage, fil d'Ariane)`
 &#9205; *app/views/__modalDatasSubmit.php__* `(affichage d'une fenêtre type 'modal' via un bouton)`
 &#9205; *app/views/templates/__footer-tpl.php__*  

>*app/views/__contact.php__*  
 &#9205; *app/views/templates/__doctype-tpl.php__*
 &#9205; *app/views/templates/__header-tpl.php__*
 .. &#9205; *app/inc/__nav_path.php__* `(navigation)`
 &#9205; *app/views/templates/__footer-tpl.php__*










