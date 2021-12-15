<?php
/**
 * Template name: EE
 *
 */

get_header(); ?>

<main class="main">
  <section class="breadcrumbs">
    <div class="container">
      <ul>
        <li>
          <a href="/">Главная</a>
        </li>
        <svg width="5" height="10" viewBox="0 0 5 10" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M0.140165 0.187536C0.327052 -0.0625115 0.630056 -0.0625115 0.816943 0.187536L4.41379 5L0.816943 9.81246C0.630056 10.0625 0.327052 10.0625 0.140165 9.81246C-0.0467218 9.56241 -0.0467218 9.15701 0.140165 8.90696L3.06024 5L0.140165 1.09304C-0.0467218 0.842995 -0.0467218 0.437585 0.140165 0.187536Z" fill="#0D0A46"/>
        </svg>
        <li>
          <a class="active" href="/"><?php the_title(); ?></a>
        </li>
      </ul>
    </div>
  </section>
  <section class="top">
    <div class="container" uk-scrollspy="target: .uk-scrollspy-class; cls: uk-animation-slide-bottom-medium; delay: 100;">
      <div class="top__left">
        <?php
        $section = get_field('секция_1');
        if( $section ): ?>
        <h1 class="uk-scrollspy-class"><?php echo $section['заголовок']; ?></h1>
        <div class="uk-scrollspy-class top__left_bottom">
          <button class="button" href="#modal-center" uk-toggle>Оставить заявку</button>
          <a href="tel: <?php echo $section['телефон']; ?>">
            <span><?php echo $section['телефон']; ?></span>
            <img alt="" src="<?php echo get_template_directory_uri(); ?>/images/icons/arrow.svg" />
          </a>
        </div>
        <?php endif; ?>
      </div>
      <img alt="" class="top__right" src="<?php echo $section['изображение']; ?>" />
    </div>

    <div class="container" uk-scrollspy="cls: uk-animation-fade">
      <ul>
        <?php
        if( have_rows('секция_2') ):
        while ( have_rows('секция_2') ) : the_row();?>
        <li>
          <img alt="иконка" src="<?php the_sub_field('иконка');?>" />
          <div>
            <h4><?php the_sub_field('число');?></h4>
            <p><?php the_sub_field('описание');?></p>
          </div>
        </li>
            <? endwhile;
        else :
        endif;
        ?>
      </ul>
    </div>
  </section>

  <section class="video">
    <div class="container">
      <div class="video__left">
        <?php
        $section3 = get_field('секция_3');
        if( $section3 ): ?>
        <h2><?php echo $section3['заголовок']; ?></h2>
        <p><?php echo $section3['описание']; ?></p>

      </div>
        <?php echo $section3['видео']; ?>
      <?php endif; ?>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <?php
      if( have_rows('секция_4') ):
      while ( have_rows('секция_4') ) : the_row();?>
      <div  style="display: flex;flex-direction: column;">
        <div style="display: flex;flex-direction: row;">
          <h2><?php the_sub_field('заголовок');?></h2>
          <ul>
            <li>
              <div class="wrapper">
                <img src="<?php the_sub_field('иконка_1');?>" />
              </div>
              <p><?php the_sub_field('подзаголовок_1');?></p>
            </li>
            <li>
              <div class="wrapper">
                <img src="<?php the_sub_field('иконка_2');?>" />
              </div>
              <p><?php the_sub_field('подзаголовок_2');?></p>
            </li>
            <li>
              <div class="wrapper">
                <img src="<?php the_sub_field('иконка_3');?>" />
              </div>
              <p><?php the_sub_field('подзаголовок_3');?></p>
            </li>
          </ul>
        </div>
        <div>
          <div class="content">
            <?php the_sub_field('описание');?>
          </div>
          <div class="show-more">
            <span>Подробнее</span>
            <svg width="8" height="5" viewBox="0 0 8 5" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 1L4 4L7 1" stroke="url(#paint0_linear_1184:12960)"/>
              <defs>
                <linearGradient id="paint0_linear_1184:12960" x1="7" y1="2.50288" x2="1" y2="2.50288" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#AF1B1B"/>
                  <stop offset="1" stop-color="#E22222"/>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>

      </div>
    <? endwhile;
    else :

    endif;
    ?>
    </div>
  </section>

  <section class="office">
    <h2><?php echo get_field('заголовок_слайдера');?></h2>

    <div class="uk-position-relative container" tabindex="-1" uk-slider="center: true, finite: true">
      <ul class="uk-slider-items uk-grid">
        <?php
        if( have_rows('секция_5') ):
        while ( have_rows('секция_5') ) : the_row();?>
        <li class="uk-width-1-2@m link_a">
          <a  data-src="<?php the_sub_field('изображение');?>" data-fancybox="gallery" href="#">
            <img src="<?php the_sub_field('изображение');?>" />
          </a>
        </li>
      <? endwhile;
      else :

      endif;
      ?>
      </ul>

      <a class="nav uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slider-item="previous">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="24" fill="url(#paint0_linear_1172:8538)"/>
          <path d="M31.8125 25.4985H17.7287L22.0394 30.676C22.2409 30.9185 22.3379 31.2312 22.309 31.5452C22.28 31.8592 22.1275 32.1488 21.885 32.3504C21.6425 32.552 21.3298 32.6489 21.0158 32.62C20.7018 32.591 20.4122 32.4385 20.2106 32.196L14.2731 25.071C14.2332 25.0143 14.1975 24.9548 14.1662 24.8929C14.1662 24.8335 14.1663 24.7979 14.0831 24.7385C14.0293 24.6024 14.0011 24.4574 14 24.311C14.0011 24.1646 14.0293 24.0197 14.0831 23.8835C14.0831 23.8241 14.0831 23.7885 14.1662 23.7291C14.1975 23.6672 14.2332 23.6077 14.2731 23.551L20.2106 16.426C20.3223 16.292 20.4621 16.1842 20.6201 16.1103C20.7782 16.0364 20.9505 15.9982 21.125 15.9985C21.4025 15.998 21.6714 16.0946 21.885 16.2716C22.0052 16.3713 22.1046 16.4938 22.1775 16.6319C22.2504 16.7701 22.2952 16.9213 22.3096 17.0768C22.3239 17.2323 22.3074 17.3892 22.2611 17.5383C22.2147 17.6875 22.1394 17.826 22.0394 17.946L17.7287 23.1235H31.8125C32.1274 23.1235 32.4295 23.2486 32.6522 23.4713C32.8749 23.694 33 23.9961 33 24.311C33 24.626 32.8749 24.928 32.6522 25.1507C32.4295 25.3734 32.1274 25.4985 31.8125 25.4985Z" fill="white"/>
          <defs>
            <linearGradient id="paint0_linear_1172:8538" x1="48" y1="24.0461" x2="2.11507e-07" y2="24.0461" gradientUnits="userSpaceOnUse">
              <stop stop-color="#AF1B1B"/>
              <stop offset="1" stop-color="#E22222"/>
            </linearGradient>
          </defs>
        </svg>
      </a>
      <a class="nav uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slider-item="next">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="24" transform="rotate(-180 24 24)" fill="url(#paint0_linear_1172:8538)"/>
          <path d="M16.1875 22.5015L30.2713 22.5015L25.9606 17.324C25.7591 17.0815 25.6621 16.7688 25.691 16.4548C25.72 16.1408 25.8725 15.8512 26.115 15.6496C26.3575 15.448 26.6702 15.3511 26.9842 15.38C27.2982 15.409 27.5878 15.5615 27.7894 15.804L33.7269 22.929C33.7668 22.9857 33.8025 23.0452 33.8338 23.1071C33.8338 23.1665 33.8337 23.2021 33.9169 23.2615C33.9707 23.3976 33.9989 23.5426 34 23.689C33.9989 23.8354 33.9707 23.9803 33.9169 24.1165C33.9169 24.1759 33.9169 24.2115 33.8338 24.2709C33.8025 24.3328 33.7668 24.3923 33.7269 24.449L27.7894 31.574C27.6777 31.708 27.5379 31.8158 27.3799 31.8897C27.2218 31.9636 27.0495 32.0018 26.875 32.0015C26.5975 32.002 26.3286 31.9054 26.115 31.7284C25.9948 31.6287 25.8954 31.5062 25.8225 31.3681C25.7496 31.2299 25.7048 31.0787 25.6904 30.9232C25.6761 30.7677 25.6926 30.6108 25.7389 30.4617C25.7853 30.3125 25.8606 30.174 25.9606 30.054L30.2713 24.8765L16.1875 24.8765C15.8726 24.8765 15.5705 24.7514 15.3478 24.5287C15.1251 24.306 15 24.0039 15 23.689C15 23.374 15.1251 23.072 15.3478 22.8493C15.5705 22.6266 15.8726 22.5015 16.1875 22.5015Z" fill="white"/>
          <defs>
            <linearGradient id="paint0_linear_1172:8538" x1="48" y1="24.0461" x2="2.11507e-07" y2="24.0461" gradientUnits="userSpaceOnUse">
              <stop stop-color="#AF1B1B"/>
              <stop offset="1" stop-color="#E22222"/>
            </linearGradient>
          </defs>
        </svg>
      </a>
    </div>
  </section>

  <section class="feedback">
    <div class="container">
        <?php
        $section6 = get_field('секция_6');
        if( $section6 ): ?>
        <img class="feedback__left" src="<?php echo $section6['изображение']; ?>" />
        <div class="feedback__right">
          <h2><?php echo $section6['заголовок']; ?></h2>
          <p><?php echo $section6['описание']; ?></p>
        <?php endif; ?>
        <?php echo do_shortcode('[contact-form-7 id="15" title="Контактная форма 1"]');?>
      </div>
    </div>
  </section>

  <section class="partners">
    <div>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
      <?php
      if( have_rows('секция_7') ):
      while ( have_rows('секция_7') ) : the_row();?>
        <img src="<?php the_sub_field('лого');?>" />
      <? endwhile;
      else :
      endif;
      ?>
    </div>
  </section>
</main>


<?php get_footer();
