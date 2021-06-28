<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

		<main class="page">
			<div class="container">

			<?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page">

					<div class="main-page__flex-block d-flex">
						<h1><? echo carbon_get_theme_option("about_home_title"); ?></h1> 
						<a href="<?php echo get_permalink(79);?>" class="main-page__bascet d-flex">
							<p class="main-page__bascet-link">Корзина</p>
							<span class="main-page__bascet-number bascet_counter">0</span>
						</a>
					</div> 

					<div class="main-page__promo d-flex">

					<?	$picts = carbon_get_theme_option('complex_promo');
								if($picts) {
							$pictsIndex = 0;
								foreach($picts as $items) {
					?>

						<a href="<? echo $items['link_promo']; ?>" class="main-page__promo-item main-page__promo-item_2"  style="background-image: url(<?php echo wp_get_attachment_image_src($items['img_promo'], 'full')[0];?>);"> 
							<h3><? echo $items['text_promo']; ?></h3>
							<? if ( !empty($items['sticker_promo'])) { ?>
								<p><? echo $items['sticker_promo']; ?></p>
							<? } ?>
						</a>

					<?
							$pictIndex++; 
	  					}
  					}
					?>

					</div>

					<h2>Популярные товары</h2>

					<div class="prod-card d-flex">
						<?
							$args = array(
							'posts_per_page' => 8,
							'post_type' => 'ultra',
							'tax_query' => array(
								array(
									'taxonomy' => 'ultracat',
									'field' => 'id',
									'terms' => array(3)
									)
								)
							);
							$query = new WP_Query($args);

								foreach( $query->posts as $post ){
								$query->the_post();
								get_template_part('template-parts/product-elem');
							}  
							wp_reset_postdata();
						?>
					</div>

				</section>

			</div>
		</main>

<?php get_footer(); ?> 