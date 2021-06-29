<header id="header" class="header">
	<div class="header__container container">

		<div class="header__row d-flex">

			<div class="logo-block d-flex">
				<a href="http://dostavka-eisk.ru" class="header__logo logo-icon"></a>

				<div class="logo-block__contact d-flex">
					<a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>"><? echo $tel = carbon_get_theme_option("as_phones_1"); ?></a>
					<p><?php echo carbon_get_theme_option('as_schedule') ?></p>
				</div>
			</div>

			<div class="header__nav-block">

				<div class="header__search search">
					<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>">
						<input type="text" placeholder="Поиск" class="search__input input" value="<?php echo get_search_query() ?>" name="s" id="s">
						<button type="submit" tabindex="2" id="searchsubmit" class="sub-search" value=""></button> 
					</form>
				</div>
				<button class="mob-search"></button>

				<div class="header__menu menu">
					<nav class="menu__body">
						<?php wp_nav_menu( array('theme_location' => 'menu_header','menu_class' => 'menu__list',
							'container_class' => 'menu__list','container' => false )); 
						?> 
					</nav>
					<nav class="mob-menu">
						<?php get_template_part('template-parts/sidebar-menu-top');?>
						<?php wp_nav_menu( array('theme_location' => 'menu_header','menu_class' => 'mob-menu__list',
							'container_class' => 'mob-menu__list','container' => false )); 
						?> 
					</nav>
				</div>

				<a href="<?php echo get_permalink(79);?>" class="bascket-icon"><span class="bascket-icon__number bascet_counter">0</span></a>

				<div class="menu__icon icon-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>

		</div>

	</div>
</header>