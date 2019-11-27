<!DOCTYPE html><html lang="ru-RU"><head><meta charset="utf-8">
	<title><?php the_title_attribute(); ?>. <?php bloginfo(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="index, follow">

	<?php wp_head() ?>
	<link rel="icon" sizes="32x32" href="/favicon.ico">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&amp;display=swap&amp;subset=cyrillic" media="all">
	<link href="/main.css?v=10" rel="stylesheet">
	</head>
	<body>
		<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(56308279, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56308279" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

		
		<div class="wrapper"><div class="wrap-container"><header class="top-menu"><div class="_container _row top-menu__container"><a href="/" class="link top-menu__logo-box" title="ЮР-КОМ"><img class="top-menu__logo" src="/svg/logo.svg" alt="Юр-Ком"><div class="top-menu__logo-text"><h1 class="top-menu__caption">Юридические услуги</h1><span class="top-menu__sup">Бухгалтерия. Аутсорсинг. Аудит.</span></div></a><div class="top-menu__soc"><a class="top-menu__soc-icon _fb" href="https://www.facebook.com/groups/2503882139737560/" title="Facebook"></a><a class="top-menu__soc-icon _vk" href="https://vk.com/urcomkzn" title="Вконтакте"></a><a class="top-menu__soc-icon _in" href="https://www.instagram.com/urcom_kazan" title="Instagram"></a><a class="top-menu__soc-icon _vb" href="https://tele.gg/Ur_com" title="Telegram"></a><a class="top-menu__soc-icon _wa" title="WhatsApp" href="https://wa.me/79872150703"></a></div><div class="top-menu__adr"><span>г. Казань</span><span>ул. Чистопольская 77</span></div><div class="top-menu__phone"><a class="link" href="tel:+78432150703">+7(843)215-07-03</a><a class="link" href="tel:+79872150703">+7(987)215-07-03</a></div><div class="top-menu__btn-box"><button class="button b24-web-form-popup-btn-4" >Заказать звонок</button></div></div><nav class="top-menu__nav"><div class="_container"><div class="top-menu__nav-mob"><a class="link _s top-menu__link" href="/">Главная</a><a class="link _s top-menu__link" href="/yur-licam/" data-sup="Юридические услуги">Юр. лицам</a>
<?php
	$sub = get_pages('parent=13&sort_column=menu_order');
	  if ($sub) {
		?><div class="top-menu__sub-menu"><?php
		  foreach( $sub as $subpage ){
		?>
		<a class="link _s top-menu__link" href="<?php echo get_permalink($subpage->ID) ?>"><?php echo $subpage->post_title; ?></a>
		<?php
		  }
		?>
		</div>
		<?php
	  }
?>
		<a class="link _s top-menu__link" href="/fiz-licam/" data-sup="Юридические услуги">Физ. лицам</a>
<?php
	$sub = get_pages('parent=11&sort_column=menu_order');
	  if ($sub) {
		?><div class="top-menu__sub-menu"><?php
		  foreach( $sub as $subpage ){
		?>
		<a class="link _s top-menu__link" href="<?php echo get_permalink($subpage->ID) ?>"><?php echo $subpage->post_title; ?></a>
		<?php
		  }
		?>
		</div>
		<?php
	  }
?>
		<a class="link _s top-menu__link" href="/buhgalteriya/" data-sup="ООО и ИП">Бухгалтерия</a>
<?php
	$sub = get_pages('parent=16&sort_column=menu_order');
	  if ($sub) {
		?><div class="top-menu__sub-menu"><?php
		  foreach( $sub as $subpage ){
		?>
		<a class="link _s top-menu__link" href="<?php echo get_permalink($subpage->ID) ?>"><?php echo $subpage->post_title; ?></a>
		<?php
		  }
		?>
		</div>
		<?php
	  }
?>
		<a class="link _s top-menu__link" href="/registraciya/" data-sup="ООО и ИП">Регистрация</a>
<?php
	$sub = get_pages('parent=18&sort_column=menu_order');
	  if ($sub) {
		?><div class="top-menu__sub-menu"><?php
		  foreach( $sub as $subpage ){
		?>
		<a class="link _s top-menu__link" href="<?php echo get_permalink($subpage->ID) ?>"><?php echo $subpage->post_title; ?></a>
		<?php
		  }
		?>
		</div>
		<?php
	  }
?>
		<a class="link _s top-menu__link" href="/kontakty/">Контакты</a></div></div></nav></header><main class="main<?php 
			//окружности фон
			if($post->ID != 2 && $post->ID != 158 && get_the_category( $post->ID )[0]->slug != 'new') {
				echo (" _eq");
			}
			?>">
<?php
		//кнопка назад
	if (false && $post->post_parent) {
?>
		<div class="_container _col-12"><a class="back" href="<?php echo get_permalink($post->post_parent) ?>"><?php echo get_the_title($post->post_parent) ?></a></div>
<?php
	} else if (get_the_category( $post->ID )[0]->slug == 'new') {
?>
		<div class="_container _col-12"><a class="back" href="<?php echo get_permalink(158) ?>"><?php echo get_the_title(158) ?></a></div>
<?php
	}
?>