<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PCM
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PCM</title>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
	<?php wp_head(); ?>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
	<?php

	if ( is_front_page() )  { ?>
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/main.css">
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
	<?php }
	if ( is_page_template('ar.php') ) { ?>
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/AR.css">
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
		<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
 <?php	}
 if ( is_page_template('about.php') ) { ?>
	 <link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/about.css">
	 <link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	 <link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	 <link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_single() ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/article.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_page_template('blog.php') ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/blog.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_archive() ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/blog.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}


if ( is_page_template('contacts.php') ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/contacts.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_page_template('EE.php') ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/EE.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_page_template('policy.php') ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/policy.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_page_template('thank.php') ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/404.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
if ( is_page_template('toro.php') ) { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/TORO.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}
else  { ?>
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/404.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/globals.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/header.css">
	<link rel="stylesheet" href="http://landing.andris.beget.tech/PCM/css/footer.css">
<?php	}


 ?>



</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
		<div class="container">

			<button class="hamburger hamburger--spin burger" type="button">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>

			<a href='/' class="header__logo">
				<img src="http://landing.andris.beget.tech/PCM/images/logo.png" alt="logo" />
			</a>

			<nav class="header__nav">
				<ul>
					<li>
						Решения
						<?php
							wp_nav_menu( array(
							'menu'            => 'footer center',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
																	// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
							'container'       => 'span',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
							'container_class' => '',              // (string) class контейнера (div тега)
							'container_id'    => '',              // (string) id контейнера (div тега)
							'menu_class'      => 'dropdown',          // (string) class самого меню (ul тега)
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
					</li>

					<li>
						Компания
						<?php
							wp_nav_menu( array(
							'menu'            => 'main',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
																	// чем указанное местоположение theme_location - если указано, то параметр theme_location игнорируется)
							'container'       => 'span',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
							'container_class' => '',              // (string) class контейнера (div тега)
							'container_id'    => '',              // (string) id контейнера (div тега)
							'menu_class'      => 'dropdown',          // (string) class самого меню (ul тега)
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
					</li>

					<li>
						<a href="/kontakty/">Контакты</a>
					</li>
				</ul>
			</nav>

			<div class="header__right">
				<a href="tel: +7 499 703−22−48" class="header__phone">+7 499 703−22−48</a>
				<a class="button" href="#modal-center" uk-toggle>Консультация</a>
			</div>

			<a class="phone" href="tel: +7 499 703−22−48">
				<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M21.9122 27.1245C20.7685 27.1245 19.1618 26.7108 16.756 25.3667C13.8304 23.726 11.5675 22.2114 8.65772 19.3092C5.85225 16.5055 4.48702 14.6903 2.57628 11.2133C0.417684 7.28754 0.785652 5.22973 1.19698 4.35024C1.68682 3.29907 2.40987 2.67036 3.34444 2.04633C3.87527 1.69854 4.43702 1.4004 5.02257 1.15571C5.08116 1.13051 5.13565 1.10649 5.18429 1.08481C5.47433 0.954144 5.91378 0.756683 6.47042 0.96762C6.8419 1.10707 7.17354 1.39243 7.69269 1.90512C8.75733 2.95512 10.2122 5.2936 10.7489 6.44204C11.1093 7.21606 11.3478 7.727 11.3483 8.30004C11.3483 8.97094 11.0108 9.48833 10.6013 10.0467C10.5245 10.1516 10.4483 10.2518 10.3745 10.3491C9.92862 10.935 9.83077 11.1043 9.89522 11.4067C10.0259 12.0143 11.0003 13.8231 12.6017 15.4209C14.203 17.0188 15.9597 17.9317 16.5696 18.0618C16.8849 18.1291 17.0577 18.0272 17.6624 17.5655C17.7491 17.4993 17.8382 17.4307 17.9314 17.3622C18.556 16.8975 19.0493 16.5688 19.7044 16.5688H19.7079C20.278 16.5688 20.7661 16.8161 21.5747 17.2239C22.6294 17.7559 25.0382 19.192 26.0946 20.2579C26.6085 20.7758 26.895 21.1063 27.0351 21.4772C27.246 22.0356 27.0474 22.4733 26.9179 22.7663C26.8962 22.8149 26.8722 22.8682 26.847 22.9274C26.6003 23.5119 26.3005 24.0725 25.9511 24.602C25.3282 25.5336 24.6972 26.2549 23.6437 26.7454C23.1027 27.0012 22.5106 27.1309 21.9122 27.1245Z" fill="#0D0A46"/>
				</svg>
			</a>
		</div>
	</header>
