<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
        <meta name="keywords" content="<?php echo esc_html( implode( ', ', wp_get_post_tags( get_the_ID(), array( 'fields' => 'names' ) ) ) ); ?>" />
        <meta property="og:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
        <meta name="twitter:card" content="photo" />
        <meta name="twitter:site" content="<?php bloginfo( 'name' ); ?>" />
        <meta name="twitter:title" content="<?php if ( is_single() ) { the_title(); } else { bloginfo( 'name' ); } ?>" />
        <meta name="twitter:description" content="<?php if ( is_single() ) { echo esc_html( wp_strip_all_tags( get_the_excerpt(), true ) ); } else { bloginfo( 'description' ); } ?>" />
        <meta name="twitter:image" content="<?php if ( is_single() && has_post_thumbnail() ) { the_post_thumbnail_url( 'full' ); } elseif ( has_site_icon() ) { echo esc_url( get_site_icon_url() ); } ?>" />
        <meta name="twitter:url" content="<?php if ( is_single() ) { esc_url( the_permalink() ); } else { echo esc_url( home_url() ) . '/'; } ?>" />
        <meta name="twitter:widgets:theme" content="light" />
        <meta name="twitter:widgets:link-color" content="#007acc" />
        <meta name="twitter:widgets:border-color" content="#fff" />
        <link rel="canonical" href="<?php echo esc_url( 'https://' . $_SERVER["HTTP_HOST"] . parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH ) ); ?>" />
    </head>
    <header id="header">
        <body <?php body_class();?>>
        <nav>
            <div class="nav">
                <input type="checkbox" id="nav-toggle">
                <div class="logo">MINZ<strong>CODE</strong></div>
                <ul class="links">
                    <?php 
                        wp_nav_menu( array( 
                            'theme_location' => 'main-menu', 
                            'container_class' => '', 
                            'menu_class' => 'menu', 
                            'depth' => 0, // Limit to top-level items
                            'items_wrap' => '%3$s' 
                        ) ); 
                    ?>
                </ul>
                <label for="nav-toggle" class="icon-burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </label>
            </div>
        </nav>
    </header>
<main id="content" role="main">