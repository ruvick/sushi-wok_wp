<?php get_header(); ?> 

<?php get_template_part('template-parts/header-section');?>

		<main class="page">
			<div class="container">

      <?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page category">

				<?php get_template_part('template-parts/breadcrumb-bascet');?>

			<!-- Вывод заголовка -->
			<h1><?php single_cat_title( '', true );?></h1>

			<div class="main-page__filter d-flex">
			<?php
          $terms = get_terms(
            array(
							'child_of'     => $current_cat_id,
							'orderby'      => 'name',
							'order'        => 'ASC',
							'hide_empty'   => 1,
							'hierarchical' => 1,
							'number'       => 0,
            )
          );

					if ( ! empty( $terms ) && is_array( $terms ) ) {
						foreach ( $terms as $term ) {
								$curTerm = $wp_query->queried_object;
								$class = ( $term->name == $curTerm->name ) ? 'active' : '';
								?>
									<a href="<?php echo esc_url( get_term_link( $term ) ) ?>" class="main-page__btn btn <?php echo $class; ?>">
										<?php echo $term->name; ?>
									</a>
								<?php
						}
				}
        ?>
			</div>

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