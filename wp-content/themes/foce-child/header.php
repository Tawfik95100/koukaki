<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="bouton-menu">
                <span class="burger"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Burger.png';?>" alt="bouton d'ouverture du menu"></span>
                <span class="croix"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Burger_croix.png';?>" alt="bouton de fermeture du menu"></span>
                
            </div>
            <ul>
                <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
                 </ul>
                 

		</nav><!-- #site-navigation -->

        <section class="liste_menu">
            
            <div class="liste_liens">

                <img class='logo_menu' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo_menu.png';?>" alt="logo studio koukaki">
                <img class='chat_bleue' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_bleue.png';?>" alt="chat bleue">
                <img class='chat_orange' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_orange.png';?>" alt="chat orange">
                <img class='chat_gris' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/chat_gris.png';?>" alt="chat_gris">
                <img class='flower_orange ' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Flower.png';?>" alt="fleur orange">
                <img class='hibiscus_menu' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Hibiscus_footer.png';?>" alt="fleur d'hibiscus">
                <img class='sunflower_menu' src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png';?>" alt="fleur blanche et jaune">

                <ul class="lien">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
                </ul>

                <p class="nom">
                STUDIO KOUKAKI
                </p>

            </div>
            
        </section>

	</header><!-- #masthead -->
