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
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/desktop.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/smalldeviceraster.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/fussbereich.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/ahf.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animation.css" />
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
			<!-- Bilderkarussel (12 Spalten) -->
			<div class="zeile">
				<div class="spalten-12" id="karussel">
					<?php echo do_shortcode("[metaslider id=4776]"); ?>
				</div>
				<div class="spalten-12" id="bildmobil">
				</div>
			</div>
				<div class="spalten-12" id="wichtig">
					<?php if ( is_active_sidebar( 'wichtig' ) ) : ?>
					<?php dynamic_sidebar( 'wichtig' ); ?>
					<?php endif; ?>
				</div>
			</div>