<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'acc01467_db');

/** Имя пользователя MySQL */
define('DB_USER', 'acc01467_db');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'U4XP7jXw');

/** Имя сервера MySQL */
define('DB_HOST', 'acc01467.mysql.ukraine.com.ua');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ft29I23[pR]/mSWq*0CwXIKY6f_VBBcC-LGB>U`9|,wC+Nj<@c!R* |(D$_-*!+$');
define('SECURE_AUTH_KEY',  '~V0{h1bgB`09-<)N[^;m%Owhf4UbqD;82P zP{][$pW<{88Q?}Jo[u*+^brgVe+m');
define('LOGGED_IN_KEY',    '4b-LG7:R$7YnWG]!dQ&&ngp1>6?Xq(Bn?Wcxzj3R3+@f_y~F7&aY:3}ZcVu&*@-!');
define('NONCE_KEY',        ' r%P`V.U)je~^p)XTflu;]mKL[LLp5E:RkVcA]XEoS+g4@C>+X|E5B[K1k4Rg`eF');
define('AUTH_SALT',        '{:<!?`%H50+2%~4+(f0!|SIm|3bd(_ijz E|TJT;!=Z^AIS]ojq@e*yipTZ2L@`k');
define('SECURE_AUTH_SALT', '#|*d,7=MV+|:UD>O[$4p;BR@|RQJM>sa(&rj2?+=@F8|$-Og~j[YF043V{i.,]>h');
define('LOGGED_IN_SALT',   '7T2F:niU$y0f,?x#$r?qfC*jbq;8,qw6EV6HsNwHTzZ}-,$GG!D_w@2jkmAd[j z');
define('NONCE_SALT',       '$/W$1I7EK|{:<d|C9_=JoA/|$M#3/IvS# IU2-t_du|5VL/aU$$QuPP0uNLXl*^;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
