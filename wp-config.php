<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_jeuxcasino' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'csWh=l5mhl$Hkw?7Y[P^Rs#_uEq}:}/zh*(-*#*gVbR&RIrkZUmLolDDFR%_q-by' );
define( 'SECURE_AUTH_KEY',  'h~)oZ<9H*k4_bfDuFYW?G:8G2{n!UIXP0.Mb_-^_%U`su/DnvcEbXga`b_ODh(t2' );
define( 'LOGGED_IN_KEY',    '[+%u1$}`+:M=/)0Cy7 ^[r?2wewK#t>S#e<R~Yu *{^c(!)s*@r^hFjKVbu#&XRv' );
define( 'NONCE_KEY',        'l!gVhM&!]Z9?dFAq^fa%F #w:}D/p3w<=>@)ckWDKS3tZ9G%zKnc;7G>?fnlLv}/' );
define( 'AUTH_SALT',        'Wh*BaD*:+_[jn05/]8ndD^M3m/ L 5:9s*a>K1&B%`Pg=V3?-6sB;|^FoqMJxhVi' );
define( 'SECURE_AUTH_SALT', ' fG==n?<q j=wp|jHWjYL ve^n{yr><``-Ld]~M&?=IZQie{k|Ew?<bl[`Fr2b|d' );
define( 'LOGGED_IN_SALT',   'OXR>ca#g=8H2SDKB4G|<w4<T)ITwE!qzZ:SNRu[aw5tl?n8$GWWtua*[!B)gZX9^' );
define( 'NONCE_SALT',       'i^b>[fSkU4]!^vHj[wb7]6&iib^fv>H%b<Qxl~84h/LiW &|72P:t>wH,a:!1},(' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
