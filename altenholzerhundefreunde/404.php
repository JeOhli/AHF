<?php
/*
 * Template 404 (404-Fehler)
*/
?>
<?php get_header(); ?>
			<!-- Hauptteil -->
			<!-- Widget 5 Spalten || Inhalt (7 Spalten) -->
			<!-- Widgetbereich rechts ausgerichtet; Inhalt links ausgerichtet mit Blocksatz -->
			<div class="zeile">
				<div class="spalten-05" id="aktuelles">
					<div class="zeile">
						<?php query_posts('cat=6&showposts=1'); if ( have_posts() ) { the_post(); ?>
							<beitragsbildohnetext><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></beitragsbildohnetext>
						<?php }; wp_reset_query(); ?>
					</div>
					<div class="zeile" id="seitenbereich">
						<?php if ( is_active_sidebar( 'ueberuns' ) ) : ?>
						<?php dynamic_sidebar( 'ueberuns' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="spalten-05" id="inhalt">
					<?php query_posts('cat=9&showposts=1'); if ( have_posts() ) { the_post(); ?>
						<h1><?php the_title();?></h1><br>
						<?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
						<?php the_content(); ?>
						<a href="<?php bloginfo('url'); ?>">Zur&uuml;ck zur Startseite...</a>
						<?php wp_reset_query(); ?>
					<?php } ; wp_reset_query(); ?>
				</div>
				<div class="spalten-02" id="platzhalter">
				</div>
			</div>
<?php get_footer(); ?>