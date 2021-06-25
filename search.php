<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

		<main class="page">
			<div class="container">

      <?php get_template_part('template-parts/sidebar-section');?> 

				<section class="main-page category">

				<?php get_template_part('template-parts/breadcrumb-bascet');?>

			<h1>Результаты поиска</h1>

			<div class="main-page__promo d-flex">

				<?php
				while(have_posts()):
					the_post();
					get_template_part('template-parts/product-elem');  
				endwhile;
				?>

			</div>

			<?php if ( function_exists( 'wp_corenavi' ) ) wp_corenavi(); ?>

		</div>
	</section>
	</div>
</main>

<?php get_footer();