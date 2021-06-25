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
						<div class="sidebar__menu-top">
							<ul class="sidebar__menu-open">
								<li class="sidebar__menu-icon sidebar__menu-top-icon-1">Суши и роллы</li>
								<ul class="sidebar__submenu">
									<li><a href="">Роллы</a></li>
									<li><a href="">Суши</a></li>
									<li><a href="">Бургеры</a></li>
									<li><a href="">Вок</a></li>
									<li><a href="">Лапша</a></li>
								</ul>
							</ul>
							<ul class="sidebar__menu-open">
								<li class="sidebar__menu-icon sidebar__menu-top-icon-2">Пица</li>
								<ul class="sidebar__submenu">
									<li><a href="">Роллы</a></li>
									<li><a href="">Суши</a></li>
									<li><a href="">Бургеры</a></li>
									<li><a href="">Вок</a></li>
									<li><a href="">Лапша</a></li>
								</ul>
							</ul>
							<ul class="sidebar__menu-open">
								<li class="sidebar__menu-icon sidebar__menu-top-icon-3">Закуски</li>
								<ul class="sidebar__submenu">
									<li><a href="">Роллы</a></li>
									<li><a href="">Суши</a></li>
									<li><a href="">Бургеры</a></li>
									<li><a href="">Вок</a></li>
									<li><a href="">Лапша</a></li>
								</ul>
							</ul>
							<ul class="sidebar__menu-open">
								<li class="sidebar__menu-icon sidebar__menu-top-icon-4">Вок, лапша</li>
								<ul class="sidebar__submenu">
									<li><a href="">Роллы</a></li>
									<li><a href="">Суши</a></li>
									<li><a href="">Бургеры</a></li>
									<li><a href="">Вок</a></li>
									<li><a href="">Лапша</a></li>
								</ul>
							</ul>
							<ul class="sidebar__menu-open">
								<li class="sidebar__menu-icon sidebar__menu-top-icon-5">Бургеры, шаурма</li>
								<ul class="sidebar__submenu">
									<li><a href="">Роллы</a></li>
									<li><a href="">Суши</a></li>
									<li><a href="">Бургеры</a></li>
									<li><a href="">Вок</a></li>
									<li><a href="">Лапша</a></li>
								</ul>
							</ul>
						</div>
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