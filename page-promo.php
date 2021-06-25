<?php
/*
Template Name: Шаблон страницы Акции
WP Post Template: Шаблон страницы Акции
Template Post Type: page
*/

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

<main class="page">
	<div class="container">

  <?php get_template_part('template-parts/sidebar-section');?>

  <section class="main-page category">

					<div class="main-page__flex-block d-flex">
					<?php
						if ( function_exists('yoast_breadcrumb') ) {
							yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
					?> 
						<a href="#" class="main-page__bascet d-flex">
							<p class="main-page__bascet-link">Корзина</p>
							<span class="main-page__bascet-number bascet_counter">0</span>
						</a>
					</div>

					<h1>Акции</h1>

					<div class="promo-block main-page__promo d-flex">

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

						<div class="main-page__promo-item main-page__promo-item_4">
							<h3>
								При покупке <br>
								любого сета <br>
								НАПИТОК <br>
								В ПОДАРОК
							</h3>
						</div>

						<div class="main-page__promo-item main-page__promo-item_5">
							<p>НОВИНКА!</p>
							<h3>
								Летние <br>
								десерты
							</h3>
						</div>

						<div class="main-page__promo-item main-page__promo-item_6">
							<p>НОВИНКА!</p>
							<h3>
								Ролл <br>
								ГУРМАН
							</h3>
						</div>

					</div>

				</section>

		</div>
	</main>

<?php get_footer(); 
