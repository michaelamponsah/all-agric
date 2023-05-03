<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>./assets/images/favicon.png">
  <?php wp_head(); ?>
</head>

<body>
  <header class="toolbar">
    <ul class="container">
	<li class="logo-search-wrapper">
		
      <div>
      <?php
          if (function_exists('the_custom_logo')) {
            the_custom_logo();
          } else {
            bloginfo('name');
          }
        ?>
      </div>
		
		     <div class="search-wrapper">
            <?php get_search_form(); ?>
          </div>
	</li>	
     

      <li class="nav-actions-wrapper">
        <span  class="material-symbols-outlined bg-toggle-btn menu-icon" data-menu-btn>
          list
        </span>
        <div class="dropdown" data-dropdown>
          <div class="dropdown-content">
            <ul>
              <li class="mobile-nav--title">About</li>
              <li><a href="https://allagricgh.com/">AllAgric Gh</a></li>
              <li><a href="https://allagricgh.com/contact-us">Contact Us</a></li>
              <li><a href="https://allagricgh.com/advertisements">Advertise</a></li>
            </ul>
            
            <ul>
              <li class="mobile-nav--title">Connect with us</li>
              <li><a href="https://www.facebook.com/allagricgh" target="_blank">Facebook</a></li>
              <li><a href="https://twitter.com/AAgricgh" target="_blank">Twitter</a></li>
              <li><a href="https://www.instagram.com/allagricgh/" target="_blank">Instagram</a></li>
              <li><a href="https://www.linkedin.com/company/all-agricgh/" target="_blank">LinkedIn</a></li>
            </ul>
          </div>
       </div>
        <span style="display: inline-block; margin: 0 0.5em"></span>
        <span class="material-symbols-outlined bg-toggle-btn" id="theme-toggler" data-theme-toggler>
          light_mode
        </span>
        <nav class="navigation nav-desktop">
          <?php 
            if (has_nav_menu('primary-menu')) {
              wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'items_wrap' => '<ul class="desktop-nav--list">%3$s</ul>'
              ));
            }
          ?>
        </nav>
        <nav class="navigation nav-mobile" data-slider>
          <span class="material-symbols-outlined icon" id="burger-icon" tabindex="0" data-slider-icon>
            menu
          </span>
          <!-- Sliding menu -->
          <div class="mobile-nav-wrapper">
            <div class="mobile-nave-wrapper--logo-closeicon-wrapper">
              <!-- <a href="index.html" tabindex="0"> <img src="./assets/images/logo.svg" class="logo" alt=""></a> -->
              <img src="<?php bloginfo('template_directory'); ?>/assets/images/menu-close-icon.svg" alt="hamburger menu-icon" class="burger-icon icon"
                tabindex="0" data-slider-icon>
            </div>
            <div class="mobile-search">
              <?php get_search_form(); ?>
            </div>
            <?php 
            if (has_nav_menu('primary-menu')) {
              wp_nav_menu(array(
                'theme_location' => 'primary-menu',
                'container' => '',
                'items_wrap' => '<ul class="mobile-nav--list">%3$s</ul>'
                ));
              }
            ?>
            <div class="mobile-nav--list">
              <ul>
                <li id="menu-title" style="color: #00d301">About</li>
                <li><a href="https://allagricgh.com/">AllAgric Gh</a></li>
                <li><a href="https://allagricgh.com/contact-us">Contact Us</a></li>
                <li><a href="https://allagricgh.com/advertisements">Advertise</a></li>
              </ul>
              <ul>
                <li id="menu-title" style="color: #00d301">Legal</li>
                <li><a href="https://allagricgh.com/privacy-policy/">Privacy Policy</a></li>
                <li><a href="https://allagricgh.com/terms-of-service/">Terms of Service</a></li>
              </ul>
            </div>
            <br>
            <h3 class="mobile-nav--title">Let's Connect</h3>
            <ul class="mobile-nav--list slider-socials">
              <li><a href="https://www.facebook.com/allagricgh" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/facebook-black.svg" alt=""></a>
              </li>
              <li><a href="https://twitter.com/AAgricgh" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/twitter-black.svg"
                    alt=""></a></li>
              <li><a href="https://www.instagram.com/allagricgh/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/images/instagram-black.svg"
                    alt=""></a></li>
              <li><a href="https://www.linkedin.com/company/all-agricgh/" target="_blank"><img
                    src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin-black.svg" alt=""></a></li>
            </ul>
          </div>
        </nav>
      </li>
    </ul>
  </header>
  <main>