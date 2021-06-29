<div class="sidebar__menu-top">
      <ul class="sidebar__menu-open">
        <li class="sidebar__menu-icon sidebar__menu-top-icon-1">Суши и роллы</li>
        <ul class="sidebar__submenu">
        <?php
          $terms = get_terms(
            array(
              'taxonomy'   => 'ultracat',
              'child_of' => 6,
              'hide_empty' => true,
              'pad_counts'  => true, 
              'orderby' => 'count',
              'order' => 'ASC',
            )
          );
  
          if ( ! empty( $terms ) && is_array( $terms ) ) {
            foreach ( $terms as $term ) { ?>
              <li>
                <a href="<?php echo esc_url( get_term_link( $term ) ) ?>">
                  <?php echo $term->name; ?>
                </a>
              </li>
              <?php
            }
          }
        ?>
          <li><a href="<?php echo get_category_link(6);?>">Показать все</a></li>
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
          <li><a href="<?php echo get_category_link(8);?>">Показать все</a></li>
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
          <li><a href="<?php echo get_category_link(13);?>">Показать все</a></li>
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
          <li><a href="<?php echo get_category_link(10);?>">Показать все</a></li>
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
          <li><a href="<?php echo get_category_link(19);?>">Показать все</a></li>
        </ul>
      </ul>
    </div>