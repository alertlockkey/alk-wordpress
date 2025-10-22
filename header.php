<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>
<body <?php body_class('landing is-preload'); ?>>

  <!-- Page Wrapper -->
  <div id="page-wrapper">

    <!-- Header -->
    <header id="header" class="alt">
      <h1><a href="<?php echo esc_url(home_url('/')); ?>">Alert Lock & Key</a></h1>

      <nav id="nav">
        <ul>
          <li class="special">
            <a href="#menu" class="menuToggle"><span>Menu</span></a>
            <div id="menu">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
                'items_wrap' => '<ul>%3$s</ul>',
              ));
              ?>
            </div>
          </li>
        </ul>
      </nav>
    </header>
