<?php

get_header();

?>

<main>
  <a href="#header" class="btn-up" style="background: <?php echo get_theme_mod('btnup_bg'); ?>; color: <?php echo get_theme_mod('btnup_text_color'); ?>;"><?php echo get_theme_mod('btnup_text'); ?></a>

  <div class="goodat" id="goodat" style="background: <?php echo get_theme_mod('goodat_bg'); ?>;">
    <div class="goodat_container">
      <img src="<?php echo get_theme_mod('goodat_icon'); ?>" alt="Icon" class="block-icon">
      <h2 class="goodat-headline" style="color: <?php echo get_theme_mod('goodat_headline_color'); ?>;"><?php echo get_theme_mod('goodat_headline'); ?></h2>
      <p class="goodat-underheadline" style="color: <?php echo get_theme_mod('goodat_underheadline_color'); ?>;"><?php echo get_theme_mod('goodat_underheadline'); ?></p>
      <hr class="goodat-line" style="background-color: <?php echo get_theme_mod('goodat_line_color'); ?>;">

      <div class="goodat_posts">
        <?php
        $args = array(
          'post_type'      => 'ss_good',
          'posts_per_page' => '9',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
        while($query->have_posts()) {
        $query->the_post();
        ?>

        <div class="goodat_post">
          <i class="<?php echo the_field('goodat_icon'); ?> goodat_post-icon" style="color: <?php echo get_theme_mod('goodat_posts_icon_color'); ?>;"></i>
          <h4 class="goodat_post-headline" style="color: <?php echo get_theme_mod('goodat_posts_title_color'); ?>;"><?php the_title(); ?></h4>
          <div class="goodat_post-text" style="color: <?php echo get_theme_mod('goodat_posts_text_color'); ?>;"><?php the_excerpt(); ?></div>
        </div>

          <?php
        }

        } else {}

        wp_reset_postdata();

        ?>
      </div>

    </div>
  </div>
  <!--
    SITE WAS MADY BY VADIM KALAIDA!!!
    EmySaf
  -->
  <div class="products" style="background: <?php echo get_theme_mod('products_bg'); ?>;" id="products">
    <div class="products_container">
      <img src="<?php echo get_theme_mod('products_icon'); ?>" alt="Icon" class="block-icon">
      <h2 class="products-headline" style="color: <?php echo get_theme_mod('products_headline_color'); ?>;"><?php echo get_theme_mod('products_headline'); ?></h2>
      <p class="products-underheadline" style="color: <?php echo get_theme_mod('products_underheadline_color'); ?>;"><?php echo get_theme_mod('products_underheadline'); ?></p>
      <hr class="products-line" style="background-color: <?php echo get_theme_mod('products_line_color'); ?>;">
      <div class="products_posts">
        <?php
        $args = array(
          'post_type'      => 'ss_products',
          'posts_per_page' => '24',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
          while($query->have_posts()) {
            $query->the_post();
            ?>

            <div class="products_post">
              <?php if(has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID());
              }else {
                echo '<img class="products_post-img" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
              }; ?>
              <div class="products_post_content" style="background: <?php echo get_theme_mod('products_hover_color'); ?>;">
                <h5 class="products_post-title" style="color: <?php echo get_theme_mod('products_title_color'); ?>;"><?php the_title(); ?></h5>
              </div>
            </div>

            <?php
          }

        } else {}

        wp_reset_postdata();

        ?>
      </div>
    </div>
  </div>
  <!--
    SITE WAS MADY BY VADIM KALAIDA!!!
    EmySaf
  -->
  <div class="clients" style="background: <?php echo get_theme_mod('clients_bg'); ?>;">
    <div class="clients_container">
      <div class="clients_posts">
        <?php
        $args = array(
          'post_type'      => 'ss_clients',
          'posts_per_page' => '36',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
          while($query->have_posts()) {
            $query->the_post();
            ?>

            <div class="clients_post">
              <?php if(has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID());
              }else {
                echo '<img class="clients-logo" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
              }; ?>
            </div>

            <?php
          }

        } else {}

        wp_reset_postdata();

        ?>
      </div>
    </div>
  </div>
  <!--
    SITE WAS MADY BY VADIM KALAIDA!!!
    EmySaf
  -->
  <div class="team" style="background: <?php echo get_theme_mod('team_bg'); ?>;" id="team">
    <div class="team_container">
      <img src="<?php echo get_theme_mod('team_icon'); ?>" alt="Icon" class="block-icon">
      <h2 class="team-headline" style="color: <?php echo get_theme_mod('team_headline_color'); ?>;"><?php echo get_theme_mod('team_headline'); ?></h2>
      <p class="team-underheadline" style="color: <?php echo get_theme_mod('team_underheadline_color'); ?>;"><?php echo get_theme_mod('team_underheadline'); ?></p>
      <hr class="team-line" style="background-color: <?php echo get_theme_mod('team_line_color'); ?>;">
      <img src="<?php echo get_theme_mod('team_img'); ?>" alt="Image" class="team-img">
      <div class="team_posts">
        <?php
        $args = array(
          'post_type'      => 'ss_team',
          'posts_per_page' => '12',
        );

        $query = new WP_Query($args);
        if($query->have_posts()) {
          while($query->have_posts()) {
            $query->the_post();
            ?>

            <div class="team_post">
              <?php if(has_post_thumbnail()) {
                echo get_the_post_thumbnail(get_the_ID());
              }else {
                echo '<img class="team_photo" src="'.SK_IMG_DIR.'/dae6d405-af3c-4e0d-b961-d49795a88ec1_1.f0276d14656e2f9f78bc6f315f649c18.jpeg">';
              }; ?>
              <div class="team_post_blue" style="background-color: <?php echo get_theme_mod('team_post_title_background'); ?>;">
                <p class="team_post_blue-title" style="color: <?php echo get_theme_mod('team_post_title_color'); ?>;">
                  <?php the_title(); ?>
                </p>
              </div>
              <div class="team_post_content" style="background: <?php echo get_theme_mod('team_post_text_bg'); ?>;">
                <div class="team_post-text" style="color: <?php echo get_theme_mod('team_post_text_color'); ?> ;">
                  <?php the_excerpt(); ?>
                </div>
              </div>
            </div>

            <?php
          }

        } else {}

        wp_reset_postdata();

        ?>
      </div>
    </div>
  </div>
  <!--
    SITE WAS MADY BY VADIM KALAIDA!!!
    EmySaf
  -->
  <div class="contact" style="background: <?php echo get_theme_mod('contact_bg'); ?>;" id="contact">
    <div class="contact_container" style="border-bottom: 1px solid <?php echo get_theme_mod('footer_top_line_color'); ?>;">
      <img src="<?php echo get_theme_mod('contact_icon'); ?>" alt="Icon" class="block-icon">
      <h2 class="contact-headline" style="color: <?php echo get_theme_mod('contact_headline_color'); ?>;"><?php echo get_theme_mod('contact_headline'); ?></h2>
      <p class="contact-underheadline" style="color: <?php echo get_theme_mod('contact_underheadline_color'); ?>;"><?php echo get_theme_mod('contact_underheadline'); ?></p>
      <hr class="contact-line" style="background-color: <?php echo get_theme_mod('contact_line_color'); ?>;">
      <?php echo get_theme_mod('contact_map'); ?>
      <div class="contact_bottom">
        <div class="contact_bottom_left">
          <h4 class="contact_left-title" style="color: <?php echo get_theme_mod('contact_bottom_left_title_color'); ?>;">
            <?php echo get_theme_mod('contact_bottom_left_title'); ?>
          </h4>
          <p class="contact_left-phone" style="color: <?php echo get_theme_mod('contact_bottom_phonenumbers_color'); ?>;"><?php echo get_theme_mod('contact_bottom_phonenumber1'); ?></p>
          <p class="contact_left-phone" style="color: <?php echo get_theme_mod('contact_bottom_phonenumbers_color'); ?>;"><?php echo get_theme_mod('contact_bottom_phonenumber2'); ?></p>
          <p class="contact_left-phone" style="color: <?php echo get_theme_mod('contact_bottom_phonenumbers_color'); ?>;"><?php echo get_theme_mod('contact_bottom_phonenumber3'); ?></p>
        </div>
        <div class="contact_bottom_right">
          <h4 class="contact_right-title" style="color: <?php echo get_theme_mod('contact_bottom_right_title_color'); ?>;">
            <?php echo get_theme_mod('contact_bottom_right_title'); ?>
          </h4>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day1'); ?></p>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day2'); ?></p>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day3'); ?></p>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day4'); ?></p>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day5'); ?></p>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day6'); ?></p>
          <p class="contact_right-day" style="color: <?php echo get_theme_mod('contact_bottom_days_color'); ?>;"><?php echo get_theme_mod('contact_bottom_right_day7'); ?></p>
        </div>
      </div>
    </div>
  </div>

</main>

<?php

get_footer();

?>
