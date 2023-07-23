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
            <img src="<?php bloginfo('template_url'); ?>/assets/img/index/ind_banner_1.png" alt="index banner image" class="banner_sort-image" />
            <img src="<?php bloginfo('template_url'); ?>/assets/img/index/ind_banner_1_mobile.png" alt="index banner image" class="banner_sort-image-mobile" />
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
        <div class="game_cards-container">

            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => 18,
                // 'offset'      => 1,
                // 'category'    => 1
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>

                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->

                    <div class="game_cards-point">
                        <div class="game_cards-point-image-container">
                            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="cards image" class="game_cards-point-image" /> -->
                            <?php the_post_thumbnail(
                                array(209, 172),
                                array(
                                    'class' => 'game_cards-point-image'
                                )
                            ); ?>
                            <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                                <p class="game_cards-point-text-star-number">4.9</p>
                            </div>
                            <p class="game_cards-point-text-second"><?php the_content(); ?></p>
                            <p class="game_cards-point-text-main"><?php the_title(); ?></p>
                        </div>
                    </div>

            <?php }
            }
            wp_reset_postdata(); // Сбрасываем $post 
            ?>

        </div>
        <div class="game_cards-container disactive" data-type="moreCards">
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_2.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_3.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_4.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_5.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_6.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_2.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_3.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_4.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_5.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_6.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_2.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_3.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_4.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_5.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
            <div class="game_cards-point">
                <div class="game_cards-point-image-container">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_6.png" alt="cards image" class="game_cards-point-image" />
                    <div class="game_cards-point-image-button-container"><button class="game_cards-point-image-button">Play Now</button></div>
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
                        <p class="game_cards-point-text-star-number">4.9</p>
                    </div>
                    <p class="game_cards-point-text-second">Эйнсворт</p>
                    <p class="game_cards-point-text-main">Lotus Land</p>
                </div>
            </div>
        </div>
        <button class="game_cards-button-more active"><span class="game_cards-button-more-text"> Показать еще больше </span></button>
    </div>
</section>

<section class="comment_instruction">
    <div class="comment_instruction-content wrapper">
        <div class="comment_instruction-container">
            <div class="comment_instruction-text-and-image-container">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/ind_com_inst_image_1.png" alt="instruction image bg" class="comment_instruction-bg-image" />

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
                <img src="<?php bloginfo('template_url'); ?>/assets/img/jackpot.png" alt="jackpot image" class="jackpot-image" />
            </div>
            <div class="jackpot-text-container">
                <p class="jackpot-main-text">Jeux gratuits et jeu en</p>
                <p class="jackpot-color-text">ligne légal</p>
                <p class="jackpot-text">Le jeu de casino en ligne n'est pas légal partout. Vous pourriez donc vous inquiéter de jouer aux machines à sous gratuites.</p>
                <p class="jackpot-second-text">
                    Nous avons de bonnes nouvelles: vous pouvez jouer aux meilleurs jeux de machines à sous gratuites pour le plaisir sans vous soucier de la loi. Tant que vous ne misez pas d'argent réel,
                    ce n'est pas techniquement du jeu d'argent.
                </p>
                <p class="jackpot-text">Cependant, si vous passez un jour aux jeux d'argent réel, il est bon de connaître les lois sur les jeux d'argent en ligne en France.</p>
            </div>
        </div>
    </div>
</section>

<section class="top_games">
    <div class="top_games-content wrapper">
        <div class="top_games-container">
            <div class="top_games-main-text-container">
                <p class="top_games-main-text">Nos cinq meilleurs jeux de casino gratuits en France en 2023</p>
                <p class="top_games-date">updated today at 18:00</p>
            </div>
            <p class="top_games-second-text">
                Avec plus de 8000 jeux gratuits en ligne parmi lesquels choisir ici à JeuxGratuits, vous vous demandez peut-être par où commencer. Nous avons rassemblé nos titres préférés ci-dessous, afin
                que vous puissiez commencer en un rien de temps avec nos cinq meilleurs jeux de machines à sous gratuits sans téléchargement:
            </p>
            <table class="top_games-table">
                <tr class="top_games-header-row">
                    <th class="top_games-header-row-element">Machine à sous</th>
                    <th class="top_games-header-row-element">Rouleaux</th>
                    <th class="top_games-header-row-element">Lignes de paiement</th>
                    <th class="top_games-header-row-element">Fournisseur</th>
                </tr>
                <tr class="top_games-row">
                    <td class="top_games-row-element">Cleopatra ✨</td>
                    <td class="top_games-row-element">5</td>
                    <td class="top_games-row-element">20</td>
                    <td class="top_games-row-element">IGT</td>
                </tr>
                <tr class="top_games-row">
                    <td class="top_games-row-element">Spartacus Gladiator of Rome ⚔️</td>
                    <td class="top_games-row-element">10 (5 principaux, 5 colossaux)</td>
                    <td class="top_games-row-element">100</td>
                    <td class="top_games-row-element">WMS</td>
                </tr>
                <tr class="top_games-row">
                    <td class="top_games-row-element">Triple Diamond 💎</td>
                    <td class="top_games-row-element">3</td>
                    <td class="top_games-row-element">9</td>
                    <td class="top_games-row-element">IGT</td>
                </tr>
                <tr class="top_games-row">
                    <td class="top_games-row-element">50 Dragons 🐉</td>
                    <td class="top_games-row-element">5</td>
                    <td class="top_games-row-element">50</td>
                    <td class="top_games-row-element">Aristocrat</td>
                </tr>
                <tr class="top_games-row">
                    <td class="top_games-row-element">Hot Shot Progressive 🔥</td>
                    <td class="top_games-row-element">5</td>
                    <td class="top_games-row-element">40</td>
                    <td class="top_games-row-element">Bally</td>
                </tr>
            </table>
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
            <ul class="top_games-list-container">
                <li class="top_games-list-point">
                    <p class="top_games-list-main-text">Cleopatra</p>
                    <p class="top_games-list-second-text">
                        Cleopatra est sur notre liste des meilleurs jeux de machines à sous gratuits, car il y a de nombreuses fonctionnalités que vous pouvez déclencher. Obtenez 3, 4, ou 5 symboles scatter
                        et vous pouvez obtenir jusqu'à 15 tours gratuits. Tous les gains pendant le Bonus Cleopatra bénéficient également d'un multiplicateur x3.
                    </p>
                    <p class="top_games-list-second-text">
                        <span>Si vous aimez Cléopâtre, vous allez adorer: MegaJackpots Mistress of Egypt, également par IGT.</span>❤️ Profitez des graphismes de pointe de l'icône la plus emblématique de
                        l'Egypte antique, et des tours gratuits grâce au scarabée-jouet en pierre précieuse.
                    </p>
                </li>
                <li class="top_games-list-point">
                    <p class="top_games-list-main-text">Spartacus Gladiator of Rome</p>
                    <p class="top_games-list-second-text">
                        Ce jeu est différent des autres machines à sous gratuites en France car il dispose de deux ensembles de rouleaux. Cela vous permet de jouer sur un maximum de 100 lignes. Obtenez 3, 4
                        ou 5 symboles scatter et vous pouvez déclencher jusqu'à 20 tours gratuits, ainsi qu'un multiplicateur de 20x.
                    </p>
                    <p class="top_games-list-second-text">
                        <span>Si vous aimez Spartacus Gladiator of Rome, vous allez adorer: </span> ❤️ la machine à sous gratuite Gladiator de Playtech, un jeu basé sur un film où les symboles scatter peuvent
                        déclencher des multiplicateurs qui peuvent multiplier vos gains jusqu'à 100x.
                    </p>
                </li>
                <li class="top_games-list-point">
                    <p class="top_games-list-main-text">Triple Diamond</p>
                    <p class="top_games-list-second-text">
                        Triple Diamond est populaire auprès des fans de machines à sous classiques, et vous trouverez des symboles de rouleaux originaux tels que le BAR et le chiffre porte-bonheur 7. Le
                        gameplay est assez simple, sans tours bonus flashy. Cependant, il y a toujours un généreux gros lot - obtenez 3 symboles triple diamond sur une ligne de paiement et vous obtiendrez
                        x1199 votre mise totale.
                    </p>
                    <p class="top_games-list-second-text">
                        <span>Si vous aimez Triple Diamond, vous allez</span> ❤️ la machine à sous Da Vinci Diamonds d'IGT. Ici, vous verrez des œuvres d'art célèbres de la Renaissance et des gemmes colorées
                        tomber en cascade et vous accorder des gains grâce à la fonction Tumbling Reels.
                    </p>
                </li>
                <li class="top_games-list-point">
                    <p class="top_games-list-main-text">50 Dragons</p>
                    <p class="top_games-list-second-text">
                        Dans cette machine à sous d'Aristocrat, vous pouvez obtenir 1000x votre mise initiale si vous obtenez 5 lions dorés sur une ligne de paiement. Obtenez 3 symboles Scatter et vous
                        déclencherez la fonction de jeux gratuits, où vous recevrez 10 tours gratuits. Vous pouvez également relancer cette fonction où vous obtiendrez 5 tours supplémentaires pour 3 Scatters
                        supplémentaires.
                    </p>
                    <p class="top_games-list-second-text">
                        <span>Si vous aimez 50 Dragons, vous allez ❤️:️</span> les 50 Lions d'Aristocrat, surtout si les créatures mythiques ne sont pas votre truc. L'une de nos machines à sous gratuites les
                        plus populaires, 50 Lions est livrée avec une fonction de jeu et des tours gratuits.
                    </p>
                </li>
                <li class="top_games-list-point">
                    <p class="top_games-list-main-text">Hot Shot Progressive</p>
                    <p class="top_games-list-second-text">
                        Le principal point culminant de cette machine à sous est son bonus Scatter de jeu dans le jeu. Si vous obtenez 3 ou plus des symboles suivants, vous activerez le bonus: Blazing 7s,
                        Diamond Line, Double Jackpot, Triple Jackpot et Seven Times Pay. Et même si vous n'avez pas de chance la première fois, vous continuerez à jouer à la fonction de jeu dans le jeu
                        jusqu'à ce que vous marquiez une victoire.
                    </p>
                    <p class="top_games-list-second-text">
                        <span>Si vous aimez Hot Shot Progressive, vous ❤️:️</span> Blazing Clusters de Red Tiger Gaming. Sorti en 2021, c'est une nouvelle machine à sous en ligne par rapport au classique de
                        Bally. Les fans, cependant, adoreront les vibrations rétro et la fonction Wild Rush.
                    </p>
                </li>
            </ul>
            <div class="top_games-slider wrapper">
                <div class="top_games-slider-text">Рекомендуем поиграть</div>
                <div class="swiper">
                    <div class="swiper-container" data-type="topGamesSlider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-slide-container">
                                    <!-- <div class="swiper-slide-container">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="slider image" class="swiper-slide-image" />
              <p class="swiper-slide-text">1000 игр</p>
              <p class="swiper-slide-main-text">China Shores</p>
            </div> -->
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
                                    <!-- <div class="swiper-slide-container">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/cards/card_image_1.png" alt="slider image" class="swiper-slide-image" />
              <p class="swiper-slide-text">1000 игр</p>
              <p class="swiper-slide-main-text">China Shores</p>
            </div> -->
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
            <p class="free_games-main-text">Jeux gratuits sans téléchargement vs jeux d'argent réel</p>
            <p class="free_games-second-text">
                C'est un débat aussi vieux que le tout premier casino en ligne: devez-vous jouer aux machines à sous en ligne gratuitement ou parier de l'argent réel? La seule réponse valable est qu'il
                n'y a pas de meilleur ou de pire - il y a simplement des avantages différents.
            </p>
            <div class="free_games-cards-container">
                <div class="free_games-card">
                    <p class="free_games-card-main-text"><span data-type="free">free</span>Machines à sous gratuites en ligne</p>
                    <ul class="free_games-card-list-container">
                        <li class="free_games-card-list-point">
                            Jouer gratuitement aux machines à sous en ligne vous permettra de voir si la promotion du jeu était simplement de l'hype ou si vous appréciez réellement le logiciel du jeu.
                        </li>
                        <li class="free_games-card-list-point">
                            Les machines à sous gratuites ont les mêmes mécanismes que les machines à sous d'argent réel, ce qui signifie que vous pouvez tester la plupart des fonctionnalités sans risquer votre
                            propre argent.
                        </li>
                        <li class="free_games-card-list-point">
                            Jouer gratuitement aux machines à sous de casino est le moyen idéal pour se détendre. Profitez simplement de vos jeux de machines à sous gratuits préférés en ligne comme
                            divertissement - sans vous laisser entraîner dans la recherche de gains.
                        </li>
                        <li class="free_games-card-list-point">
                            <strong>JeuxGratuits</strong> est un excellent moyen de tester la sélection de jeux dans un nouveau casino en ligne et de vous assurer que le lobby de jeux vous convient. Cela évite
                            les tracas de faire un dépôt en espèces au casino.
                        </li>
                    </ul>
                    <div class="free_games-card-color-container">
                        <p class="free_games-card-color-main-text">À JeuxGratuits.Casino, nous aimons jouer aux machines à sous de casino de deux manières.</p>
                        <p class="free_games-card-color-second-text">
                            Les deux se complètent. Même si vous êtes un joueur d'argent réel acharné qui essaie de gagner de l'argent, il y a des moments où vous devriez envisager de jouer gratuitement aux
                            machines à sous en ligne.
                        </p>
                    </div>
                </div>
                <div class="free_games-card" data-type="yellow">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/index/ind_free_games_icon_2.svg" alt="" class="free_games-bg" />
                    <p class="free_games-card-main-text"><span data-type="money">money</span>Machines à sous en ligne réelles</p>
                    <ul class="free_games-card-list-container">
                        <li class="free_games-card-list-point">
                            <strong>Jouer pour de l'argent réel signifie gagner de l'argent réel ! </strong>Lorsque vous jouez aux machines à sous dans un casino en ligne, vous avez la chance de remporter des
                            prix en espèces que vous ne pourriez pas obtenir en jouant à des jeux gratuits sans téléchargement de machines à sous.
                        </li>
                        <li class="free_games-card-list-point">
                            Les casinos en ligne offrent des centaines de jeux de machines à sous, ainsi que de nombreuses offres intéressantes, telles que des tours gratuits ou des codes de bonus sans dépôt.
                            Vous pouvez utiliser l'argent du bonus de casino pour jouer aux machines à sous en ligne gratuitement mais gagner de l'argent réel.
                        </li>
                        <li class="free_games-card-list-point">
                            Les célèbres jeux de jackpot progressif ne sont pas disponibles en tant que machines à sous gratuites pour jouer pour le plaisir. Si vous effectuez un dépôt en espèces, vous pouvez
                            jouer à ces machines à sous exclusives pour de l'argent réel, comme Mega Moolah et Mega Fortune. Cela signifie également que vous avez une chance de remporter les prix du jackpot !
                        </li>
                        <li class="free_games-card-list-point">
                            Les machines à sous sont les jeux de casino en ligne les plus joués, bien plus que le blackjack, la roulette ou tout autre jeu de casino en ligne. Cela signifie également qu'il y en
                            a plus - des milliers en fait. Cela signifie que vous aurez toujours une variété de machines à sous en argent réel à choisir dans les casinos en ligne.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="jackpot">
    <div class="jackpot-content wrapper">
        <div class="jackpot-container">
            <div class="jackpot-image-container">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/jackpot_2.svg" alt="jackpot image" class="jackpot-image" />
            </div>
            <div class="jackpot-text-container">
                <p class="jackpot-main-text">Jouez gratuitement aux jeux de casino en ligne sur nos sites <span class="jackpot-color-main-text">recommandés</span></p>
                <p class="jackpot-text">
                    Bien que nous soyons les meilleurs sur le web en ce qui concerne les machines à sous et les jeux gratuits, vous voudrez peut-être jouer aux machines à sous pour vous amuser sur l'un de
                    nos sites de casino les mieux notés. C'est parfait lorsque vous voulez passer à un jeu en argent réel. De cette façon, vous pouvez tester le casino et décider s'il offre les jeux sur
                    lesquels vous voudriez parier votre argent durement gagné.
                </p>
                <p class="jackpot-text">
                    Vous devrez créer un compte sur votre casino en ligne choisi. Cela est simple et vous n'avez pas à soumettre de détails financiers pour jouer à vos machines à sous gratuites préférées.
                    Si vous envisagez de passer à un jeu en argent réel, vous pouvez visiter un casino à dépôt minimum et faire tourner les machines à sous pour aussi peu que 10€ et avoir la chance de
                    gagner des millions.
                </p>
                <p class="jackpot-text">
                    <strong>Voici un grand conseil de notre part:</strong> ne vous inscrivez pas au premier casino en ligne que vous trouvez sur votre navigateur de recherche. Nous recommandons les
                    meilleurs casinos en ligne qui vous permettront de jouer en toute sécurité à des jeux gratuits.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="any_devices">
    <div class="any_devices-content wrapper">
        <div class="any_devices-container">
            <div class="any_devices-list-container">
                <div class="any_devices-list-content">
                    <p class="any_devices-list-main-text">Jouez à des jeux de casino gratuits sur n'importe quel appareil que vous souhaitez</p>
                    <p class="any_devices-list-second-text">
                        Une des avancées des machines à sous gratuites en ligne est qu'elles ne sont plus réservées aux utilisateurs de bureau Windows. Les jeux sont disponibles pour jouer sur les ordinateurs
                        Mac et Linux également. Vous pouvez également jouer sur des téléphones portables avec différents systèmes d'exploitation. Les meilleurs appareils pour faire tourner les machines à sous
                        gratuites en action comprennent:
                    </p>
                    <ul class="any_devices-list">
                        <li class="any_devices-list-point">
                            <p class="any_devices-list-point-main-text">Téléphones Android:</p>
                            <p class="any_devices-list-point-second-text">
                                Les dernières gammes de smartphones de Samsung sont parfaits pour jouer aux machines à sous gratuites. Cela inclut les modèles de la série Galaxy A à prix abordable et les modèles
                                élégants de la série Galaxy S.
                            </p>
                        </li>
                        <li class="any_devices-list-point">
                            <p class="any_devices-list-point-main-text">iPhone:</p>
                            <p class="any_devices-list-point-second-text">
                                Les derniers modèles d'Apple, comme l'iPhone 14 pro max, ont une puissante autonomie de batterie, vous permettant de jouer aux machines à sous gratuites en ligne aussi longtemps
                                que vous le souhaitez.
                            </p>
                        </li>
                        <li class="any_devices-list-point">
                            <p class="any_devices-list-point-main-text">Tablettes:</p>
                            <p class="any_devices-list-point-second-text">
                                Les tablettes Samsung et les iPad sont dotés d'écrans plus grands, ce qui est toujours un plus lorsque vous jouez à des jeux gratuits sur le web.
                            </p>
                        </li>
                    </ul>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/index/ind_any_devices_image_1.svg" alt="devices image" class="any_devices-list-image" />
            </div>
            <p class="any_devices-second-text">
                Cependant, si vous préférez jouer à des jeux de casino gratuits depuis votre ordinateur à domicile, ne vous sentez pas comme si vous manquiez quelque chose. La vérité est que les jeux de
                casino gratuits ont souvent une meilleure apparence sur un grand écran de moniteur.
            </p>
            <p class="any_devices-second-text">
                Le site JeuxGratuits.Casino vous promet une expérience exceptionnelle de jeu, quelle que soit votre méthode de jeu. Vous pouvez jouer à tous nos jeux de machines à sous gratuits sans
                téléchargement ni inscription nécessaire sur ordinateur, mobile et tablette.
            </p>
        </div>
    </div>
</section>

<section class="main_features">
    <div class="main_features-content wrapper">
        <div class="main_features-container">
            <p class="main_features-main-text">Les principales caractéristiques des jeux en ligne gratuits que vous devez connaître</p>
            <p class="main_features-second-text">
                Jouer aux machines à sous gratuites pour le plaisir vous donne une meilleure idée du jeu de casino en question. Bien que les machines à sous soient un jeu de hasard avec des résultats
                aléatoires, elles ont différentes façons de gagner, des jeux bonus différents, des nombres de symboles variables et des jackpots différents.
            </p>
            <p class="main_features-second-text">
                Il y a des caractéristiques des machines à sous que vous devez prendre en compte lorsque vous cherchez votre prochaine meilleure machine à sous en ligne. Ces caractéristiques incluent les
                symboles wild (jokers), qui remplacent d'autres symboles pour toucher des combinaisons gagnantes, les symboles scatter (dispersés), qui activent des tours gratuits et des tours bonus, et
                les multiplicateurs, qui multiplient vos gains pour rendre votre paiement final beaucoup plus agréable.
            </p>
            <p class="main_features-second-text"><strong>Vous pouvez en savoir plus sur les principales caractéristiques des machines à sous gratuites avec notre glossaire ici:</strong></p>
            <div class="main_features-cards-container">
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Combinaison Gagnante</p>
                    <p class="main_features-card-second-text">Une combinaison de symboles qui permet de gagner un prix.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Jackpot</p>
                    <p class="main_features-card-second-text">Le plus gros prix qu'un joueur peut gagner à un jeu de machine à sous.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Jackpot Progressif</p>
                    <p class="main_features-card-second-text">Un jackpot qui continue de croître lorsque plus de joueurs font tourner une machine en particulier.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Ligne de Paiement</p>
                    <p class="main_features-card-second-text">Ligne de gain établie sur une machine à sous.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Rouleaux</p>
                    <p class="main_features-card-second-text">Les colonnes verticales d'une machine à sous en ligne. Chaque rouleau tourne indépendamment des autres.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Mode Automatique (ou Auto-play)</p>
                    <p class="main_features-card-second-text">Un paramètre de machine à sous qui permet au jeu de tourner automatiquement, sans que vous ayez besoin d'appuyer sur le bouton spin.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Tours Gratuits</p>
                    <p class="main_features-card-second-text">Un bonus qui permet au joueur de bénéficier de tours supplémentaires, sans avoir à placer de paris eux-mêmes.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Symboles</p>
                    <p class="main_features-card-second-text">Il s'agit des images qui recouvrent les rouleaux d'une machine à sous. Ils suivent généralement un thème.</p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Scatter Symbole</p>
                    <p class="main_features-card-second-text">
                        Ce symbole apparaît aléatoirement n'importe où sur les rouleaux. Il vous permet d'activer une combinaison gagnante, sans être sur une ligne de paiement.
                    </p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Jeux Bonus</p>
                    <p class="main_features-card-second-text">
                        Un mini-jeu qui apparaît à côté du jeu principal de la machine à sous gratuite. Il vous permet de gagner des prix supplémentaires ou des jackpots.
                    </p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Multiplicateur</p>
                    <p class="main_features-card-second-text">
                        Un symbole spécial qui peut multiplier considérablement vos gains pendant le jeu. Les multiplicateurs peuvent avoir de petites valeurs comme « x5 », mais peuvent aller jusqu'à « x100
                        ».
                    </p>
                </div>
                <div class="main_features-card">
                    <p class="main_features-card-main-text">Fonctionnalité de jeu</p>
                    <p class="main_features-card-second-text">Un jeu de "double ou rien" qui offre aux joueurs la chance de doubler leurs gains.</p>
                </div>
            </div>
            <div class="main_features-long-card">
                <p class="main_features-long-card-main-text">Symbole Wild</p>
                <p class="main_features-long-card-second-text">
                    C'est comme une carte joker, qui se substituera à d'autres symboles pour compléter des combinaisons gagnantes. Il existe différents types de symboles wilds:
                </p>
                <ul class="main_features-long-card-list">
                    <li class="main_features-long-card-list-point">
                        <strong>Wild collant:</strong> Ce symbole reste « gelé » sur les rouleaux pendant plusieurs tours. Le joueur bénéficie de ses effets pendant quelques tours.
                    </li>
                    <li class="main_features-long-card-list-point">
                        <strong>Wild expansif:</strong> Un seul symbole wild qui, au fur et à mesure du jeu, se répand sur les rouleaux, augmentant ainsi vos chances de gagner des prix.
                    </li>
                    <li class="main_features-long-card-list-point">
                        <strong>Avalanche sauvage (ou cascades sauvages):</strong> Il s'agit d'une séquence de sauvages qui tombent sur les rouleaux en cascade, ce qui vous permet de gagner des prix
                        supplémentaires
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="faq-content wrapper">
        <div class="faq-container">
            <div class="faq-list-container">
                <p class="faq-list-main-text">FAQ sur les jeux gratuits</p>
                <ul class="faq-list-content">
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Les jeux gratuits sont-ils vraiment gratuits?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Où trouver des jeux gratuits?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Quels jeux de machines à sous puis-je jouer gratuitement?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Dois-je télécharger pour jouer à des jeux gratuits?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Les jeux gratuits sont-ils identiques aux jeux de machines à sous en argent réel?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Quels sont les jeux de machines à sous gratuits les plus populaires?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                    <li class="faq-list-point">
                        <div class="faq-list-point-main-text-container">
                            <span class="faq-list-point-main-text-button"></span>
                            <p class="faq-list-point-main-text">Où puis-je jouer à des jeux de machines à sous gratuits?</p>
                        </div>
                        <div class="faq-list-point-second-text-container">
                            <p class="faq-list-point-second-text">
                                Далеко-далеко за словесными горами в стране гласных и согласных живут рыбные тексты. Злых щеке даль вскоре вопрос имеет речью реторический? Себя, ее?
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/faq_image_1.svg" alt="faq image" class="faq-image" />
        </div>
    </div>
</section>

<?php get_footer(); ?>