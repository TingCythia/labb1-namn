<?php
/** 
* Template Name: Index 
* Description:blog home 
* @package labb1-namn
* @subpackage labb1-namn
*/
get_header(); ?>


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
<?php get_sidebar();?>
<?php get_footer(); ?>