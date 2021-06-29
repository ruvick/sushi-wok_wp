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

				<?php get_template_part('template-parts/breadcrumb-bascet');?>

					<div class="main-page__prod-row d-flex">

						<div class="slider main-page__prod-img">
							<?
								$pict = carbon_get_the_post_meta('offer_picture');
								if($pict) {
									$pictIndex = 0;
								foreach($pict as $item) {
							?>
								<div class="slider__item">
									<img
										id = "pict-<? echo empty($item['gal_img_sku'])?$pictIndex:$item['gal_img_sku']; ?>" 
										alt = "<? echo $item['gal_img_alt']; ?>"
										title = "<? echo $item['gal_img_alt']; ?>"
										src = "<?php echo wp_get_attachment_image_src($item['gal_img'], 'full')[0];?>" />
								</div>
							<?
									$pictIndex++;
									}
								}
							?>
						</div>

						<div class="main-page__prod-charect d-flex">
							<h1><? the_title();?></h1>

							<div class="charect-block">
								<p><?echo carbon_get_post_meta(get_the_ID(),"offer_number"); ?> шт / <?echo carbon_get_post_meta(get_the_ID(),"offer_weight"); ?> г</p>
								<p><?echo carbon_get_post_meta(get_the_ID(),"prod_descrip"); ?></p>
								
								<? $calor = carbon_get_post_meta(get_the_ID(),"offer_calories");	
									if (!empty($calor)) { ?>
								<h5>Пищевая ценность 1 порции:</h5>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Калории</div>
									<div class="charect-block__string-r"><? echo $calor; ?> ккал</div>
								</div>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Белки</div>
									<div class="charect-block__string-r"><?echo carbon_get_post_meta(get_the_ID(),"offer_protein"); ?> г</div>
								</div>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Углеводы</div>
									<div class="charect-block__string-r"><?echo carbon_get_post_meta(get_the_ID(),"offer_fats"); ?> г</div>
								</div>

								<div class="charect-block__string d-flex">
									<div class="charect-block__string-l">Жиры</div>
									<div class="charect-block__string-r"><?echo carbon_get_post_meta(get_the_ID(),"offer_carbohyd"); ?> г</div>
								</div>
								<? } ?>
							</div>

							<div class="charect-block__choose d-flex">
								<div class="charect-block__price rub"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?></div>
								<div class="number d-flex">
									<span class="plus">+</span>
									<input type="text" value="1" size="5" />
									<span class="minus">-</span>
								</div>
								<button class="charect-block__btn btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
									data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
									data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
									data-size = ""
  								data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>"  
  								data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  								data-name = "<? echo  get_the_title();?>"
  								data-count = "1"
  								data-picture = "<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">В корзину</button>
							</div>

						</div>

					</div>

					<h2>Вам может понравится</h2>

					<div class="prod-card d-flex">

					<?
							$args = array(
							'posts_per_page' => 8,
							'post_type' => 'ultra',
							'tax_query' => array(
								array(
									'taxonomy' => 'ultracat',
									'field' => 'id',
									'terms' => 'ultracat',
									)
								)
							);
							$query = new WP_Query($args);

								foreach( $query->posts as $post ){
								$query->the_post();
								get_template_part('template-parts/product-elem');
							}  
							wp_reset_postdata();
						?>

					</div>

				</section>

			</div>
		</main>


<?php get_footer();