<?php get_header(); ?>

<?php get_template_part('template-parts/header-section');?> 

		<main class="page">
			<div class="container">

			<?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page">

					<div class="main-page__flex-block d-flex">
						<h1>Доставка пиццы и ролов в Ейске</h1>
						<a href="#" class="main-page__bascet d-flex">
							<p class="main-page__bascet-link">Корзина</p>
							<span class="main-page__bascet-number bascet_counter">0</span>
						</a>
					</div> 

					<div class="main-page__promo d-flex">

						<div class="main-page__promo-item main-page__promo-item_1">
							<h3>
								При покупке <br>
								от 800 рублей <br>
								Вы получаете <br>
								РОЛЫ В ПОДАРОК
							</h3>
						</div>

						<div class="main-page__promo-item main-page__promo-item_2">
							<h3>
								У Вас сегодня <br>
								День Рождения? <br>
								Мы дарим скидку <br>
							</h3>
							<p>15% на все!</p>
						</div>

						<div class="main-page__promo-item main-page__promo-item_3">
							<h3>
								При покупке <br>
								от 1000 рублей <br>
								Вы получаете <br>
								ПИЦУ В ПОДАРОК
							</h3>
						</div>

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