<?php
    // print_r(__DIR__); die();
    require __DIR__.'/templates/doctype-tpl.php';
    require __DIR__.'/templates/header-tpl.php';   
    require __DIR__.'/../inc/breadcrumb.php'; 
?>

<h1 class="accueil_title">Ici c'est la page accueil ou presque... car je suis dans le fichier <em>index.php</em> en réalité.</h1>

<?php 

    // Fil d'Ariane
    $fil = get_fil_ariane(array('../public/index.php' => 'Acceuil'));
    require __DIR__.'/templates/breadcrumb_tpl.php';

?>

<a href="https://www.viedemerde.fr/article/les-20-noms-de-villes-francaises-les-plus-droles-mais-qu-en-pensent-les-habitants_230915.html"><h2 class="accueil_subTitle">Noms de villes marrant...</h2></a>

<section class="article article_1">
    <div class="row">
        <p class="col-xl-9">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis odio id obcaecati velit at debitis laudantium dolore aut dolores, commodi adipisci deleniti inventore minus quod necessitatibus quasi ab, corporis provident iure fuga! Sunt eaque veritatis nulla praesentium eligendi deserunt ut perferendis consequatur illo quasi illum tenetur, doloremque aperiam quod animi commodi corporis quos nesciunt. Quae officia inventore beatae harum, perspiciatis dolorem tempore, quod totam accusamus perferendis omnis ullam minima, reiciendis ex id commodi distinctio autem voluptates doloremque corrupti libero ratione! Delectus sed reiciendis beatae. Voluptate magni consequuntur neque dolorem. In, porro distinctio quas sed sunt mollitia maiores praesentium iste nostrum, quod natus aut rerum obcaecati amet, quos dolor. Eveniet laborum dolorem delectus vero labore, rem totam voluptates nihil vel suscipit quae illo similique error corrupti nesciunt doloribus aperiam tempore! Nemo, sed tempora minima aspernatur quaerat aliquam a? Sequi animi suscipit enim accusantium corporis, laborum dolor rem eum voluptatem sunt temporibus!</p>
        <img src="http://localhost/programmation/repos_github/droleDeNom/v1.3-pageInscription/public/assets/imgs/trecon.jpeg" alt="panneau nom de la ville" class="photoArticle1 col-xl-3">
    </div>
</section>
<hr>
<section class="article article_2">
    <div class="row">
        <img src="http://localhost/programmation/repos_github/droleDeNom/v1.3-pageInscription/public/assets/imgs/arnacLaPoste.jpeg" alt="panneau nom de la ville" class="photoArticle2 col-xl-4">
        <p class="col-xl-8">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus exercitationem nostrum maiores, necessitatibus consequatur consectetur quo nobis atque aliquam dolor id, minima eligendi ratione voluptatum adipisci a recusandae nisi quia consequuntur. Minus aperiam quas neque! At libero quod quos modi quibusdam rem officia amet? Earum aliquid perspiciatis nemo odio porro quasi cumque repellendus molestiae. Neque asperiores dolorem, consectetur beatae exercitationem tempora nobis hic quaerat aspernatur incidunt, distinctio iusto eius doloremque nisi molestiae obcaecati sit adipisci consequuntur! Ab optio ad, nulla voluptatibus ex tempore deserunt minus. Quasi aliquam repellendus quisquam quam saepe dolore quae veniam laborum veritatis quod in, recusandae voluptas debitis. Quasi adipisci harum inventore dolorem. Quae repudiandae perspiciatis obcaecati at ullam
        corporis numquam, sequi nisi consectetur quidem nostrum voluptate dolor praesentium vero aut voluptas? Qui, numquam quas repellat velit nostrum voluptatibus, ipsum sit accusamus aliquam amet consequuntur soluta quos dolore quae recusandae eum dignissimos. Quidem possimus illum blanditiis maiores.</p>
    </div>  
</section>
<hr>

<?php
    require __DIR__.'/templates/footer-tpl.php';
?>