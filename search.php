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

<?
				// $arg = $wp_query->query;

				//$arg['relation']  = 'OR';
				//$arg['title']  = "%Торфотаблетка%";
				
				


 				$metaquery = array(

					'relation' => 'AND',
					'searchFild' => array (
						'relation' => 'OR',
						'tqAll' => array(
							'key'     => '_offer_allsearch',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqSku' => array(
							'key'     => '_offer_sku',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqDescr' => array(
							'key'     => '_offer_smile_descr',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						),

						'tqDescr' => array(
							'key'     => '_offer_name',
							'value' => $_REQUEST["s"],
							'compare' => 'LIKE',
							'type'    => 'CHAR',
						)
						
					),
						
					'pricenz' => array (
							'key'     => '_offer_price',
							'value' => 0,
							'compare' => '!=',
							'type'    => 'DECIMAL(9,2)',
						)

					
					
				); 

				$arg['post_type']  = 'agriproduct';
				$arg['posts_per_page'] = -1;
				$arg['meta_query'] = $metaquery;
				
			
				$queryM = new WP_Query($arg);
				// echo "<pre>";
				// print_r($queryM);
				// echo "</pre>";
			?>

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