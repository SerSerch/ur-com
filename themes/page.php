<?php
get_header();
?>
<div class="_container _row ">
			<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<div id="breadcrumbs" class="breadcrumbs">','</div>' );
}
	?>
</div>
<?php
if ($post->post_parent) {
?>
<section class="reimbursement _container _row"><div class="_row reimbursement__item"><div class="reimbursement__image-box"><img class="reimbursement__image" src="<?php echo get_the_post_thumbnail_url($post->ID) ?>" alt="<?php echo $post->post_title ?>"></div><div class="reimbursement__box"><h3 class="reimbursement__caption"><?php echo $post->post_title ?></h3><div class="reimbursement__text"><?php echo get_post_meta( $post->ID, 'Описание', true ); ?></div></div></div></section>
<?php
}
?>
	<?php
			/* Start the Loop */
			while ( have_posts() ) :

				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

			endwhile; // End of the loop.
			?>


<?php
get_footer();
?>