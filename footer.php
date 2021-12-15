<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PCM
 */

?>

<footer class="footer">
	<div class="container">
		<div class="footer__block">
			<a class="footer__block_top" href='/'>
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
			</a>
			<ul class="footer__block_links">
				<li><?php echo get_bloginfo('description'); ?></li>
			</ul>
		</div>

		<div class="footer__block">
			<span class="footer__block_top">Страницы</span>
			<div id="access" role="navigation">
				</div>
				<?php
					wp_nav_menu( array(
					'menu'            => 'footer',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
															// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
					'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
					'container_class' => '',              // (string) class контейнера (div тега)
					'container_id'    => '',              // (string) id контейнера (div тега)
					'menu_class'      => 'footer__block_links',          // (string) class самого меню (ul тега)
					'menu_id'         => '',              // (string) id самого меню (ul тега)
					'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
					'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
					'before'          => '',              // (string) Текст перед <a> каждой ссылки
					'after'           => '',              // (string) Текст после </a> каждой ссылки
					'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
					'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
					'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
				) );
				?>
		</div>

		<div class="footer__block">
			<span class="footer__block_top">Решения</span>
			<?php
				wp_nav_menu( array(
				'menu'            => 'footer center',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
														// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
				'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
				'container_class' => '',              // (string) class контейнера (div тега)
				'container_id'    => '',              // (string) id контейнера (div тега)
				'menu_class'      => 'footer__block_links',          // (string) class самого меню (ul тега)
				'menu_id'         => '',              // (string) id самого меню (ul тега)
				'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
				'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
				'before'          => '',              // (string) Текст перед <a> каждой ссылки
				'after'           => '',              // (string) Текст после </a> каждой ссылки
				'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
				'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
				'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
			) );
			?>
		</div>
		<div class="footer__block">
			<span class="footer__block_top">Контакты</span>
			<?php
				wp_nav_menu( array(
				'menu'            => 'footer right',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
														// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
				'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
				'container_class' => '',              // (string) class контейнера (div тега)
				'container_id'    => '',              // (string) id контейнера (div тега)
				'menu_class'      => 'footer__block_links',          // (string) class самого меню (ul тега)
				'menu_id'         => '',              // (string) id самого меню (ul тега)
				'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
				'fallback_cb'     => 'wp_page_menu',  // (string) Используемая (резервная) функция, если меню не существует (не удалось получить)
				'before'          => '',              // (string) Текст перед <a> каждой ссылки
				'after'           => '',              // (string) Текст после </a> каждой ссылки
				'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
				'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
				'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
			) );
			?>
		</div>
	</div>

	<div class="gradientLine"></div>
</footer>

<div class="menu">
	<div class="menu__wrapper">
		<div>
			<ul uk-accordion>
				<li>
					<a class="uk-accordion-title" href="#">Решения</a>
					<div class="uk-accordion-content">
						<ul>
							<li>
								<a href="/upravlenie-remontami-i-nadezhnostju-oborudovaniya/">Управление ремонтами и надежностью оборудования</a>
							</li>
							<li>
								<a href="/upravlenie-energoeffektivnostju-i-uglerozhnym-sledom/">Управление энергоэффетивностью и углеродным следом</a>
							</li>
							<li>
								<a href="/servis-upravleniya-vyezdnymi-brigadami/">Сервис управления выездными сотрудниками</a>
							</li>
						</ul>
					</div>
				</li>

				<li>
					<a class="uk-accordion-title" href="#">Компания</a>
					<div class="uk-accordion-content">
						<ul>
							<li>
								<a href="/blog/">Блог</a>
							</li>
							<li>
								<a href="/o-nas/">О нас</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>

			<a href="/kontakty/">Контакты</a>

			<a class="button" href="#modal-center" uk-toggle>Консультация</a>
		</div>

		<p class="developedBy">Developed by <a href="https://zigzag.team" target="_blank" rel="noopener">ZIGZAG</a></p>
	</div>
</div>

<div id="modal-center" class="uk-flex-top" uk-modal>
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">

		<button class="uk-modal-close-default" type="button" uk-close></button>

		<h2>Оставьте заявку</h2>
			<?php echo do_shortcode('[contact-form-7 id="315" title="Форма телефона"]'); ?>
	</div>
</div>

<script type="text/javascript" src="<?php bloginfo('template_directory')?>/js/navigation.js"></script>
<script>

const myCarousel = new Carousel(document.querySelector("#myCarousel"), {
preload: 1
});

Fancybox.assign('[data-fancybox="carousel-gallery"]', {
closeButton: "top",
Thumbs: false,
Carousel: {
Dots: true,
on: {
change: (that) => {
myCarousel.slideTo(myCarousel.getPageforSlide(that.page), {
friction: 0
});
}
}
}
});


$(".phone").keypress(function(event){
  event = event || window.event;
  if (event.charCode && event.charCode!=0 && event.charCode!=46 && (event.charCode < 48 || event.charCode > 57) )
    return false;
		[].forEach.call(document.querySelectorAll('input'), function (input) {
        let keyCode;
        function mask(event) {
            event.keyCode && (keyCode = event.keyCode);
            let pos = this.selectionStart;
            if (pos < 3) event.preventDefault();
            let matrix = "+7 (___) ___-__-__",
                i = 0,
                def = matrix.replace(/\D/g, ""),
                val = this.value.replace(/\D/g, ""),
                newValue = matrix.replace(/[_\d]/g, function (a) {
                    return i < val.length ? val.charAt(i++) || def.charAt(i) : a;
                });
            i = newValue.indexOf("_");
            if (i != -1) {
                i < 5 && (i = 3);
                newValue = newValue.slice(0, i);
            }
            let reg = matrix.substr(0, this.value.length).replace(/_+/g,
                function (a) {
                    return "\\d{1," + a.length + "}";
                }).replace(/[+()]/g, "\\$&");
            reg = new RegExp("^" + reg + "$");
            if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = newValue;
            if (event.type == "blur" && this.value.length < 5) this.value = "";
        }

        input.addEventListener("input", mask, false);
        input.addEventListener("focus", mask, false);
        input.addEventListener("blur", mask, false);
        input.addEventListener("keydown", mask, false);
    });
});

</script>
</body>
</html>
