<div class="main-page__flex-block d-flex">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
	?> 
	<a href="<?php echo get_permalink(79);?>" class="main-page__bascet d-flex">
		<p class="main-page__bascet-link">Корзина</p>
			<span class="main-page__bascet-number bascet_counter">0</span>
	</a>
</div>