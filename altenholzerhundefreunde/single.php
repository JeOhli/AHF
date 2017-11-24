<?php
/*
 * Template STARTSEITE (Landing Page)
*/
?>
<!DOCTYPE html Public "-//W3C//DTD XHMTL 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-tranisitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>
			<?php wp_title('|', 1, 'right'); ?>
			<?php bloginfo('name'); ?>
		</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/blankoraster.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ahf.css" />
		<?php wp_head(); ?>
	</head>
	<body>
		<!-- Raster / Grid als responsive Seite -->
		<!-- Layout Schema: x Zeilen á 12 Spalten -->
		<div class="raster">
			<!-- Kopfbereich -->
			<!-- Platzhalter (2 Spalten) || Blogtitel (3 Spalten) || Pfote (1 Spalte) || Menü (6 Spalten) -->
			<!-- Blogtitel und Menü rechts ausgerichtet; Pfote links ausgerichtet -->
			<div class="zeile" id="navigation">
				<div class="spalten-02" id="platzhalter">
					<!-- Dummytext -->
				</div>
				<div class="spalten-03" id="titel">
					<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
				</div>
				<div class="spalten-01" id="pfote">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pfote.png">
				</div>
				<div class="spalten-06" id="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'header-nav' ) ); ?>
				</div>
			</div>
			<div class="zeile" id="beschreibung">
				<div class="spalten-04" id="untertitel">
					<?php bloginfo('description'); ?>
				</div>
				<div class="spalten-08" id="platzhalter">
				</div>
			</div>
			<!-- Hintergrundbild -->
			<div class="zeile">
				<div class="spalten-12" id="hintergrundbild">
				</div>
			</div>
				<div class="spalten-12" id="wichtig">
					<?php if ( is_active_sidebar( 'wichtig' ) ) : ?>
					<?php dynamic_sidebar( 'wichtig' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- Hauptteil -->
			<!-- Widget 5 Spalten || Inhalt (7 Spalten) -->
			<!-- Widgetbereich rechts ausgerichtet; Inhalt links ausgerichtet mit Blocksatz -->
			<div class="zeile">
				<?php if ( have_posts() ) : while ( have_posts() ): the_post(); ?>
					<div class="spalten-05" id="aktuelles">
						<beitragsbild><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></beitragsbild>
					</div>
					<div class="spalten-05" id="inhalt">
						<h1><?php the_title(); ?></h1>
						<?php the_content('weiterlesen...'); ?>
					</div>
					<div class="spalten-02" id="platzhalter">
					</div>
				<?php endwhile; endif; ?>
			</div>
			<!-- Vor Fußbereich -->
			<!-- Platzhalter (2 Spalten) || Logo (1 Spalte) || Anschrift (3 Spalten) || Platzhalter (3 Spalten) || Links (jeweils 1 Spalte) -->
			<!-- Logo rechts ausgerichtet; Anschrift (Textwidget) links ausgerichtet; Links (Einfacher Link) mittig ausgerichtet -->
			<div class="zeile" id="fussbereich">
				<div class="spalten-02" id="platzhalter">
				</div>
				<div class="spalten-01" id="logo">
					<?php if ( is_active_sidebar( 'logo' ) ) : ?>
					<?php dynamic_sidebar( 'logo' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-03" id="anschrift">
					<?php if ( is_active_sidebar( 'anschrift' ) ) : ?>
					<?php dynamic_sidebar( 'anschrift' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-02" id="platzhalter">
				</div>
				<div class="spalten-01" id="link">
					<?php if ( is_active_sidebar( 'kontakt' ) ) : ?>
					<?php dynamic_sidebar( 'kontakt' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-01" id="link">
					<?php if ( is_active_sidebar( 'impressum' ) ) : ?>
					<?php dynamic_sidebar( 'impressum' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-01" id="link">
					<?php if ( is_active_sidebar( 'datenschutz' ) ) : ?>
					<?php dynamic_sidebar( 'datenschutz' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- Fußbereich (12 Spalten) -->			
			<div class="zeile">
				<div class="spalten-8" id="coypright">
					&copy; Altenholzer Hundefreunde e.V.
				</div>
			</div>
		</div>
	</body>
</html>