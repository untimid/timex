<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'VG-LYE>X6].Np0Z,ZN{3z@rA$mS#B22^cvpAjG0C@~Zh5xH@t+woeFP/}Zjg:xrB');
define('SECURE_AUTH_KEY',  'S+10u,7,Vd@^I{r%j@c;uOJuTL:tp2=/s?lRx.K9L6xwe>U`}% ]V?#kxGhIO83<');
define('LOGGED_IN_KEY',    'm2O,#b%,`x{)m:aBzD9#+M2z0sg%z~|2jBJZ~9EUsGo5%W[$2t}rEiY%ToQ4oU`S');
define('NONCE_KEY',        'XG+F6cZa@{g9=VkldIX U`Tsh;{=|;~M|)yY&k@q3_/7@=5CKSD@`!`HO.`R w3U');
define('AUTH_SALT',        'OmXA5(a-3d0m@0BRw(/t.d`47{%i#r<t(C|._VLpym;O3Z1Y;l5m#k9;/4ejY-M4');
define('SECURE_AUTH_SALT', '=6UvV;Hk}e}2bF@a53vb/(4F=2wLU[C?^Yj]qxZ*VkpPi;I[,Db-O;lAB:4rCgF(');
define('LOGGED_IN_SALT',   'Xo~FH!:Xozw!Ip!G-iwO/Goz%/e3MN,@%J[f*fYu2H:lU_8x@N&W8.*gGqg_YIT&');
define('NONCE_SALT',       '7!]LM@Io$cf#~XB,5q#,&5M%{vk8X~ ${PT{0&n!V=2$9,-0R7_x$oMR<R34#G|?');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
