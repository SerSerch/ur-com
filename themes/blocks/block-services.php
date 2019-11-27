<div class="services _container _row">
	<?php
		$pages = get_pages('parent='.$post->ID.'&sort_column=menu_order'); 
		foreach( $pages as $page ){
	?>
	<article class="_col-12 _col-lg-6"><div class="services__item"><div class="_row services__top"><div class="services__image-box"><img class="services__image" src="<?php echo get_the_post_thumbnail_url($page->ID) ?>"></div><div class="services__box"><h3 class="services__caption"><?php echo $page->post_title ?></h3><div class="services__text"><?php echo get_post_meta( $page->ID, 'Описание', true ); ?></div></div></div><div class="_row services__bot"><div class="services__price"><?php echo get_post_meta( $page->ID, 'Цена', true ); ?></div><div class="services__btn-box"><a href="<?php the_permalink($page->ID); ?>" class="button services__btn">Прайс</a><label class="button _s services__btn" for="modal-close">Бесплатная консультация</label></div></div></div></article>
	<?php } ?>
</div>