<section id="sidebar" class="sidebar">
  <div class="sidebar__bg"></div>
  <div class="s-wrap">
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

    <div class="sidebar__menu-center">
      <?php wp_nav_menu( array('theme_location' => 'menu_footer','menu_class' => 'sidebar__menu-center_center',
				'container_class' => 'sidebar__menu-center_center','container' => false )); 
			?> 
    </div> 

    <div class="sidebar__social d-flex">
      <a href="<? echo carbon_get_theme_option("as_insta"); ?>" class="sidebar__social-icon social__icon-1"></a>
      <a href="<? echo carbon_get_theme_option("as_vk"); ?>" class="sidebar__social-icon social__icon-2"></a>
      <a href="<? echo carbon_get_theme_option("as_telegr"); ?>" class="sidebar__social-icon social__icon-3"></a> 
      <a href="<? echo carbon_get_theme_option("as_whatsapp"); ?>" class="sidebar__social-icon social__icon-4"></a>
    </div>
  </div>
</section>