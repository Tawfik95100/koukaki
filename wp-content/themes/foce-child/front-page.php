<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <div id="parallaxe">
            <img  class="logo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
            
            <video class="banner_video" autoplay muted loop  poster="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png';?>">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/video/clip.mp4'; ?>" type="video/mp4">  
            </video>
            <img class="banner_image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/banner.png';?>" alt="image de la banniere">

        </section>

        <section id="#story" class="story fade-in">
            <h2><span class="titre1">L'</span><span class="titre2">histoire</span></h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            
            <article id="characters" class="fade-in">
                <div class="main-character">
                    <h3>Les personnages</h3>

                 <?php echo get_template_part(
                    'template-parts/swiper'
                 ); ?>

                </div>
            </article>
            <article id="place" class="fade-in">
                <div>
                    <h3>Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
<div>
    <img class="nuages" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Nuages.png';?>" alt="nuages">
</div>
            </article>
        </section>
        
        <section id="studio" class="fade-in">
            <h2><span class="titre3">Studio</span> <span class="titre4">Koukaki</span>  </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
    </main>

<?php
get_footer();
