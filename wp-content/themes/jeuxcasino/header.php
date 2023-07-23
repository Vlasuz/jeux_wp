<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset '); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Jeux Casino</title>


  <?php wp_head(); ?>



</head>

<body>
  <header class="header">
    <div class="header-content wrapper">
      <div class="header-container">
        <a href="home">
          <div class="header-logo-container">
            <?php

            $logo_img = '';
            $custom_logo_id = get_theme_mod('custom_logo');

            if ($custom_logo_id) {
              $logo_img = wp_get_attachment_image($custom_logo_id, 'full', false, array(
                'class'    => 'header-image',
                'itemprop' => 'logo',
              ));
            }

            echo $logo_img;

            ?>
            <p class="header-logo-text"><?php the_field('logo-text'); ?></p>
          </div>
        </a>
        <div class="header-links-container">
          <ul class="header-links-list">
            <li class="header-links-list-point">
              <a href="#" class="header-links-list-point-href"><?php the_field('header-link-1'); ?></a>
            </li>
            <li class="header-links-list-point">
              <a href="#" class="header-links-list-point-href"><?php the_field('header-link-2'); ?></a>
            </li>
            <li class="header-links-list-point">
              <a href="#" class="header-links-list-point-href"><?php the_field('header-link-3'); ?></a>
            </li>
          </ul>
          <a href="#" class="header-main-link">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/header_link_vector.svg" alt="header image" />
            <span><?php the_field('header-pink-button'); ?></span></a>
        </div>
      </div>
      <div class="header-mobile-container">
        <div class="header-mobile-top-row">
          <a href="index.html"> <img src="<?php bloginfo('template_url'); ?>/assets/img/header_logo.png" alt="header logo" class="header-mobile-top-row-image" /></a>
          <div class="header-mobile-top-row-right-part">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/header_mobile_icon_1.svg" alt="header icon" class="header-mobile-top-row-icon" />
            <div class="header-mobile-top-row-button">
              <span class="header-mobile-top-row-button-span"></span>
              <span class="header-mobile-top-row-button-span"></span>
            </div>
          </div>
        </div>
        <div class="header-mobile-content">
          <div class="header-mobile-lists active">
            <div class="header-mobile-input-container">
              <input type="text" class="header-mobile-input" placeholder="<?php the_field('nav-placeholder'); ?>" />
              <img src="<?php bloginfo('template_url'); ?>/assets/img/header_mobile_icon_1.svg" alt="header icon" class="header-mobile-input-icon" />
            </div>
            <ul class="header-mobile-first-list">
              <li class="header-mobile-first-list-point">
                <a href="#" class="header-mobile-first-list-point-text" data-type="cherry"><?php the_field('nav-main-link-1'); ?></a>
              </li>
              <li class="header-mobile-first-list-point">
                <a href="#" class="header-mobile-first-list-point-text" data-type="coin"><?php the_field('nav-main-link-2'); ?></a>
                <div class="header-mobile-first-list-point-image-container">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/header_mobile_list_icon_5.svg" alt="" class="header-mobile-first-list-point-image" />
                </div>
              </li>
              <li class="header-mobile-first-list-point">
                <a href="#" class="header-mobile-first-list-point-text" data-type="seven"><?php the_field('nav-main-link-3'); ?></a>
              </li>
              <li class="header-mobile-first-list-point">
                <a href="#" class="header-mobile-first-list-point-text" data-type="card"><?php the_field('nav-main-link-4'); ?></a>
              </li>
            </ul>
            <ul class="header-mobile-second-list">
              <li class="header-mobile-second-list-point">
                <a href="#" class="header-mobile-second-list-point-href"><?php the_field('header-link-1'); ?></a>
              </li>
              <li class="header-mobile-second-list-point">
                <a href="#" class="header-mobile-second-list-point-href"><?php the_field('header-link-2'); ?></a>
              </li>
              <li class="header-mobile-second-list-point">
                <a href="#" class="header-mobile-second-list-point-href"><?php the_field('header-link-3'); ?></a>
              </li>
            </ul>
            <button class="header-mobile-bottom-button">
              <span><?php the_field('header-pink-button'); ?></span>
            </button>
          </div>
          <div class="header-mobile-page">
            <p class="header-mobile-page-back-button"><?php the_field('nav-main-link-2'); ?></p>
            <p class="header-mobile-page-main-text"><?php the_field('title-drop-down-list'); ?></p>
            <ul class="header-mobile-page-list">
              <li class="header-mobile-page-main-point"><?php the_field('option-sort-1'); ?></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-1'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-2'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-3'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-4'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-5'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-6'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-1-option-7'); ?></a></li>
            </ul>
            <ul class="header-mobile-page-list">
              <li class="header-mobile-page-main-point"><?php the_field('option-sort-2'); ?></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-2-option-1'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-2-option-2'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-2-option-3'); ?></a></li>
            </ul>
            <ul class="header-mobile-page-list">
              <li class="header-mobile-page-main-point"><?php the_field('option-sort-3'); ?></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-3-option-1'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-3-option-2'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-3-option-3'); ?></a></li>
              <li class="header-mobile-page-point"><a href="#" class="header-mobile-page-point-href"><?php the_field('option-sort-3-option-4'); ?></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="nav">
    <div class="nav-content wrapper">
      <div class="nav-container">
        <ul class="nav-list">
          <li class="nav-list-point">
            <a href="" class="nav-list-point-href">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/nav_icon_1.svg" alt="nav image" class="nav-list-point-href-image" />
              <span class="nav-list-point-href-text"><?php the_field('nav-main-link-1'); ?></span>
            </a>
          </li>
          <li class="nav-list-point" data-type="casinos">
            <a href="" class="nav-list-point-href">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/nav_icon_2.svg" alt="nav image" class="nav-list-point-href-image" />
              <span class="nav-list-point-href-text"><?php the_field('nav-main-link-2'); ?></span>
            </a>
          </li>
          <li class="nav-list-point">
            <a href="" class="nav-list-point-href">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/nav_icon_3.svg" alt="nav image" class="nav-list-point-href-image" />
              <span class="nav-list-point-href-text"><?php the_field('nav-main-link-3'); ?></span>
            </a>
          </li>
          <li class="nav-list-point">
            <a href="" class="nav-list-point-href">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/nav_icon_4.svg" alt="nav image" class="nav-list-point-href-image" />
              <span class="nav-list-point-href-text"><?php the_field('nav-main-link-4'); ?></span>
            </a>
          </li>
        </ul>
        <div class="nav-input-container">
          <input placeholder="<?php the_field('nav-placeholder'); ?>" type="text" class="nav-input" />
        </div>
      </div>
    </div>
    <div class="nav-popup">
      <div class="nav-popup-content wrapper">
        <div class="nav-popup-container">
          <div class="nav-popup-lists-container">
            <p class="nav-popup-lists-text"><?php the_field('title-drop-down-list'); ?></p>
            <div class="nav-popup-lists-content">
              <ul class="nav-popup-list">
                <p class="nav-popup-list-main-text"><?php the_field('option-sort-1'); ?></p>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('<option-sort-1></option-sort-1>-option-1'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-1-option-2'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-1-option-3'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-1-option-4'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-1-option-5'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-1-option-6'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-1-option-7'); ?> </a></li>
              </ul>
              <ul class="nav-popup-list">
                <p class="nav-popup-list-main-text"><?php the_field('option-sort-2'); ?></p>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-2-option-1'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-2-option-2'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-2-option-3'); ?> </a></li>
              </ul>
              <ul class="nav-popup-list">
                <p class="nav-popup-list-main-text"><?php the_field('option-sort-3'); ?></p>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-3-option-1'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-3-option-2'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-3-option-3'); ?> </a></li>
                <li class="nav-popup-list-point"><a href="#" class="nav-popup-list-point-link"><?php the_field('option-sort-3-option-4'); ?> </a></li>
              </ul>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/footer_main_block_image_1.png" alt="nav image" class="nav-popup-lists-image" />
          </div>
          <div class="nav-popup-card">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/nav_popup_image_1.png" alt="nav popup image" class="nav-popup-card-image" />
            <p class="nav-popup-card-main-text" data-typeimage="on"><?php the_field('nav-card-p-1'); ?></p>
            <p class="nav-popup-card-second-text"><?php the_field('nav-card-p-2'); ?></p>
            <p class="nav-popup-card-second-text"><?php the_field('nav-card-p-3'); ?></p>
            <p class="nav-popup-card-second-text"><?php the_field('nav-card-p-4'); ?></p>
            <p class="nav-popup-card-main-text"><?php the_field('nav-card-p-5'); ?></p>
            <div class="nav-popup-card-stars-container">
              <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="nav-popup-card-star active">
                <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
              </svg>
              <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="nav-popup-card-star active">
                <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
              </svg>
              <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="nav-popup-card-star active">
                <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
              </svg>
              <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="nav-popup-card-star active">
                <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
              </svg>
              <svg viewBox="0 0 14 14" fill="DEE3EB" xmlns="http://www.w3.org/2000/svg" class="nav-popup-card-star active">
                <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" fill="#DEE3EB" />
              </svg>
              <p class="nav-popup-card-stars-number"><?php the_field('nav-card-p-6'); ?></p>
            </div>
            <p class="nav-popup-card-text"><?php the_field('nav-card-p-7'); ?></p>
            <div class="nav-popup-card-buttons-container">
              <button class="nav-popup-card-button" data-type="review"><?php the_field('nav-card-button-1'); ?></button>
              <button class="nav-popup-card-button"><?php the_field('nav-card-button-2'); ?></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>