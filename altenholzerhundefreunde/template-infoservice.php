<?php
/*
 * Template Name: Infoservice (Menüseiten Infoservice)
*/
?>
<?php get_header(); ?>
			<!-- Hauptteil -->
			<!-- Widget 5 Spalten || Inhalt (7 Spalten) -->
			<!-- Widgetbereich rechts ausgerichtet; Inhalt links ausgerichtet mit Blocksatz -->
			<div class="zeile">
				<div class="zeile">
					<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
						<div class="spalten-05" id="aktuelles">
							<div class="zeile">
								<beitragsbild><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></beitragsbild>
							</div>
							<div class="zeile" id="seitenbereich">
								<?php if ( is_active_sidebar( 'infoservice' ) ) : ?>
								<?php dynamic_sidebar( 'infoservice' ); ?>
								<?php endif; ?>
							</div>
						</div>
						<div class="spalten-05" id="inhalt">
							<h1><?php the_title(); ?></h1>
							<?php the_content('weiterlesen...'); ?>
						</div>
						<div class="spalten-02" id="platzhalter">
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
<?php get_footer(); ?>