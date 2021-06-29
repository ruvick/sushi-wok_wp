<section id="sidebar" class="sidebar">
  <div class="sidebar__bg"></div>
  <div class="s-wrap">
    <?php get_template_part('template-parts/sidebar-menu-top');?>
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