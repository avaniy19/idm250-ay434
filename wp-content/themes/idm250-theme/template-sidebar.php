
/* Template Name: Sidebar */
<?php get_header(); ?>



<?php
if ( is_active_sidebar( 'sidebar-1' ) ) :
    dynamic_sidebar( 'sidebar-1' );
endif;
?>

<?php get_template_part('components/content');?>

<?php get_footer(); ?>