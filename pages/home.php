<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header(); ?>

<?php 
get_template_part( 'template-parts/content-hero' );
get_template_part( 'template-parts/content-info' );

if( have_rows('service_packages') ): 

    while( have_rows('service_packages') ): the_row(); 
        
        get_template_part( 'template-parts/content-section1' );
        get_template_part( 'template-parts/content-section2' );
        get_template_part( 'template-parts/content-section3' );

    endwhile;

endif;
get_footer();