<?php

get_header();
?>

<div class="_container _row">
	<h3 class="_col-12 _ptb-n">
		<?php echo get_post_meta( $post->ID, 'Описание', true ) ?>
	</h3>
	<div class="_col-12">
		<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

			endwhile; // End of the loop.
			?>
	</div>
</div>

<?php
get_footer();
?>