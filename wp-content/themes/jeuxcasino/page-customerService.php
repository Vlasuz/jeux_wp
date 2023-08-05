<?php
/*
Template Name: customer service

*/

?>

<?php get_header(); ?>

<section class="banner banner_p1-8">
    <div class="banner_p1-8-content wrapper">
        <div class="banner_p1-8-container">
            <div class="crumbs-container">
                <!-- TODO -->
                <ul class="crumbs-list-container">
                    <li class="crumbs-list-point"><a href="#" class="crumbs-list-point-main-link">Категория</a></li>
                    <li class="crumbs-list-point">
                        <p class="crumbs-list-point-link">Путь до внутренней страницы</p>
                    </li>
                </ul>
            </div>
            <div class="banner_p1-8-text-container">
                <h2 class="banner_p1-8-text-main"><?php the_field('customer_service-banner-title'); ?></h2>
                <?php echo str_replace('<p>', '<p class="banner_p1-8-text-second">', get_field('customer_service-banner-text')); ?>
            </div>
        </div>
    </div>
</section>

<section class="customer_service">
    <div class="customer_service-content wrapper">
        <div class="photo_and_text-container">
            <img src="<?php the_field('customer_service-main_content-image'); ?>" alt="photo and text image" class="photo_and_text-image" />
            <div class="photo_and_text-text-container">
                <p class="photo_and_text-text-main"><?php the_field('customer_service-main_content-title'); ?></p>
                <?php echo str_replace('<p>', '<p class="photo_and_text-text-second">', get_field('customer_service-main_content-text_1')); ?>
            </div>
        </div>
        <?php echo str_replace('<p>', '<p class="customer_service-text">', get_field('customer_service-main_content-text_2')); ?>
        <div class="green-color-block-container">
            <div class="green-color-block-main-text-container">
                <p class="green-color-block-main-text"><?php the_field('customer_service-main_content-green_block-title'); ?></p>
            </div>
            <div class="green-color-block-second-text-container">
                <p class="green-color-block-second-text"><?php the_field('customer_service-main_content-green_block-text'); ?></p>
                <a href="mailto:<?php the_field('customer_service-main_content-green_block-email'); ?>" class="green-color-block-second-text-mail"><?php the_field('customer_service-main_content-green_block-email'); ?></a>
            </div>
        </div>
        <div class="customer_service-add-info">
            <img src="<?php the_field('customer_service-main_content-add_info-image'); ?>" class="customer_service-add-info-image" alt="customer service icon" />
            <div class="customer_service-add-info-text-container">
                <p class="customer_service-add-info-main-text"><?php the_field('customer_service-main_content-add_info-title'); ?></p>
                <p class="customer_service-add-info-second-text"><?php the_field('customer_service-main_content-add_info-text'); ?></p>
            </div>
        </div>
    </div>
</section>

<div class="top_games-slider wrapper">
    <div class="top_games-slider-text">Рекомендуем поиграть</div>
    <div class="swiper">
        <div class="swiper-container" data-type="topGamesSlider">
            <div class="swiper-wrapper">

                <?php
                $featured_posts = get_field('customer_service-main_content-list_of_casinos');
                if ($featured_posts) : ?>
                    <?php
                    foreach ($featured_posts as $post) :
                        setup_postdata($post); ?>

                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <div class="game_cards-point-image-container">
                                    <img src="<?php the_field('game_card_image'); ?>" alt="cards image" class="game_cards-point-image" />
                                    <div class="game_cards-point-image-button-container"><a href="<?php the_permalink(); ?>" class="game_cards-point-image-button">Play Now</a></div>
                                </div>
                                <p class="swiper-slide-text">1000 игр</p>
                                <p class="swiper-slide-main-text"><?php the_field('game_card_title'); ?></p>
                            </div>
                        </div>

                    <?php endforeach;
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
        </div>
    </div>
    <div class="sw-nav">
        <button class="sw-prev"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_left.svg" alt="prev image" class="sw-prev-image" /></button>
        <button class="sw-next"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_right.svg" alt="next image" class="sw-next-image" /></button>
    </div>
    <div class="sw-pag"></div>
</div>

<?php get_footer(); ?>