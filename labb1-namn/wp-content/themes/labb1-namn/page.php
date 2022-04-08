<?php
/** 
* Template Name: Front Page Template
* Description:frontpage
* @package labb1-namn
* @subpackage labb1-namn
*/
get_header(); ?>

<?php
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( 'front', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // End of the loop. ?>



<?php get_footer(); ?>
