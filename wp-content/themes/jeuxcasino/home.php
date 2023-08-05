<?php
/*
Template Name: home

*/

?>

<?php get_header(); ?>

<section class="banner">
    <div class="banner-content wrapper">
        <div class="banner-container">
            <div class="crumbs-container">
                <!-- TODO -->
                <ul class="crumbs-list-container">
                    <li class="crumbs-list-point"><a href="#" class="crumbs-list-point-main-link">Категория</a></li>
                    <li class="crumbs-list-point">
                        <p class="crumbs-list-point-link">Путь до внутренней страницы</p>
                    </li>
                </ul>
            </div>
            <div class="banner-text-container">
                <h2 class="banner-text-main"><?php the_field('home-banner_title'); ?></h2>
                <p class="banner-text-second" data-type="first"><?php the_field('home-banner_text_1'); ?></p>
                <p class="banner-text-second"><?php the_field('home-banner_text_2'); ?></p>
                <p class="banner-text-second"><?php the_field('home-banner_text_3'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="banner_sort">
    <div class="banner_sort-content wrapper">
        <div class="banner_sort-container">
            <img src="<?php the_field('home-banner_image_desktop'); ?>" alt="index banner image" class="banner_sort-image" />
            <img src="<?php the_field('home-banner_image_mobile'); ?>" alt="index banner image" class="banner_sort-image-mobile" />
            <div class="banner_sort-text-select-container">
                <div class="banner_sort-text-container">
                    <p class="banner_sort-text-main">Choisissez un jeu de casino gratuit et commencez à jouer</p>
                    <p class="banner_sort-text-second">средняя оценка нашей подборки</p>
                    <div class="banner_sort-stars-container">
                        <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="banner_sort-star active">
                            <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                        </svg>
                        <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="banner_sort-star active">
                            <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                        </svg>
                        <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="banner_sort-star active">
                            <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                        </svg>
                        <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="banner_sort-star active">
                            <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                        </svg>
                        <svg viewBox="0 0 14 14" fill="DEE3EB" xmlns="http://www.w3.org/2000/svg" class="banner_sort-star">
                            <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" fill="#DEE3EB" />
                        </svg>
                        <p class="banner_sort-star-number">4,9</p>
                    </div>
                </div>
                <!-- TODO -->
                <div class="banner_sort-select-container">
                    <p class="banner_sort-select-text">Сортировать по:</p>
                    <div class="banner_sort-selects">
                        <div class="banner_sort-select-content">
                            <select name="select" class="banner_sort-select">
                                <option value="Тема игры">Тема игры</option>
                                <option value="Тема игры">Тема игры</option>
                                <option value="Тема игры">Тема игры</option>
                                <option value="Тема игры">Тема игры</option>
                            </select>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_top.svg" alt="banner sort image" class="banner_sort-select-image-prev" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_bottom.svg" alt="banner sort image" class="banner_sort-select-image-next" />
                        </div>
                        <div class="banner_sort-select-content">
                            <select name="select" class="banner_sort-select">
                                <option value="Функции">Функции</option>
                                <option value="Функции">Функции</option>
                                <option value="Функции">Функции</option>
                                <option value="Функции">Функции</option>
                            </select>
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_top.svg" alt="banner sort image" class="banner_sort-select-image-prev" />
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_bottom.svg" alt="banner sort image" class="banner_sort-select-image-next" />
                        </div>
                        <!-- <input type="text" class="banner_sort-select" />
                <input type="text" class="banner_sort-select" /> -->
                    </div>
                </div>
            </div>
            <div class="banner_sort-links-container">
                <a href="" class="banner_sort-links-point">Слоты IGT</a>
                <a href="" class="banner_sort-links-point">Аристократ Слоты</a>
                <a href="" class="banner_sort-links-point">Слоты Балли</a>
                <a href="" class="banner_sort-links-point">Слоты WMS</a>
                <a href="" class="banner_sort-links-point">Выплаты сегодня</a>
                <a href="" class="banner_sort-links-point">Эйнсворт Слоты</a>
                <a href="" class="banner_sort-links-point" data-type="green">Проверенные</a>
            </div>
        </div>
    </div>
</section>

<section class="game_cards">
    <div class="game_cards-content wrapper">

        <?php
        $featured_posts = get_field('list_casinos');
        if ($featured_posts) : ?>
            <?php

            if (count($featured_posts) <= 18) {
            ?>
                <div class="game_cards-container">
                    <?php
                    foreach ($featured_posts as $post) :
                        // Setup this post for WP functions (variable must be named $post).
                        // print_r($post);
                        setup_postdata($post); ?>

                        <div class="game_cards-point">
                            <div class="game_cards-point-image-container">
                                <img src="<?php the_field('game_card_image'); ?>" alt="cards image" class="game_cards-point-image" />
                                <div class="game_cards-point-image-button-container"><a href="<?php the_permalink(); ?>" class="game_cards-point-image-button">Play Now</a></div>
                            </div>
                            <div class="game_cards-point-text-container">
                                <div class="game_cards-point-text-stars-container">
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" fill="#DEE3EB" />
                                    </svg>
                                    <p class="game_cards-point-text-star-number"><?php the_field('game_card_stars'); ?></p>
                                </div>
                                <p class="game_cards-point-text-second"><?php the_field('game_card_content'); ?></p>
                                <p class="game_cards-point-text-main"><?php the_field('game_card_title'); ?></p>
                            </div>
                        </div>

                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
            <?php
            } else {
            ?>
                <div class="game_cards-container">
                    <?php
                    for ($i = 0; $i < 18; $i++) {
                        $tempPost = $featured_posts[$i];
                        // print_r($tempPost);
                        setup_postdata($tempPost); ?>

                        <div class="game_cards-point">
                            <div class="game_cards-point-image-container">
                                <img src="<?php the_field('game_card_image'); ?>" alt="cards image" class="game_cards-point-image" />
                                <div class="game_cards-point-image-button-container"><a href="<?php the_permalink(); ?>" class="game_cards-point-image-button">Play Now</a></div>
                            </div>
                            <div class="game_cards-point-text-container">
                                <div class="game_cards-point-text-stars-container">
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" fill="#DEE3EB" />
                                    </svg>
                                    <p class="game_cards-point-text-star-number"><?php the_field('game_card_stars'); ?></p>
                                </div>
                                <p class="game_cards-point-text-second"><?php the_field('game_card_content'); ?></p>
                                <p class="game_cards-point-text-main"><?php the_field('game_card_title'); ?></p>
                            </div>
                        </div>

                    <?php };
                    wp_reset_postdata(); ?>
                </div>
                <div class="game_cards-container disactive" data-type="moreCards">
                    <?php
                    for ($i = 18; $i < count($featured_posts); $i++) {
                        $tempPost = $featured_posts[$i];
                        // print_r($tempPost);
                        setup_postdata($tempPost); ?>

                        <div class="game_cards-point">
                            <div class="game_cards-point-image-container">
                                <img src="<?php the_field('game_card_image'); ?>" alt="cards image" class="game_cards-point-image" />
                                <div class="game_cards-point-image-button-container"><a href="<?php the_permalink(); ?>" class="game_cards-point-image-button">Play Now</a></div>
                            </div>
                            <div class="game_cards-point-text-container">
                                <div class="game_cards-point-text-stars-container">
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="#DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star active">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" />
                                    </svg>
                                    <svg viewBox="0 0 14 14" fill="DEE3EB" xmlns="http://www.w3.org/2000/svg" class="game_cards-point-text-star">
                                        <path d="M7 10.689L11.326 13.3L10.178 8.379L14 5.068L8.967 4.641L7 0L5.033 4.641L0 5.068L3.822 8.379L2.674 13.3L7 10.689Z" fill="#DEE3EB" />
                                    </svg>
                                    <p class="game_cards-point-text-star-number"><?php the_field('game_card_stars'); ?></p>
                                </div>
                                <p class="game_cards-point-text-second"><?php the_field('game_card_content'); ?></p>
                                <p class="game_cards-point-text-main"><?php the_field('game_card_title'); ?></p>
                            </div>
                        </div>

                    <?php };
                    wp_reset_postdata(); ?>
                </div>
                <button class="game_cards-button-more active"><span class="game_cards-button-more-text"> Показать еще больше </span></button>
            <?php
            }
            ?>
        <?php endif;
        wp_reset_postdata(); ?>

    </div>
</section>

<section class="comment_instruction">
    <div class="comment_instruction-content wrapper">
        <div class="comment_instruction-container">
            <div class="comment_instruction-text-and-image-container">
                <img src="<?php the_field('home-how_to_play-image'); ?>" alt="instruction image bg" class="comment_instruction-bg-image" />

                <div class="comment_instruction-text-container">
                    <p class="comment_instruction-main-text"><?php the_field('home-how_to_play-title'); ?></p>
                    <p class="comment_instruction-second-text"><?php the_field('home-how_to_play-text_1'); ?></p>
                    <p class="comment_instruction-second-text"><?php the_field('home-how_to_play-text_2'); ?></p>
                </div>
            </div>

            <ul class="comment_instruction-list">
                <li class="comment_instruction-list-point">
                    <p class="comment_instruction-list-point-main-text"><?php the_field('home-how_to_play-list_1-title'); ?></p>
                    <p class="comment_instruction-list-point-second-text"><?php the_field('home-how_to_play-list_1-text_1'); ?></p>
                    <p class="comment_instruction-list-point-second-text"><?php the_field('home-how_to_play-list_1-text_2'); ?></p>
                    <p class="comment_instruction-list-point-text"><?php the_field('home-how_to_play-list_1-small_text_1'); ?></p>
                </li>
                <li class="comment_instruction-list-point">
                    <p class="comment_instruction-list-point-main-text"><?php the_field('home-how_to_play-list_2-title'); ?></p>
                    <p class="comment_instruction-list-point-second-text"><?php the_field('home-how_to_play-list_2-text_1'); ?></p>
                    <p class="comment_instruction-list-point-second-text"><?php the_field('home-how_to_play-list_2-text_2'); ?></p>
                    <div class="comment_instruction-list-point-yellow-container">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/pages_lamp_icon_1.svg" alt="list image" class="comment_instruction-list-point-yellow-image" />
                        <div class="comment_instruction-list-point-yellow-text-container">
                            <p class="comment_instruction-list-point-yellow-main-text"><?php the_field('home-how_to_play-list_2-yellow_title'); ?></p>
                            <p class="comment_instruction-list-point-yellow-second-text"><?php the_field('home-how_to_play-list_2-yellow_text'); ?></p>
                        </div>
                    </div>
                </li>
                <li class="comment_instruction-list-point">
                    <p class="comment_instruction-list-point-main-text"><?php the_field('home-how_to_play-list_3-title'); ?></p>
                    <p class="comment_instruction-list-point-second-text"><?php the_field('home-how_to_play-list_3-text_1'); ?></p>
                    <p class="comment_instruction-list-point-second-text"><?php the_field('home-how_to_play-list_3-text_2'); ?></p>
                    <p class="comment_instruction-list-point-text"><?php the_field('home-how_to_play-list_3-small_text_1'); ?></p>
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="jackpot">
    <div class="jackpot-content wrapper">
        <div class="jackpot-container">
            <div class="jackpot-image-container">
                <img src="<?php the_field('home-jackpot-image'); ?>" alt="jackpot image" class="jackpot-image" />
            </div>
            <div class="jackpot-text-container">
                <p class="jackpot-main-text"><?php the_field('home-jackpot-title'); ?></p>
                <p class="jackpot-color-text"><?php the_field('home-jackpot-title_green'); ?></p>
                <p class="jackpot-text"><?php the_field('home-jackpot-text_1'); ?></p>
                <p class="jackpot-second-text"><?php the_field('home-jackpot-text_2'); ?></p>
                <p class="jackpot-text"><?php the_field('home-jackpot-text_3'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="top_games">
    <div class="top_games-content wrapper">
        <div class="top_games-container">
            <div class="top_games-main-text-container">
                <p class="top_games-main-text"><?php the_field('home-top_games-title'); ?></p>
                <p class="top_games-date"><?php the_field('home-top_games-date'); ?></p>
            </div>
            <p class="top_games-second-text"><?php the_field('home-top_games-text'); ?></p>
            <?php echo do_shortcode('[table id=2 /]'); ?>
            <div class="top_games-table-mobile">
                <div class="top_games-table-mobile-point">
                    <div class="top_games-table-mobile-top-row">
                        <p class="top_games-table-mobile-top-row-span">Machine à sous</p>
                        <p class="top_games-table-mobile-top-row-main-text">Cleopatra ✨</p>
                    </div>
                    <div class="top_games-table-mobile-bottom-row">
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Rouleaux</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">5</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Lignes de paiement</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">20</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Fournisseur</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">IGT</p>
                        </div>
                    </div>
                </div>
                <div class="top_games-table-mobile-point">
                    <div class="top_games-table-mobile-top-row">
                        <p class="top_games-table-mobile-top-row-span">Machine à sous</p>
                        <p class="top_games-table-mobile-top-row-main-text">Spartacus Gladiator of Rome ⚔️</p>
                    </div>
                    <div class="top_games-table-mobile-bottom-row">
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Rouleaux</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">10</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Lignes de paiement</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">100</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Fournisseur</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">WMS</p>
                        </div>
                    </div>
                </div>
                <div class="top_games-table-mobile-point">
                    <div class="top_games-table-mobile-top-row">
                        <p class="top_games-table-mobile-top-row-span">Machine à sous</p>
                        <p class="top_games-table-mobile-top-row-main-text">Triple Diamond 💎</p>
                    </div>
                    <div class="top_games-table-mobile-bottom-row">
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Rouleaux</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">3</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Lignes de paiement</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">9</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Fournisseur</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">IGT</p>
                        </div>
                    </div>
                </div>
                <div class="top_games-table-mobile-point">
                    <div class="top_games-table-mobile-top-row">
                        <p class="top_games-table-mobile-top-row-span">Machine à sous</p>
                        <p class="top_games-table-mobile-top-row-main-text">50 Dragons 🐉</p>
                    </div>
                    <div class="top_games-table-mobile-bottom-row">
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Rouleaux</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">5</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Lignes de paiement</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">50</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Fournisseur</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">Aristocrat</p>
                        </div>
                    </div>
                </div>
                <div class="top_games-table-mobile-point">
                    <div class="top_games-table-mobile-top-row">
                        <p class="top_games-table-mobile-top-row-span">Machine à sous</p>
                        <p class="top_games-table-mobile-top-row-main-text">Hot Shot Progressive 🔥</p>
                    </div>
                    <div class="top_games-table-mobile-bottom-row">
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Rouleaux</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">5</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Lignes de paiement</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">40</p>
                        </div>
                        <div class="top_games-table-mobile-bottom-row-point">
                            <p class="top_games-table-mobile-bottom-row-span">Fournisseur</p>
                            <p class="top_games-table-mobile-bottom-row-main-text">Bally</p>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $table_list__posts = get_field('home-top_games-table_list');
            if ($table_list__posts) : ?>
                <ul class="top_games-list-container">
                    <?php foreach ($table_list__posts as $post) :
                        setup_postdata($post); ?>
                        <li class="top_games-list-point">
                            <p class="top_games-list-main-text"><?php the_field('list_title'); ?></p>
                            <?php echo str_replace('<p>', '<p class="top_games-list-second-text">', get_field('list_text')); ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <?php
                wp_reset_postdata(); ?>
            <?php endif; ?>

            <div class="top_games-slider wrapper">
                <div class="top_games-slider-text">Рекомендуем поиграть</div>
                <div class="swiper">
                    <div class="swiper-container" data-type="topGamesSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">Lotus Land</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_2.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_3.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_4.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_5.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_6.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">Lotus Land</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_2.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_3.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_4.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_5.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <div class="game_cards-point-image-container">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_6.png" alt="cards image" class="game_cards-point-image" />
                                        <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
                                    </div>
                                    <p class="swiper-slide-text">1000 игр</p>
                                    <p class="swiper-slide-main-text">China Shores</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sw-nav">
                    <button class="sw-prev"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_left.svg" alt="prev image" class="sw-prev-image" /></button>
                    <button class="sw-next"><img src="<?php bloginfo('template_url'); ?>/assets/img/arrow_vector_right.svg" alt="next image" class="sw-next-image" /></button>
                </div>
                <div class="sw-pag"></div>
            </div>
        </div>
    </div>
</section>

<section class="free_games">
    <div class="free_games-content wrapper">
        <div class="free_games-container">
            <p class="free_games-main-text"><?php the_field('home-free_games-title'); ?></p>
            <p class="free_games-second-text"><?php the_field('home-free_games-text'); ?></p>
            <div class="free_games-cards-container">
                <div class="free_games-card">
                    <p class="free_games-card-main-text"><span data-type="free"><?php the_field('home-free_games-block_1-type'); ?></span><?php the_field('home-free_games-block_1-title'); ?></p>

                    <?php
                    $table_list__posts = get_field('home-free_games-block_1-list');
                    if ($table_list__posts) : ?>
                        <ul class="free_games-card-list-container">
                            <?php foreach ($table_list__posts as $post) :
                                setup_postdata($post); ?>
                                <li class="free_games-card-list-point">
                                    <?php the_field('free_games-list-point'); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <div class="free_games-card-color-container">
                        <p class="free_games-card-color-main-text"><?php the_field('home-free_games-block_1-colour_block-title'); ?></p>
                        <p class="free_games-card-color-second-text"><?php the_field('home-free_games-block_1-colour_block-text'); ?></p>
                    </div>
                </div>
                <div class="free_games-card" data-type="yellow">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/index/ind_free_games_icon_2.svg" alt="" class="free_games-bg" />
                    <p class="free_games-card-main-text"><span data-type="money"><?php the_field('home-free_games-block_2-type'); ?></span><?php the_field('home-free_games-block_2-title'); ?></p>

                    <?php
                    $table_list__posts = get_field('home-free_games-block_2-list');
                    if ($table_list__posts) : ?>
                        <ul class="free_games-card-list-container">
                            <?php foreach ($table_list__posts as $post) :
                                setup_postdata($post); ?>
                                <li class="free_games-card-list-point">
                                    <?php the_field('free_games-list-point'); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="jackpot">
    <div class="jackpot-content wrapper">
        <div class="jackpot-container">
            <div class="jackpot-image-container">
                <img src="<?php the_field('home-jackpot_2-image'); ?>" alt="jackpot image" class="jackpot-image" />
            </div>
            <div class="jackpot-text-container">
                <p class="jackpot-main-text"><?php the_field('home-jackpot_2-title'); ?> <span class="jackpot-color-main-text"><?php the_field('home-jackpot_2-title_green'); ?></span></p>
                <p class="jackpot-text"><?php the_field('home-jackpot_2-text_1'); ?></p>
                <p class="jackpot-text"><?php the_field('home-jackpot_2-text_2'); ?></p>
                <p class="jackpot-text"><?php the_field('home-jackpot_2-text_3'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="any_devices">
    <div class="any_devices-content wrapper">
        <div class="any_devices-container">
            <div class="any_devices-list-container">
                <div class="any_devices-list-content">
                    <p class="any_devices-list-main-text"><?php the_field('home-any_devices-title'); ?></p>
                    <p class="any_devices-list-second-text"><?php the_field('home-any_devices-text_1'); ?></p>

                    <?php
                    $table_list__posts = get_field('home-any_devices-list');
                    if ($table_list__posts) : ?>
                        <ul class="any_devices-list">
                            <?php foreach ($table_list__posts as $post) :
                                setup_postdata($post); ?>
                                <li class="any_devices-list-point">
                                    <p class="any_devices-list-point-main-text"><?php the_field('home-any_devices-list-title'); ?></p>
                                    <p class="any_devices-list-point-second-text"><?php the_field('home-any_devices-list-text'); ?></p>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        wp_reset_postdata(); ?>
                    <?php endif; ?>

                </div>
                <img src="<?php the_field('home-any_devices-image'); ?>" alt="devices image" class="any_devices-list-image" />
            </div>
            <p class="any_devices-second-text"><?php the_field('home-any_devices-text_2'); ?></p>
            <p class="any_devices-second-text"><?php the_field('home-any_devices-text_3'); ?></p>
        </div>
    </div>
</section>

<section class="main_features">
    <div class="main_features-content wrapper">
        <div class="main_features-container">
            <p class="main_features-main-text"><?php the_field('home-main_features-title'); ?></p>
            <?php echo str_replace('<p>', '<p class="main_features-second-text">', get_field('home-main_features-text')); ?>
            <div class="main_features-cards-container">

                <?php
                $main_features__list__posts = get_field('home-main_features-list');
                if ($main_features__list__posts) : ?>
                    <?php foreach ($main_features__list__posts as $post) :
                        setup_postdata($post); ?>
                        <div class="main_features-card">
                            <p class="main_features-card-main-text"><?php the_field('main-features-list-title'); ?></p>
                            <p class="main_features-card-second-text"><?php the_field('main-features-list-text'); ?></p>
                        </div>
                    <?php endforeach; ?>
                    <?php
                    wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>
            <div class="main_features-long-card">
                <p class="main_features-long-card-main-text"><?php the_field('home-main_features-long_card-title'); ?></p>
                <p class="main_features-long-card-second-text"><?php the_field('home-main_features-long_card-text'); ?></p>
                <ul class="main_features-long-card-list">
                    <?php echo str_replace('<p>', '<li class="main_features-long-card-list-point">', str_replace('</p>', '</li>', get_field('home-main_features-long_card-list'))); ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="faq-content wrapper">
        <div class="faq-container">
            <div class="faq-list-container">
                <p class="faq-list-main-text"><?php the_field('home-faq-title'); ?></p>
                <ul class="faq-list-content">

                    <?php
                    $home_faq__posts = get_field('home-faq-list');
                    if ($home_faq__posts) : ?>
                        <?php foreach ($home_faq__posts as $post) :
                            setup_postdata($post); ?>
                            <li class="faq-list-point">
                                <div class="faq-list-point-main-text-container">
                                    <span class="faq-list-point-main-text-button"></span>
                                    <p class="faq-list-point-main-text"><?php the_field('faq-list-title'); ?></p>
                                </div>
                                <div class="faq-list-point-second-text-container">
                                    <p class="faq-list-point-second-text"><?php the_field('faq-list-text'); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        <?php
                        wp_reset_postdata(); ?>
                    <?php endif; ?>

                </ul>
            </div>
            <img src="<?php the_field('home-faq-image'); ?>" alt="faq image" class="faq-image" />
        </div>
    </div>
</section>

<?php get_footer(); ?>