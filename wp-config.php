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
define('DB_NAME', 'alllancer');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'marat77O');

/** Имя сервера MySQL */
define('DB_HOST', '');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'A<gDQeI>)YS81+=DtLu?mde^<{bM<2=a$ 0H$}&/h_8nD3/p^ C|HWTZbp1r~t7R');
define('SECURE_AUTH_KEY',  'x&6h+1XbH52Y.6Gw_xd<G5el9UwP}U[;H5>UF7h|6^lKs3.KFc*m0;i!JXt5*R%E');
define('LOGGED_IN_KEY',    '9;hu!G*]?:Zoj2;ad$@u#9)I;g/PEIuGf) Z<)a:gP^E8IVIy)Q]A;7__(cQglC/');
define('NONCE_KEY',        'TDrM/@fq:4VXi;]K!6X5jPbMIJf?lmCT!WLwun:s)BDruX$BupThTo++PHwC_I2N');
define('AUTH_SALT',        'tLOHf?GVqY|9V!Af}rq|@Y,@(wr/x5-x*6NOg16NyZ}SjP@65Cf:M8[whav|Km$T');
define('SECURE_AUTH_SALT', 'W?qOJHE/A(|Rv3@L+Z(:d=2YtMcI[M517Z#9R7A=l96Z=P&9<-d/;,-A?S)TH;Rm');
define('LOGGED_IN_SALT',   'x#TTioW)%uyU:y<=h8=LMdtK`!eZj!k^%p z<0+)[DQ1!:<m|x*WQKb_$!mDa+6]');
define('NONCE_SALT',       'aT?6~g3/XjZ`Jh[)z|yKm,Xo:*4fuHK5yi;pxPoJrR~!EJ,+>bZHbrF|Te1i28|-');

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
