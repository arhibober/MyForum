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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'myforum' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Rd)q=sfe<V|ll027x;?d^P]&oH#n2yW8AVWsM_tSgl8 Dz2-W4<IIv#n A2rPLB ' );
define( 'SECURE_AUTH_KEY',  '^*ihhxPb{vYSS)]9+?i8~>YND{27n?1MVO*pj[2PI09u4yDmen$6{qr(b*Q>*f6#' );
define( 'LOGGED_IN_KEY',    'QXJxEw1[eH^_.#B1;E5OCJ{0!%K :Rinn%?LsGQ}5.f/OVvqI{jmu <Tmx<D8Vm ' );
define( 'NONCE_KEY',        'Rv@t>VWJIzpCVrO1hH.{X,/d!I#9DquiGpfexvWD!<eW^I1,ZM8K0xNfi6>|Y9C#' );
define( 'AUTH_SALT',        ':u.*siH<]<rpDs)43Z(j=CsB^-zQj%}%Jp,A&Z[qGD75%`N09|3VL/cOTjA|USvJ' );
define( 'SECURE_AUTH_SALT', '9MCKr6kvcF8gk]igSoB__svt^>d-JWS=+1`,ogw&~y[w~>0L~?4_,X!j,nWsr)a~' );
define( 'LOGGED_IN_SALT',   '/M<UZ.aXf&|r(G5Nt.3>g,*!CukZc?-IX@<%aaZIO&:eS!*k6:)&;VrPGTW5UbP&' );
define( 'NONCE_SALT',       '[FN$Lh3XHSXQR]^eW}!G.MEDCp<o+= {9UG1,ya?56!y`;b!OKMPwy<^r,<a[qrP' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
