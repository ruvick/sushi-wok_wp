<?php get_header(); ?> 

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
							<span class="main-page__bascet-number">1</span>
						</a>
					</div>

					<h1>Суши и ролы</h1>

					<div class="main-page__filter d-flex">
						<button class="main-page__btn btn">Сеты</button>
						<button class="main-page__btn btn">Горячие ролы</button>
						<button class="main-page__btn btn">Ролы с овощами</button>
					</div>

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

<?php get_footer(); ?>   