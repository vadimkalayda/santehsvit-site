<?php
/**
 * Santehsvit Theme Customizer
 *
 * @package Santehsvit
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function santehsvit_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'santehsvit_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'santehsvit_customize_partial_blogdescription',
		) );
	}


  //HEADER

  $wp_customize->add_section( 'header_section' , array(
    'title'      => __( 'HEADER SECTION', 'santehsvit' ),
    'priority'   => 30,
  ) );
	//HEADER(background image)
  $wp_customize->add_setting( 'header_bg' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_bg', array(
    'label'      => __( 'Background Image', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_bg',
  ) ) );
  //HEADER(headline)
  $wp_customize->add_setting( 'header_headline' , array(
    'default'   => 'Сантехсвіт',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_headline', array(
    'label'      => __( 'Headline', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_headline',
  ) ) );
  //HEADER(headline color)
  $wp_customize->add_setting( 'header_headline_color' , array(
    'default'   => '#def9f9',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_headline_color', array(
    'label'      => __( 'Headline Color', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_headline_color',
  ) ) );
  //HEADER(under headline text)
  $wp_customize->add_setting( 'header_under_headline_text' , array(
    'default'   => 'Забудьте про великі ціни та погану сантехніку!',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_under_headline_text', array(
    'label'      => __( 'Text Under Site Name', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_under_headline_text',
  ) ) );
  //HEADER(under headline text color)
  $wp_customize->add_setting( 'header_under_headline_text_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_under_headline_text_color', array(
    'label'      => __( 'Text Under Site Name Color', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_under_headline_text_color',
  ) ) );
  //HEADER(button background)
  $wp_customize->add_setting( 'header_button_bg' , array(
    'default'   => '#1ABED2',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_button_bg', array(
    'label'      => __( 'Button Background Color', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_button_bg',
  ) ) );
  //HEADER(button text color)
  $wp_customize->add_setting( 'header_button_text_color' , array(
    'default'   => '#def9f9',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_button_text_color', array(
    'label'      => __( 'Button Text Color', 'santehsvit' ),
    'section'    => 'header_section',
    'settings'   => 'header_button_text_color',
  ) ) );


  //BUTTON TO TOP

  $wp_customize->add_section( 'btnup_section' , array(
    'title'      => __( 'BUTTON TO TOP', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //BUTTON TO TOP(background color)
  $wp_customize->add_setting( 'btnup_bg' , array(
    'default'   => '#1ABED2',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btnup_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'btnup_section',
    'settings'   => 'btnup_bg',
  ) ) );
  //BUTTON TO TOP(text)
  $wp_customize->add_setting( 'btnup_text' , array(
    'default'   => 'Up',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'btnup_text', array(
    'label'      => __( 'Text(max 3 symbols)', 'santehsvit' ),
    'section'    => 'btnup_section',
    'settings'   => 'btnup_text',
  ) ) );
  //BUTTON TO TOP(text)
  $wp_customize->add_setting( 'btnup_text_color' , array(
    'default'   => '#def9f9',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btnup_text_color', array(
    'label'      => __( 'Text Color', 'santehsvit' ),
    'section'    => 'btnup_section',
    'settings'   => 'btnup_text_color',
  ) ) );


  //SECTION 1 - GOODAT

  $wp_customize->add_section( 'goodat_section' , array(
    'title'      => __( 'SECTION 1 - GOODAT', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //SECTION 1 - GOODAT(background color)
  $wp_customize->add_setting( 'goodat_bg' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_bg',
  ) ) );
  //SECTION 1 - GOODAT(top icon)
  $wp_customize->add_setting( 'goodat_icon' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'goodat_icon', array(
    'label'      => __( 'Top Icon(size: 80 x 60)', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_icon',
  ) ) );
  //SECTION 1 - GOODAT(headline)
  $wp_customize->add_setting( 'goodat_headline' , array(
    'default'   => 'Переваги',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'goodat_headline', array(
    'label'      => __( 'Headline', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_headline',
  ) ) );
  //SECTION 1 - GOODAT(headline color)
  $wp_customize->add_setting( 'goodat_headline_color' , array(
    'default'   => '#172e5b',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_headline_color', array(
    'label'      => __( 'Headline Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_headline_color',
  ) ) );
  //SECTION 1 - GOODAT(under headline text)
  $wp_customize->add_setting( 'goodat_underheadline' , array(
    'default'   => 'Лише деякі з них:',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'goodat_underheadline', array(
    'label'      => __( 'Under Headline Text', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_underheadline',
  ) ) );
  //SECTION 1 - GOODAT(under headline text color)
  $wp_customize->add_setting( 'goodat_underheadline_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_underheadline_color', array(
    'label'      => __( 'Under Headline Text Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_underheadline_color',
  ) ) );
  //SECTION 1 - GOODAT(line color)
  $wp_customize->add_setting( 'goodat_line_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_line_color', array(
    'label'      => __( 'line Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_line_color',
  ) ) );
  //SECTION 1 - GOODAT(posts icon color)
  $wp_customize->add_setting( 'goodat_posts_icon_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_posts_icon_color', array(
    'label'      => __( 'Posts Icon Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_posts_icon_color',
  ) ) );
  //SECTION 1 - GOODAT(title color)
  $wp_customize->add_setting( 'goodat_posts_title_color' , array(
    'default'   => '#00c9fc',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_posts_title_color', array(
    'label'      => __( 'Posts Title Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_posts_title_color',
  ) ) );
  //SECTION 1 - GOODAT(text color)
  $wp_customize->add_setting( 'goodat_posts_text_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'goodat_posts_text_color', array(
    'label'      => __( 'Posts Text Color', 'santehsvit' ),
    'section'    => 'goodat_section',
    'settings'   => 'goodat_posts_text_color',
  ) ) );



  //SECTION 2 - PRODUCTS

  $wp_customize->add_section( 'products_section' , array(
    'title'      => __( 'SECTION 2 - PRODUCTS', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //SECTION 2 - PRODUCTS(background color)
  $wp_customize->add_setting( 'products_bg' , array(
    'default'   => '#eff7fa',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_bg',
  ) ) );
  //SECTION 2 - PRODUCTS(top icon)
  $wp_customize->add_setting( 'products_icon' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'products_icon', array(
    'label'      => __( 'Top Icon(size: 80 x 60)', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_icon',
  ) ) );
  //SECTION 2 - PRODUCTS(headline)
  $wp_customize->add_setting( 'products_headline' , array(
    'default'   => 'Товар',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'products_headline', array(
    'label'      => __( 'Headline', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_headline',
  ) ) );
  //SECTION 2 - PRODUCTS(headline color)
  $wp_customize->add_setting( 'products_headline_color' , array(
    'default'   => '#172e5b',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_headline_color', array(
    'label'      => __( 'Headline Color', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_headline_color',
  ) ) );
  //SECTION 2 - PRODUCTS(under headline text)
  $wp_customize->add_setting( 'products_underheadline' , array(
    'default'   => 'Лише маленька частина того, що ви можете у нас знайти:',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'products_underheadline', array(
    'label'      => __( 'Under Headline Text', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_underheadline',
  ) ) );
  //SECTION 2 - PRODUCTS(under headline text color)
  $wp_customize->add_setting( 'products_underheadline_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_underheadline_color', array(
    'label'      => __( 'Under Headline Text Color', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_underheadline_color',
  ) ) );
  //SECTION 2 - PRODUCTS(line color)
  $wp_customize->add_setting( 'products_line_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_line_color', array(
    'label'      => __( 'Line Color', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_line_color',
  ) ) );
  //SECTION 2 - PRODUCTS(posts hover color)
  $wp_customize->add_setting( 'products_hover_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_hover_color', array(
    'label'      => __( 'Hover Posts Color', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_hover_color',
  ) ) );
  //SECTION 2 - PRODUCTS(posts title color)
  $wp_customize->add_setting( 'products_title_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'products_title_color', array(
    'label'      => __( 'Posts Title Color', 'santehsvit' ),
    'section'    => 'products_section',
    'settings'   => 'products_title_color',
  ) ) );



  //SECTION 3 - CLIENTS

  $wp_customize->add_section( 'clients_section' , array(
    'title'      => __( 'SECTION 3 - CLIENTS', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //SECTION 3 - CLIENTS(background color)
  $wp_customize->add_setting( 'clients_bg' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'clients_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'clients_section',
    'settings'   => 'clients_bg',
  ) ) );


  //SECTION 4 - TEAM

  $wp_customize->add_section( 'team_section' , array(
    'title'      => __( 'SECTION 4 - TEAM', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //SECTION 4 - TEAM(background color)
  $wp_customize->add_setting( 'team_bg' , array(
    'default'   => '#edf6f9',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_bg',
  ) ) );
  //SECTION 4 - TEAM(top icon)
  $wp_customize->add_setting( 'team_icon' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_icon', array(
    'label'      => __( 'Top Icon(size: 80 x 60)', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_icon',
  ) ) );
  //SECTION 4 - TEAM(headline)
  $wp_customize->add_setting( 'team_headline' , array(
    'default'   => 'Команда',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_headline', array(
    'label'      => __( 'Headline', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_headline',
  ) ) );
  //SECTION 4 - TEAM(headline color)
  $wp_customize->add_setting( 'team_headline_color' , array(
    'default'   => '#172e5b',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_headline_color', array(
    'label'      => __( 'Headline Color', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_headline_color',
  ) ) );
  //SECTION 4 - TEAM(under headline text)
  $wp_customize->add_setting( 'team_underheadline' , array(
    'default'   => 'Члени нашої дружньої команди:',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team_underheadline', array(
    'label'      => __( 'Under Headline Text', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_underheadline',
  ) ) );
  //SECTION 4 - TEAM(under headline text color)
  $wp_customize->add_setting( 'team_underheadline_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_underheadline_color', array(
    'label'      => __( 'Under Headline Text Color', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_underheadline_color',
  ) ) );
  //SECTION 4 - TEAM(line color)
  $wp_customize->add_setting( 'team_line_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_line_color', array(
    'label'      => __( 'Line Color', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_line_color',
  ) ) );
  //SECTION 4 - TEAM(img)
  $wp_customize->add_setting( 'team_img' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'team_img', array(
    'label'      => __( 'Large Image', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_img',
  ) ) );
  //SECTION 4 - TEAM(post title background)
  $wp_customize->add_setting( 'team_post_title_background' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_post_title_background', array(
    'label'      => __( 'Post Title Background', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_post_title_background',
  ) ) );
  //SECTION 4 - TEAM(post title color)
  $wp_customize->add_setting( 'team_post_title_color' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_post_title_color', array(
    'label'      => __( 'Post Title Color', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_post_title_color',
  ) ) );
  //SECTION 4 - TEAM(post text background)
  $wp_customize->add_setting( 'team_post_text_bg' , array(
    'default'   => '#ffffff',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_post_text_bg', array(
    'label'      => __( 'Post Text Background', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_post_text_bg',
  ) ) );
  //SECTION 4 - TEAM(post text color)
  $wp_customize->add_setting( 'team_post_text_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_post_text_color', array(
    'label'      => __( 'Post Text Color', 'santehsvit' ),
    'section'    => 'team_section',
    'settings'   => 'team_post_text_color',
  ) ) );



  //SECTION 5 - CONTACT

  $wp_customize->add_section( 'contact_section' , array(
    'title'      => __( 'SECTION 5 - CONTACT', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //SECTION 5 - CONTACT(background color)
  $wp_customize->add_setting( 'contact_bg' , array(
    'default'   => '#19283F',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bg',
  ) ) );
  //SECTION 5 - CONTACT(top icon)
  $wp_customize->add_setting( 'contact_icon' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'contact_icon', array(
    'label'      => __( 'Top Icon(size: 80 x 60)', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_icon',
  ) ) );
  //SECTION 5 - CONTACT(headline)
  $wp_customize->add_setting( 'contact_headline' , array(
    'default'   => 'Контакти',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_headline', array(
    'label'      => __( 'Headline', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_headline',
  ) ) );
  //SECTION 5 - CONTACT(headline color)
  $wp_customize->add_setting( 'contact_headline_color' , array(
    'default'   => '#dee8fc',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_headline_color', array(
    'label'      => __( 'Headline Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_headline_color',
  ) ) );
  //SECTION 5 - CONTACT(under headline text)
  $wp_customize->add_setting( 'contact_underheadline' , array(
    'default'   => 'Способи дістатись або зв\'язатись з нами:',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_underheadline', array(
    'label'      => __( 'Under Headline Text', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_underheadline',
  ) ) );
  //SECTION 5 - CONTACT(under headline text color)
  $wp_customize->add_setting( 'contact_underheadline_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_underheadline_color', array(
    'label'      => __( 'Under Headline Text Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_underheadline_color',
  ) ) );
  //SECTION 5 - CONTACT(line color)
  $wp_customize->add_setting( 'contact_line_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_line_color', array(
    'label'      => __( 'Line Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_line_color',
  ) ) );
  //SECTION 5 - CONTACT(map)
  $wp_customize->add_setting( 'contact_map' , array(
    'default'   => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2582.0914312954365!2d32.03436951570325!3d49.67141637937544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d6a561d8c89377%3A0x3fca52a765b431d6!2sMahazyn+Santekhsvit!5e0!3m2!1sen!2sua!4v1563698277927!5m2!1sen!2sua" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_map', array(
    'label'      => __( 'Map(embed code)', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_map',
  ) ) );
  //SECTION 5 - CONTACT(bottom left title)
  $wp_customize->add_setting( 'contact_bottom_left_title' , array(
    'default'   => 'Зв\'язок:',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_left_title', array(
    'label'      => __( 'Bottom Left Title', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_left_title',
  ) ) );
  //SECTION 5 - CONTACT(bottom left title color)
  $wp_customize->add_setting( 'contact_bottom_left_title_color' , array(
    'default'   => '#dee8fc',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_bottom_left_title_color', array(
    'label'      => __( 'Bottom Left Title Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_left_title_color',
  ) ) );
  //SECTION 5 - CONTACT(bottom phone numbers color)
  $wp_customize->add_setting( 'contact_bottom_phonenumbers_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_bottom_phonenumbers_color', array(
    'label'      => __( 'Bottom Left Phone Numbers Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_phonenumbers_color',
  ) ) );
  //SECTION 5 - CONTACT(bottom phone number1)
  $wp_customize->add_setting( 'contact_bottom_phonenumber1' , array(
    'default'   => '+380 67 786 8015',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_phonenumber1', array(
    'label'      => __( 'Bottom Left Phone Number 1', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_phonenumber1',
  ) ) );
  //SECTION 5 - CONTACT(bottom phone number2)
  $wp_customize->add_setting( 'contact_bottom_phonenumber2' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_phonenumber2', array(
    'label'      => __( 'Bottom Left Phone Number 2', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_phonenumber2',
  ) ) );
  //SECTION 5 - CONTACT(bottom phone number3)
  $wp_customize->add_setting( 'contact_bottom_phonenumber3' , array(
    'default'   => '',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_phonenumber3', array(
    'label'      => __( 'Bottom Left Phone Number 3', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_phonenumber3',
  ) ) );
  //SECTION 5 - CONTACT(bottom right title)
  $wp_customize->add_setting( 'contact_bottom_right_title' , array(
    'default'   => 'Графік роботи:',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_title', array(
    'label'      => __( 'Bottom Right Title', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_title',
  ) ) );
  //SECTION 5 - CONTACT(bottom right title color)
  $wp_customize->add_setting( 'contact_bottom_right_title_color' , array(
    'default'   => '#dee8fc',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_bottom_right_title_color', array(
    'label'      => __( 'Bottom Right Title Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_title_color',
  ) ) );
  //SECTION 5 - CONTACT(bottom days color)
  $wp_customize->add_setting( 'contact_bottom_days_color' , array(
    'default'   => '#acc7c7',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'contact_bottom_days_color', array(
    'label'      => __( 'Bottom Right Days Color', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_days_color',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day1)
  $wp_customize->add_setting( 'contact_bottom_right_day1' , array(
    'default'   => 'пн: 08:00–18:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day1', array(
    'label'      => __( 'Bottom Right Day1', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day1',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day2)
  $wp_customize->add_setting( 'contact_bottom_right_day2' , array(
    'default'   => 'вт: 08:00–18:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day2', array(
    'label'      => __( 'Bottom Right Day2', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day2',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day3)
  $wp_customize->add_setting( 'contact_bottom_right_day3' , array(
    'default'   => 'ср: 08:00–18:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day3', array(
    'label'      => __( 'Bottom Right Day3', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day3',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day4)
  $wp_customize->add_setting( 'contact_bottom_right_day4' , array(
    'default'   => 'чт: 08:00–18:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day4', array(
    'label'      => __( 'Bottom Right Day4', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day4',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day5)
  $wp_customize->add_setting( 'contact_bottom_right_day5' , array(
    'default'   => 'пт: 08:00–18:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day5', array(
    'label'      => __( 'Bottom Right Day5', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day5',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day6)
  $wp_customize->add_setting( 'contact_bottom_right_day6' , array(
    'default'   => 'пт: 08:00–16:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day6', array(
    'label'      => __( 'Bottom Right Day6', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day6',
  ) ) );
  //SECTION 5 - CONTACT(bottom right day7)
  $wp_customize->add_setting( 'contact_bottom_right_day7' , array(
    'default'   => 'пт: 08:00–14:00',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_bottom_right_day7', array(
    'label'      => __( 'Bottom Right Day7', 'santehsvit' ),
    'section'    => 'contact_section',
    'settings'   => 'contact_bottom_right_day7',
  ) ) );



  //SECTION 6 - FOOTER

  $wp_customize->add_section( 'footer_section' , array(
    'title'      => __( 'SECTION 6 - FOOTER', 'santehsvit' ),
    'priority'   => 30,
  ) );
  //SECTION 6 - FOOTER(background color)
  $wp_customize->add_setting( 'footer_bg' , array(
    'default'   => '#19283F',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
    'label'      => __( 'Background Color', 'santehsvit' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_bg',
  ) ) );
  //SECTION 6 - FOOTER(top line color)
  $wp_customize->add_setting( 'footer_top_line_color' , array(
    'default'   => '#24B7CB',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_top_line_color', array(
    'label'      => __( 'Top Line Color', 'santehsvit' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_top_line_color',
  ) ) );
  //SECTION 6 - FOOTER(copyright text)
  $wp_customize->add_setting( 'footer_copyright' , array(
    'default'   => '@ 2019 - СанТехСвіт Всі Права Захищені',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_copyright', array(
    'label'      => __( 'Copyright Text', 'santehsvit' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_copyright',
  ) ) );
  //SECTION 6 - FOOTER(copyright text color)
  $wp_customize->add_setting( 'footer_copyright_color' , array(
    'default'   => '#29B0C4',
    'transport' => 'refresh',
  ) );
  $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_copyright_color', array(
    'label'      => __( 'Copyright Text Color', 'santehsvit' ),
    'section'    => 'footer_section',
    'settings'   => 'footer_copyright_color',
  ) ) );
}
add_action( 'customize_register', 'santehsvit_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function santehsvit_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function santehsvit_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function santehsvit_customize_preview_js() {
	wp_enqueue_script( 'santehsvit-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'santehsvit_customize_preview_js' );
