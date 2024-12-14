<?php 
/**
 * 	Template Name: list services
 * 	Template Post Type : page, article, service-list, service
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<section class="liste_service_page">
    <img class="titre_services" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

    <div class="services_description">
        <img class="liste_service_titre_description" src="<?php the_field('services_description_title_image'); ?>">
        <p class="contenu">
            <?php the_content(); ?>
        </p>
    </div>


    <div class="listes_services_caroussel">
        <img class="titre_liste_services" src="<?php the_field("caroussel_titre")?>" alt="">

        <div class="swiper03">
            <div class="swiper-wrapper">

                <?php
                    $arguments = array( // 👈 Tableau d'arguments
                        'post_type' => 'service',
                        'posts_per_page' => 4
                    );
                    $projects = new WP_Query($arguments); // 👈 Utilisation
                    while ($projects->have_posts()) : $projects->the_post(); 
                ?>

                <div class="swiper-slide card">
                    <img src="<?php the_field("next-news-img")?>" alt="Card 1" class="card-image">
                    <div class="card-content">
                        <a href="<?php the_field("next-news_url")?>">
                            <h2 class="card-title">
                                <?php the_field("next_news")?>
                            </h2>
                        </a>
                        <p class="card-description">
                            <?php the_field("next-news-description")?>
                        </p>
                        <button class="card-button">
                            <?php the_field("next-news-btn-label")?>
                        </button>
                    </div>
                </div>

                <?php
                    endwhile; 
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>

</section>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>