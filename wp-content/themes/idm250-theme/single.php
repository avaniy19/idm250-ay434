

<?php get_header(); ?>
<?php get_template_part('components/hero-home');?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="page-content-wrapper">

<!-- This is single .php  -->



<?php get_template_part('components/content');?>

</article>


</div>
<?php 

// $currentPostId = get_the_id();

// $terms = get_the_terms($currentPostId, 'category');

// foreach ($terms as $term) {

//     echo $term->name;
// }

?>

<?php 
// get_footer(); 
?>