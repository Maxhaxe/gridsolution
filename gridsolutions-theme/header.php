<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script>try { if ('forEach' in NodeList.prototype) { document.documentElement.classList.add('js'); } } catch (e) {}</script>
  <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/favicon.svg'); ?>" type="image/svg+xml">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <a class="skip-link" href="#content">Direct naar inhoud</a>

  <header class="site-header">
    <div class="site-header__inner">
      <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?> – naar de homepage">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo.svg'); ?>" alt="<?php bloginfo('name'); ?>" width="1300" height="220">
      </a>
      <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="hoofdnavigatie" aria-label="Menu openen">
        <span></span><span></span><span></span>
      </button>
      <nav class="nav" id="hoofdnavigatie" aria-label="Hoofdnavigatie">
        <?php
        if (has_nav_menu('primary')) {
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'container'      => false,
                'items_wrap'     => '%3$s',
                'fallback_cb'    => false,
            ));
        } else {
            // Standaardfallback links
            $diensten_url = gridsolutions_get_page_url('diensten');
            $over_ons_url = gridsolutions_get_page_url('over-ons');
            $vacatures_url = gridsolutions_get_page_url('vacatures');
            $contact_url = gridsolutions_get_page_url('contact');
        ?>
        <a class="nav__link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
        <a class="nav__link" href="<?php echo esc_url($diensten_url); ?>">Diensten</a>
        <a class="nav__link" href="<?php echo esc_url($over_ons_url); ?>">Over ons</a>
        <a class="nav__link" href="<?php echo esc_url($vacatures_url); ?>">Vacatures</a>
        <a class="nav__link" href="<?php echo esc_url($contact_url); ?>">Contact</a>
        <a class="btn btn--primary btn--sm nav__cta" href="<?php echo esc_url($contact_url); ?>">Neem contact op</a>
        <?php } ?>
      </nav>
    </div>
  </header>
