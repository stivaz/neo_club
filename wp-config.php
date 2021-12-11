<?php
define("WP_CACHE", true);
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

define( 'DB_NAME', "neo_club" );


/** Имя пользователя MySQL */

define( 'DB_USER', "ceo_club_user" );


/** Пароль к базе данных MySQL */

define( 'DB_PASSWORD', "U4o9O0f5" );


/** Имя сервера MySQL */

define( 'DB_HOST', "localhost" );


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

define( 'AUTH_KEY',         'VFJf`iNK=0Ta0x0VR)b,>OcTQ$=n{0HHd0t)yb ;?{dz~:A*y1%_t=%6X%T)@^Rk' );

define( 'SECURE_AUTH_KEY',  'e>r~4%3glGCC!)[wDyp?,Q+dMYOe|nPaUKcxN/7?J}14GP]Lw50j,@/`34)x6s@@' );

define( 'LOGGED_IN_KEY',    ':_3wVL`Fsr@`1jVX>aNOstJlmzjUh<OJ&sRe>><cRy_g?,ey=kSm!X-zHla|J]bK' );

define( 'NONCE_KEY',        '0j$l|{WAECivY,7HCF(@LUN-1REYD9[51|PX;>!8M$)iQK (:W^A%:*4[+P=n{J>' );

define( 'AUTH_SALT',        'E7A`h638yKH?57kkoCpw|lgH*E$N{<n*la, ;:`j:?cEbgtZ&;#5/,NB_vp+DOGz' );

define( 'SECURE_AUTH_SALT', 'WdR:(}}Sj:d,d y/oi&z#(*K3[ceJ9K5M`FDT!ug<r>,q;Hzg2W6zGKykTZGbo|w' );

define( 'LOGGED_IN_SALT',   'Ta}MPmKux>{cT00=@;j}]#9rhEDg!p9]qnq%=)dZ6QbSoGj,`G#C|aOQqZuA*c7!' );

define( 'NONCE_SALT',       'qz7@~?Mne0A$~v4rl-Jd`l]{N(<bj83Qx>=3:p_&]lww6pH,Q$,4}OEgw]4DL:T.' );


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

define( 'WP_DEBUG', false );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

/* Это всё, дальше не редактируем. Успехов! */


/** Абсолютный путь к директории WordPress. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

}


/** Инициализирует переменные WordPress и подключает файлы. */

require_once( ABSPATH . 'wp-settings.php' );

