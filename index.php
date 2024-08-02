<?php get_header(); ?>


 	<?php if ( !is_front_page() && !in_array(get_the_title(), array('bio', 'testimonials', 'sellers', 'buyers')) && have_posts() ) : ?>
		<div class=" p-8">
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

		</div>
	<?php endif; ?>


<?php
get_footer();
