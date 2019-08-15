<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Santehsvit
 */

?>
<!doctype html>
<!--
  SITE WAS MADY BY VADIM KALAIDA!!!
  EmySaf
-->
<html <?php language_attributes(); ?>>
<head>
  <!--
  SITE WAS MADY BY VADIM KALAIDA!!!
  EmySaf
-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css" integrity="sha256-PF6MatZtiJ8/c9O9HQ8uSUXr++R9KBYu4gbNG5511WE=" crossorigin="anonymous" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header" style="background: url('<?php echo get_theme_mod('header_bg'); ?>'); background-repeat: no-repeat;
    background-size: cover;
    background-position: center;" id="header">
  <div class="header_container">

    <div class="navbar">
      <div class="navbar_container">
        <div class="navbar_left">
          <a href="<?php echo home_url(); ?>" class="navbar_left-link">Сан<span>тех</span>світ</a>
        </div>
        <div class="navbar_right">
          <ul class="navbar_navigation">
            <li class="navbar_navigation-list"><a href="<?php echo home_url(); ?>" class="navbar_navigation-link">Головна</a></li>
            <li class="navbar_navigation-list"><a href="#goodat" class="navbar_navigation-link"><?php echo get_theme_mod('goodat_headline'); ?></a></li>
            <li class="navbar_navigation-list"><a href="#products" class="navbar_navigation-link"><?php echo get_theme_mod('products_headline'); ?></a></li>
            <li class="navbar_navigation-list"><a href="#team" class="navbar_navigation-link"><?php echo get_theme_mod('team_headline'); ?></a></li>
            <li class="navbar_navigation-list"><a href="#contact" class="navbar_navigation-link"><?php echo get_theme_mod('contact_headline'); ?></a></li>
          </ul>
        </div>
      </div>
    </div>

    <h1 class="header-headline" style="color: <?php echo get_theme_mod('header_headline_color'); ?>;"><?php echo get_theme_mod('header_headline'); ?></h1>
    <h3 class="header-underheadline" style="color: <?php echo get_theme_mod('header_under_headline_text_color'); ?>;"><?php echo get_theme_mod('header_under_headline_text') ;?></h3>
    <a href="#goodat" style="color: <?php echo get_theme_mod('header_button_text_color'); ?>; background: <?php echo get_theme_mod('header_button_bg'); ?>;" class="header-btn">Почати Зараз</a>
  </div>
</header>

