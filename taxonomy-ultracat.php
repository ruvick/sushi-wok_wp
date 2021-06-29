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
				<?php $termID =  get_queried_object()->term_id;// - динамическое получение ID текущей рубрики
					$taxonomyName = "ultracat";
					$termchildren = get_term_children( $termID, $taxonomyName );

						foreach ($termchildren as $child) {
							$term = get_term_by( 'id', $child, $taxonomyName );
								echo '<a href="' . get_term_link( $term->term_id, $term->taxonomy ) . '" class="main-page__btn btn <?php echo $class; ?>">' . $term->name . '</a>';
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