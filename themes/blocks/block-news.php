<section class="news"><div class="_container _row">
<?php if(block_field('caption', false)) { ?>
<h3 class="_col-12"><?php block_field('caption') ?></h3>
<?php
}
?>
	<div class="_row news__list">
<?php
	$posts = get_posts('numberposts='.block_field('count', false).'&orderby=date');
	foreach( $posts as $post ){
		$image = get_the_post_thumbnail_url($post->ID);
?>
<article class="_col-12 _col-lg-4 news__item-box"><a class="link news__item" href="<?php the_permalink($post->ID); ?>"><div class="news__image" <?php echo ($image ? 'style="background-image: url('.$image.')"' : ''); ?>></div><div class="news__text"><?php
		if ( get_post_meta( $post->ID, 'Описание', true ) ){
			echo get_post_meta( $post->ID, 'Описание', true );
		}
		else {
			echo 'Свежая новость!';
		}
	?></div><div class="news__btn-box"><div class="button">Читать полностью</div></div></a></article>
<?php
	}
?>	
</div></div></section>