<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

		<main class="page">
			<div class="container">

      <?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page category content">

				<?php get_template_part('template-parts/breadcrumb-bascet');?>

					<div class = "contentInPage centrElem">	 
							<h1 class = "h404">404 Запрашиваемая страница не была найдена</h1>
					</div>

				</section>
			</div>
		</main>

<?php get_footer(); 