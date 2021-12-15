<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package PCM
 */

get_header();
?>
<main class="main">
  <section class="error">
    <div class="container">
      <img src="http://landing.andris.beget.tech/PCM/images/404.png" />
      <h1>Упс, запрашиваемая страница не найдена</h1>
      <p>Ваша страница не найдена или была удалена но вы можете начать просмотр с главной страницы!</p>
      <a class="button" href="/">Перейти к главной</a>
    </div>
  </section>
</main>

<?php
get_footer();
