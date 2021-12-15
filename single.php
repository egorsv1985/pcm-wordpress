<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PCM
 */

get_header();
?>

<main class="main">
  <section class="article">
		<?php
		$image = get_field('банер');
		if( !empty( $image ) ): ?>
		  <img class="article__top" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
    <div class="container">
			<span class="article__date"><?php echo get_the_date(); ?></span>
      <h1 class="article__title"><?php echo the_title(); ?></h1>
      <div class="article__content">
				<?php the_content(); ?>
			</div>
    </div>
  </section>

  <section class="moreArticles">
    <div class="container">
      <h2>Больше статей</h2>
			<ul>
				<?php
					query_posts( 'cat=2&posts_per_page=3');
					if( have_posts() ){
						while( have_posts() ){
							the_post();
							?>
							<li class="article">
								<a href="<?php echo the_permalink(); ?>">
									<?php echo get_the_post_thumbnail(); ?>
									<div class="article__info">
										<span class="article__info_date"><?php echo the_date(); ?></span>
										<p><?php the_title(); ?></p>
										<span class="article__info_link">
											Узнать больше
											<svg width="16" height="8" viewBox="0 0 16 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.3536 4.35355C15.5488 4.15829 15.5488 3.84171 15.3536 3.64645L12.1716 0.464466C11.9763 0.269204 11.6597 0.269204 11.4645 0.464466C11.2692 0.659728 11.2692 0.976311 11.4645 1.17157L14.2929 4L11.4645 6.82843C11.2692 7.02369 11.2692 7.34027 11.4645 7.53553C11.6597 7.7308 11.9763 7.7308 12.1716 7.53553L15.3536 4.35355ZM0 4.5H15V3.5H0V4.5Z" fill="url(#paint0_linear)"/>
												<defs>
													<linearGradient id="paint0_linear" x1="-5.58793e-08" y1="4.5" x2="15" y2="4.5" gradientUnits="userSpaceOnUse">
														<stop stop-color="#E22222"/>
														<stop offset="1" stop-color="#AF1B1B"/>
													</linearGradient>
												</defs>
											</svg>
										</span>
									</div>
								</a>
							</li>

							<?php }
						}
						else {
							echo 'Записей нет';
						}
					?>
			</ul>
    </div>
  </section>
</main>

<?php
get_footer();
