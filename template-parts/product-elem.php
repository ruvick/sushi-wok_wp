<div class="prod-card__body d-flex">
	<? $sticker = carbon_get_post_meta(get_the_ID(),"offer_sticker");
    	if (!empty($sticker)) {?>
		<span class="prod-card__sale"><?echo $sticker;?></span>
		<?}?>
	<a href="<?echo get_the_permalink(get_the_ID());?>" class="prod-card__link">
		<img src="<?php  $imgTm = get_the_post_thumbnail_url( get_the_ID(), "tominiatyre" ); echo empty($imgTm)?get_bloginfo("template_url")."/img/no-photo.jpg":$imgTm; ?>" alt="<? the_title();?>">
	</a>
	<div class="prod-card__content">
		<div class="prod-card__text">
			<h4><? the_title();?></h4>
			<span><?echo carbon_get_post_meta(get_the_ID(),"offer_weight"); ?> г.</span>
			<p><?echo carbon_get_post_meta(get_the_ID(),"offer_smile_descr"); ?></p>
		</div>
		<div class="prod-card__btn-block d-flex">
			<p class="prod-card__price rub"><?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?></p>
			<button class="btn" id = "btn__to-card" onclick = "add_tocart(this, 0); return false;"
  			data-price = "<?echo carbon_get_post_meta(get_the_ID(),"offer_price"); ?>"
				data-sku = "<? echo carbon_get_post_meta(get_the_ID(),"offer_sku")?>"
				data-size = ""
  			data-oldprice = "<? echo carbon_get_post_meta(get_the_ID(),"offer_old_price")?>" 
  			data-lnk = "<? echo  get_the_permalink(get_the_ID());?>"
  			data-name = "<? echo  get_the_title();?>"
  			data-count = "1"
  			data-picture = "<?php echo wp_get_attachment_image_src($imgTm['gal_img'], 'large')[0];?>">В корзину</button>
		</div>
	</div>
</div>
	



