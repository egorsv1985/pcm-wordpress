<?php
/**
 * Template name: thank
 *
 */

get_header(); ?>

<main class="main">
  <section class="error">
    <div class="container" uk-scrollspy="target: .uk-scrollspy-class; cls: uk-animation-slide-bottom-medium; delay: 100;">
      <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/thank.png" style="max-width: 270px" />
      <h1 class="uk-scrollspy-class">Ваши данные успешно отправленны!</h1>
      <p class="uk-scrollspy-class">Мы перезвоним Вам в течении 15 минут</p>
      <a class="uk-scrollspy-class button" href="/">Перейти к главной</a>
    </div>
  </section>
</main>

<?php get_footer();
