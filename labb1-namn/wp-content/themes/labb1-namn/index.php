<?php
/** 
* Change the settings in the index.php file
* @package labb1-namn
*/
?>

<?php get_header(); ?>

<?php
while ( have_posts() ) {
        the_post(); ?>
 
        <h1>
            <?php the_title(); ?>
        </h1>
 
        <p>
            <?php the_content(); ?>
        </p>
 
        <?php the_post_thumbnail();?>
<?php }?>

<?php get_footer(); ?>