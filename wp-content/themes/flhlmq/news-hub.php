<?php 
/**
 * 	Template Name: news-hub
 * 	Template Post Type : post, page, news
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		
		<div class="pageblanche">

			<img class="titre_liste_nouvelles" src="<?php the_post_thumbnail_url(); ?>" alt="Liste de nouvelles">

			<div class="dropdown">
				<div class="nouvelle_menu">Filtre</div>
				<div class="dropdown-child">
					<a href="#">Plus récents</a>
					<a href="#">Plus ancients</a>
				</div>
			</div>

			<div class="listes_nouvelles_caroussel">

			<div class="card">
				<img src="./medias/images/page_nouvelle/nouvelle01.jpg" alt="Card 1" class="card-image">
				<div class="card-content">
					<h2 class="card-title">Envoyez un courriel pour soutenir Alexis!</h2>
					<p class="card-description">
						Un jeune trisomique handicapé et en fin de vie ne peut même plus aller à l’extérieur
						puisque l’office municipal d’habitation qui gère son HLM refuse d’installer un élévateur,
						même si des fonds d’exception ont été débloqués à cet effet. </br></br>
						17/09/2024- 12:03
					</p>
					<button class="card-button">En savoir plus</button>
				</div>
			</div>


			</div>

			<div id="liste_novs_deux" class="listes_nouvelles_caroussel deux">
			</div>



			<div itemscope itemtype="https://schema.org/Nouvelle">
				<img itemprop="image" class="image_nouvelle" src="<?php the_post_thumbnail_url(); ?>" alt="">
				<div class="case_transparente nouvelle">
					<h1 class="titre nouvelle">
						<span itemprop="name"><?php the_title(); ?></span>
					</h1>
					<h2 class="categorie communaute">
						<span itemprop="categorie"><?php the_field('category_news'); ?></span>
					</h2>
					<h2 class="date">
						<span itemprop="publication"><?php the_field('date_news'); ?></span>
					</h2>
				</div>
			</div>

			<p itemprop="contexte" class="contexte_nouvelle">
				<?php the_content(); ?>
				<a itemprop="source" class="nouvelle_lien" href="<?php the_field('link_article');?>">Voir l’article du Journal de Québec</a></br>
			</p>

			<div class="prochaine_nouvelle">
				<a href="<?php the_field('link_next_news');?>">
					<h2>Prochaine nouvelle</h2>
				</a>
				<p><?php get_field('next_news');?></p>
			</div>

		</div>


<div class="listes_nouvelles_caroussel">

	<div class="card">
		<img src="./medias/images/page_nouvelle/nouvelle01.jpg" alt="Card 1" class="card-image">
		<div class="card-content">

			<h2 class="card-title">Envoyez un courriel pour soutenir Alexis!</h2>
			<p class="card-description">
				Un jeune trisomique handicapé et en fin de vie ne peut même plus aller à l’extérieur
				puisque l’office municipal d’habitation qui gère son HLM refuse d’installer un élévateur,
				même si des fonds d’exception ont été débloqués à cet effet. </br></br>
				17/09/2024- 12:03
			</p>
			<button class="card-button">En savoir plus</button>
		</div>
	</div>

	<div class="card">
		<img src="./medias/images/page_nouvelle/frappu_manif.jpeg" alt="Card 2" class="card-image">
		<div class="card-content">
			<h2 class="card-title">« Je vis dans un HLM et ça, c’est une chance que j’ai »</h2>
			<p class="card-description">
				La FLHLMQ était présente à la grande manifestation regroupant 1 300
				personnes en faveur du logement social qui s'est déroulée, le 15 septembre,
				devant l'Assemblée nationale à Québec.</br></br>
				16/09/2024- 16:28
			</p>
			<button class="card-button">En savoir plus</button>
		</div>
	</div>

	<div class="card">
		<img src="./medias/images/page_nouvelle/pelleter-la-neige.jpg" alt="Card 3" class="card-image">
		<div class="card-content">
			<h2 class="card-title">Première pelletée de terre pour Unitaînés à Rimouski</h2>
			<p class="card-description">
				Radio Canada souligne, dans un reportage du 9 septembre, la pelletée de
				terre officielle d'un immeuble de 100 logements réalisé par la Mission
				Unitaînés qui sera ensuite confié à la gestion de l'Office d'habitation
				Rimouski-Neigette.</br></br>
				10/09/2024- 09:03
			</p>
			<button class="card-button">En savoir plus</button>
		</div>
	</div>

	<div class="card">
		<img src="./medias/images/page_nouvelle/abiti.jpg" alt="Card 4" class="card-image">
		<div class="card-content">
			<h2 class="card-title">Le mépris a assez duré!</h2>
			<p class="card-description">
				Radio Canada vient de publier un article sur la situation scandaleuse vécue à l'office
				d'habitation du lac Abitibi: laxisme dans la location des logements, mépris des locataires qui
				posent des questions, menaces contre les membres du CCR, etc.</br></br>
				11/09/2024- 11:41
			</p>
			<button class="card-button">En savoir plus</button>
		</div>
	</div>

	<button class="affichage_plus_nvs">
		Voir plus de nouvelles
	</button>

</div>


<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>