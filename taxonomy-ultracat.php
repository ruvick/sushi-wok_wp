<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

		<main class="page">
			<div class="container">

      <?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page category">

					<div class="main-page__flex-block d-flex">
						<p id="breadcrumbs"><span><span><a href="#">Главная</a> / <span><a href="#">Все
											товары</a> / <span class="breadcrumb_last" aria-current="page">Суши и
											ролы</span></span></span></span></p>
						<a href="#" class="main-page__bascet d-flex">
							<p class="main-page__bascet-link">Корзина</p>
							<span class="main-page__bascet-number">1</span>
						</a>
					</div>

			<!-- Вывод заголовка -->
			<h1><?php single_cat_title( '', true );?></h1>

			<div class="prod-card d-flex">

				<!-- Вывод записей таксономии -->
				<?php
				while(have_posts()):
					the_post();
					get_template_part('template-parts/product-elem');  
				endwhile;
				?>

			</div>

			<!-- Пагинация -->
			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>


			</section>
	</div>
</main>

<?php get_footer(); ?>  