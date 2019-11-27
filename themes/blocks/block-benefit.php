<aside class="benefit"><div class="_container _row benefit__list">
	<?php 
		for ($i = 1; $i <= 5; $i++) {
			if (block_field('caption-'.$i, false)) {
	?>
		<div class="benefit__item"><div class="benefit__cart _i<?php echo $i ?>"><div class="benefit__title"><?php block_field('caption-'.$i) ?></div><div class="benefit__text"><?php block_field('text-'.$i) ?></div></div></div>
	<?php
			}
		}
	?>
</div></aside>