<?php
/*
Template Name: metadesk verification process

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
                <h2 class="banner_p1-8-text-main"><?php the_field('verif_process-banner-title'); ?></h2>
                <?php echo str_replace('<p>', '<p class="banner_p1-8-text-second">', get_field('verif_process-banner-text')); ?>
            </div>
        </div>
    </div>
</section>

<section class="photo_and_text">
    <div class="photo_and_text-content wrapper">
        <div class="photo_and_text-container">
            <img src="<?php the_field('verif_process-our_process-image'); ?>" alt="photo and text service image" class="photo_and_text-image" />
            <div class="photo_and_text-text-container">
                <p class="photo_and_text-text-main"><?php the_field('verif_process-our_process-title'); ?></p>
                <?php echo str_replace('<p>', '<p class="photo_and_text-text-second">', get_field('verif_process-our_process-text')); ?>
            </div>
        </div>
    </div>
</section>

<section class="our_commitment">
    <div class="our_commitment-content wrapper">
        <div class="our_commitment-container">
            <p class="our_commitment-main-text"><?php the_field('verif_process-our_commitment-title'); ?></p>
            <div class="our_commitment-cards">
                <div class="our_commitment-card">
                    <div class="our_commitment-card-icon-container">
                        <img src="<?php the_field('verif_process-our_commitment-column-image'); ?>" alt="pages info icon" />
                    </div>
                    <div class="our_commitment-card-text-container">
                        <p class="our_commitment-card-text-main"><?php the_field('verif_process-our_commitment-column_1-title'); ?></p>
                        <p class="our_commitment-card-text-second"><?php the_field('verif_process-our_commitment-column_1-text'); ?></p>
                    </div>
                </div>
                <div class="our_commitment-card">
                    <div class="our_commitment-card-icon-container">
                        <img src="<?php the_field('verif_process-our_commitment-column-image'); ?>" alt="pages info icon" />
                    </div>
                    <div class="our_commitment-card-text-container">
                        <p class="our_commitment-card-text-main"><?php the_field('verif_process-our_commitment-column_2-title'); ?></p>
                        <p class="our_commitment-card-text-second"><?php the_field('verif_process-our_commitment-column_2-text'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="list_with_star">
    <div class="list_with_star-content wrapper">
        <div class="list_with_star-container">

            <p class="list_with_star-main-text"><?php the_field('verif_process-edit_team-title'); ?></p>
            <?php echo str_replace('<p>', '<p class="list_with_star-second-text">', get_field('verif_process-edit_team-text_1')); ?>
            <p class="list_with_star-main-text" data-type="none"><?php the_field('verif_process-edit_team-title_2'); ?></p>
            <?php echo str_replace('<p>', '<p class="list_with_star-second-text">', get_field('verif_process-edit_team-text_2')); ?>

            <ul class="list_with_star-list" data-type="style1" data-typemargin="small">
                <li class="list_with_star-list-point">
                    <p class="list_with_star-list-point-text"><?php the_field('verif_process-edit_team-list_point-text'); ?></p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="list_with_info" data-typemargin="small">
    <div class="list_with_info-content wrapper">
        <div class="list_with_info-container">
            <p class="list_with_info-main-text"><?php the_field('verif_process-edit_process-title'); ?></p>
            <?php echo str_replace('<p>', '<p class="list_with_info-text">', get_field('verif_process-edit_process-text')); ?>
        </div>
    </div>
</section>

<section class="green-color-block">
    <div class="green-color-block-content wrapper">
        <div class="green-color-block-container">
            <div class="green-color-block-main-text-container">
                <p class="green-color-block-main-text"><?php the_field('verif_process-fact_check-title'); ?></p>
            </div>
            <div class="green-color-block-second-text-container">
                <?php echo str_replace('<p>', '<p class="green-color-block-second-text">', get_field('verif_process-fact_check-text')); ?>
            </div>
        </div>
    </div>
</section>

<section class="list_with_info" data-typemargin="small">
    <div class="list_with_info-content wrapper">
        <div class="list_with_info-container">
            <p class="list_with_info-main-text" data-type="euro1"><?php the_field('verif_process-place_advertisements-title'); ?></p>
            <?php echo str_replace('<p>', '<p class="list_with_info-text">', get_field('verif_process-place_advertisements-text')); ?>
        </div>
    </div>
</section>

<section class="list_with_info" data-typemargin="small">
    <div class="list_with_info-content wrapper">
        <div class="list_with_info-container">
            <p class="list_with_info-main-text" data-type="euro2"><?php the_field('verif_process-make_money-title'); ?></p>
            <?php echo str_replace('<p>', '<p class="list_with_info-text">', get_field('verif_process-make_money-text')); ?>
        </div>
    </div>
</section>

<section class="green-color-block">
    <div class="green-color-block-content wrapper">
        <div class="green-color-block-container">
            <div class="green-color-block-main-text-container">
                <p class="green-color-block-main-text"><?php the_field('verif_process-comments_and_suggestions-title'); ?></p>
            </div>
            <div class="green-color-block-second-text-container">
                <p class="green-color-block-second-text"><?php the_field('verif_process-comment_and_suggestions-text'); ?></p>
                <a href="mailto:<?php the_field('verif_process-comment_and_suggestions-email'); ?>" class="green-color-block-second-text-mail"><?php the_field('verif_process-comment_and_suggestions-email'); ?></a>
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