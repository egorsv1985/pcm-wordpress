<?php
/**
 * Template name: Contacts
 *
 */

get_header(); ?>

<main class="main">
  <section class="contacts">
    <div class="container">
      <div class="contacts__left">
        <?php
        $section = get_field('секция_1');
        if( $section ): ?>
        <h1><?php echo $section['заголовок']; ?></h1>
        <p><?php echo $section['работа']; ?></p>
        <p><?php echo $section['улица']; ?></p>
        <p><?php echo $section['улица_2']; ?></p>

        <div class="phones">
          <a href="tel: <?php echo $section['телефон']; ?>"><?php echo $section['телефон']; ?></a>
          <a href="tel: <?php echo $section['телефон_2']; ?>"><?php echo $section['телефон_2']; ?></a>
        </div>
      <?php endif; ?>
      <?php
      $section2 = get_field('секция_2');
      if( $section2 ): ?>

        <ul class="emails">
          
          <li>
            <span><?php echo $section2['заголовок_3']; ?></span>
            <a href="mailto: <?php echo $section2['почта_3']; ?>"><?php echo $section2['почта_3']; ?></a>
          </li>
          
        </ul>
      <?php endif; ?>
      </div>
      <div class="contacts__right">
        <h2>Остались вопросы?</h2>
        <?php echo do_shortcode('[contact-form-7 id="176" title="Контакты"]'); ?>
        <p style="margin-top: 20px;" class="policy"><input type="checkbox" name="" value="" checked>Отправляя заявку вы даете согласие на обработку <a href="/">персональных данных</a></p>
      </div>
    </div>
  </section>

  <section class="map">
    <div class="container">
      <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/213/moscow/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Москва</a><a href="https://yandex.ru/maps/213/moscow/house/presnenskaya_naberezhnaya_6s2/Z04YcwNgS0ECQFtvfXt1eX1kbQ==/?ll=37.540246%2C55.748179&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">Пресненская набережная, 6с2 на карте Москвы, ближайшее метро Деловой центр — Яндекс.Карты</a><iframe src="https://yandex.ru/map-widget/v1/-/CCU4r-CKlA" width="100%" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
    </div>
  </section>
</main>

<?php get_footer();
