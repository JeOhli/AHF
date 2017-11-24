<?php

if ( function_exists('register_sidebar') ) {

register_sidebar(array('name' => 'Wichtig',
                       'id' => 'wichtig',
                       'description' => 'Unterhalb des Sliders auf der gesamten Seitenbreite für wichtige Informationen (bspw. Unterrichtsausfall)',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Aufmacher',
                       'id' => 'aufmacher',
                       'description' => 'Links neben dem Seiteninhalt. Soll als Blickfänger dienen und enthält anstehende Veranstaltungen oder einfach nur wechselnde Bilder',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Über Uns',
                       'id' => 'ueberuns',
                       'description' => 'Links neben dem Seiteninhalt. Dort wo auf der Startseite der Blickfänger ist.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Angebote',
                       'id' => 'angebote',
                       'description' => 'Links neben dem Seiteninhalt. Dort wo auf der Startseite der Blickfänger ist.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Termine',
                       'id' => 'termine',
                       'description' => 'Links neben dem Seiteninhalt. Dort wo auf der Startseite der Blickfänger ist.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Galerie',
                       'id' => 'galerie',
                       'description' => 'Links neben dem Seiteninhalt. Dort wo auf der Startseite der Blickfänger ist.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Infoservice',
                       'id' => 'infoservice',
                       'description' => 'Links neben dem Seiteninhalt. Dort wo auf der Startseite der Blickfänger ist.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Logo',
                       'id' => 'logo',
                       'description' => 'Dient als Bereich, in dem das Logo im Fussbereich dargestellt wird.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Anschrift',
                       'id' => 'anschrift',
                       'description' => 'Dient als Bereich, in dem die Anschrift im Fussbereich dargestellt wird.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Kontakt',
                       'id' => 'kontakt',
                       'description' => 'Verknüpfung in der Fusszeile auf die Kontaktseite.',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Impressum',
                       'id' => 'impressum',
                       'description' => 'Verknüpfung auf die Impressumsseite',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));

register_sidebar(array('name' => 'Datenschutz',
                       'id' => 'datenschutz',
                       'description' => 'Verknüpfung auf die Datenschutzseite',
                       'before_widget' => '<div class="widget">',
                       'after_widget' => '</div>',
                       'before_title' => '<h1>',
                       'after_title' => '</h1>'));
}

if ( function_exists('register_nav_menus') ) {
    register_nav_menus(array(
        'header-nav' => __( 'Kopfmenü' )
    ));
}

if ( function_exists('add_theme_support') ) {
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size( 225, 150, false );
}

function custom_excerpt_length( $length ) {
	return 20;
}

add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter('login_errors',create_function('$a', "return null;"));

remove_action('wp_head', 'wp_generator');

?>