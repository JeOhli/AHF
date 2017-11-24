<?php
/*
 * Template STARTSEITE (Landing Page)
*/
?>
<?php get_header(); ?>
			<!-- Hauptteil -->
			<!-- Widget 5 Spalten || Inhalt (7 Spalten) -->
			<!-- Widgetbereich rechts ausgerichtet; Inhalt links ausgerichtet mit Blocksatz -->
			<div class="zeile">
				<div class="spalten-05" id="aktuelles">
					<?php query_posts('cat=8&showposts=1'); if ( have_posts() ) { the_post(); ?>
						<h1><?php the_title();?></h1><br>
						<h6>Ein Beitrag vom <?php echo the_date(); ?></h6><br>
						<?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>">Lesen Sie hier mehr...</a>
						<?php wp_reset_query(); ?>
					<?php }	else { query_posts('cat=6&showposts=1'); if ( have_posts() ) { the_post(); ?>
						<beitragsbildohnetext><?php if (has_post_thumbnail()) { the_post_thumbnail(); } ?></beitragsbildohnetext>
					<?php } }; wp_reset_query(); ?>
				</div>
				<div class="spalten-05" id="inhalt">
					<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
					<?php if ( has_post_thumbnail() ) : the_post_thumbnail(); endif; ?>
					<h1><?php the_title(); ?></h1>
					<?php the_content('weiterlesen...'); ?>
					<?php endwhile; endif; ?>
				</div>
				<div class="spalten-02" id="platzhalter">
				</div>
			</div>
<?php get_footer(); ?>