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

						<div class="prod-card__body d-flex">
							<span class="prod-card__sale">HIT</span>
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

<?php get_footer(); ?> 