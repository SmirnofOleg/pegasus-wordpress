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
define( 'DB_NAME', 'cs08285_pegasus' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cs08285_pegasus' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123456789zaz' );

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
define( 'AUTH_KEY',         'qc?NBf=n)VW9H}O z(7bJu{sG~Z vGs(%@bx3|3+Axn%Csdi`(tuX!7smQfX*3va' );
define( 'SECURE_AUTH_KEY',  'stuZ)r)CrE{rpGb4mB(/}5U!. [H|L`?NjqvO+%(2^s0+>5lu196;.O:4g{:W:Dl' );
define( 'LOGGED_IN_KEY',    ')~kr#{G*@`Byo0q,(rb4:q2Cu?GFK`3Rw5zeKjaVv@co3oOj{ct}-Zfm`.HA{H5W' );
define( 'NONCE_KEY',        '7h0nMmCT?Y]Ikw!UNd>X=;Cwl#l*`9<y9d~qd:,4%+p]mCqA qtFAWa-0pNr2/A:' );
define( 'AUTH_SALT',        'z8c^7@U6^i.| VhNRpa.NSw|^e}@ue7,Z#ROTxOuGj%;<6vzr5bv$`>I^yKD+VmU' );
define( 'SECURE_AUTH_SALT', 'aJ]Xt4liIoOmFIM)st=9H+/ND*eY:73Pu`]{R{eG6A&QH`ok7*8$ .eJGtRd5Fyg' );
define( 'LOGGED_IN_SALT',   '7e9|{`-kzOzGV8[oSwT3K:s#yqJLG^E1KBJI%Qj|XH.u27RaK?$L=Uxa8xdQWQyD' );
define( 'NONCE_SALT',       '/r2k;ATLq$kJeOYMU}kC8yg^@!0*~u23Uf&=Mk2&V#9[)`s` !.nt%/Z_[<2K^$~' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
