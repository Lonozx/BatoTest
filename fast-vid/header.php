<!-- Все php функции которые вы видите тут стирать нельзя, иначе всё может поломаться -->

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <?php wp_head(); ?>
</head>

<!-- Функция body_class нужна чтоб wordpress мог контролировать классы для тега body, 
 её удалять нельзя. Если нужно чтоб изначально висел какой-то ваш класс на body то
 передайте эти классы в эту функцию строкой через пробелы, 
 например вот так: body_class('body-class, body-opened');  -->

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header>
        <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/Logo-AIE 1.png" alt="">
        <div class="menu-section">
          <?php wp_nav_menu( array(
            'menu'              => 'mainmenu', 
	'menu_class'        => 'menu',
	'menu_id'           => '', 
	'container'         => false, 
	'container_class'   => '', 
	'container_id'      => '', 
	'fallback_cb'       => 'wp_page_menu', 
	'before'            => '',
	'after'             => '', 
	'link_before'       => '', 
	'link_after'        => '', 
	'echo'              => true,
	'depth'             => 2, 
	'walker'            => '', 
	'theme_location'    => '', 
	'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'item_spacing'      => 'preserve',
          ) )?>
          
          <span class="hum">≡</span>
        <!-- <ul class="menu">
<li class="poppins-semibold">Menu</li>
<li class="poppins-semibold">Menu</li>
<li class="poppins-semibold">Menu</li>
<li class="poppins-semibold">Menu</li>

        </ul> -->
        <div class="phone">
            <img src="<?php echo get_template_directory_uri() ?>/images/phone.svg" alt="">
            <span class="poppins-semibold">0596 76 38 18</span>
        </div>
    </div>
    </header>