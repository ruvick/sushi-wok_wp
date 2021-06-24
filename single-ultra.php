<?php

/*
Template Name: Шаблон карточки товаров
WP Post Template: Шаблон карточки товаров
Template Post Type: post
*/ 

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

		<main class="page">
			<div class="container">

      <?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page">

					<div class="main-page__flex-block d-flex">
					<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
						<a href="#" class="main-page__bascet d-flex">
							<p class="main-page__bascet-link">Корзина</p>
							<span class="main-page__bascet-number">1</span>
						</a>
					</div>

					<div class="main-page__prod-row d-flex">

						<div class="slider main-page__prod-img">
							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/slider-product/01.jpg" alt="">
							</div>
							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/slider-product/02.jpg" alt="">
							</div>
							<div class="slider__item">
								<img src="<?php echo get_template_directory_uri();?>/img/slider-product/03.jpg" alt="">
							</div>
						</div>

						<div class="main-page__prod-charect d-flex">
							<h1>Филадельфия классик</h1>

							<div class="charect-block">
								<p>8 шт / 290 г</p>
								<p>Сливочный сыр, лосось</p>
								<h5>Пищевая ценность 1 порции:</h5>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Калории</div>
									<div class="charect-block__string-r">381 ккал</div>
								</div>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Белки</div>
									<div class="charect-block__string-r">22 г</div>
								</div>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Углеводы</div>
									<div class="charect-block__string-r">35 г</div>
								</div>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Жиры</div>
									<div class="charect-block__string-r">16 г</div>
								</div>
							</div>

							<div class="charect-block__choose d-flex">
								<div class="charect-block__price rub">350</div>
								<div class="number d-flex">
									<span class="plus">+</span>
									<input type="text" value="1" size="5" />
									<span class="minus">-</span>
								</div>
								<button class="charect-block__btn btn">В корзину</button>
							</div>


						</div>

					</div>

					<h2>Вам может понравится</h2>

					<div class="prod-card d-flex">

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Вок удон с куриной грудкой
										в ароматном соусе
									</h4>
									<span>350 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/02.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Калифорния с крабом
									</h4>
									<span>220 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Калифорния с крабом
									</h4>
									<span>220 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/01.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Калифорния с крабом
									</h4>
									<span>220 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/05.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Вок удон с куриной грудкой
										в ароматном соусе
									</h4>
									<span>350 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/06.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Вок удон с куриной грудкой
										в ароматном соусе
									</h4>
									<span>350 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/07.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Вок удон с куриной грудкой
										в ароматном соусе
									</h4>
									<span>350 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

						<div class="prod-card__body d-flex">
							<!-- <span class="prod-card__sale">-40%</span> -->
							<a href="#" class="prod-card__link">
								<img src="<?php echo get_template_directory_uri();?>/img/product/08.jpg" alt="">
							</a>
							<div class="prod-card__content">
								<div class="prod-card__text">
									<h4>
										Вок удон с куриной грудкой
										в ароматном соусе
									</h4>
									<span>350 г.</span>
									<p>
										Рис, лосось, мясо краба, огурец, соус
										калифорния, нори.
									</p>
								</div>
								<div class="prod-card__btn-block d-flex">
									<p class="prod-card__price rub">350</p>
									<button class="btn">В корзину</button>
								</div>
							</div>
						</div>

					</div>

				</section>

			</div>
		</main>


<?php get_footer();