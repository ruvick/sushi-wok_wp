<?php

get_header(); ?>

<?php get_template_part('template-parts/header-section');?>

		<main class="page">
			<div class="container">

      <?php get_template_part('template-parts/sidebar-section');?>

				<section class="main-page category">

				<?php
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?> 
				<div class="text_blk">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<h1><?php the_title();?></h1>
							<?php the_content();?>
						<?php endwhile;?> 
					<?php endif; ?>
          </div>
        </section>
		</div>
	</main>

<?php get_footer();