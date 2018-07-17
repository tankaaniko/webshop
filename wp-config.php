<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'webshop');

/** MySQL felhasználónév */
define('DB_USER', 'root');

/** MySQL jelszó. */
define('DB_PASSWORD', '');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8mb4');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'I]6^XrX-MY=)2im<d(2Rk3?0aSwgf,=LGwf;.<f[d8n&=N|Uy(30GmnYEN.5sa!z');
define('SECURE_AUTH_KEY', 'y5$|GWn-05Jvp/:NcFx#P.>B?o|/e+J:7klOr7>Ly_0nwCp3]q~ eLit?9UkRX^b');
define('LOGGED_IN_KEY', 'C|t%9m= x)g 09ljyXI%RO}?OnpD/$MaF#p5myj)_A;kGpovPM :;- Q);OrWlV8');
define('NONCE_KEY', '-`#?0>Ny70O}v01C >/xy?}fvU,H@rWMx[09 ::ZUzF$M6nv[umIzdvuEq)@*xA:');
define('AUTH_SALT',        '9:VK!2Cu|[q8Zw]K|{S9,c -| .IP`dH}Pg~3Z3e-JnM:LA)5%:<Lo>/[Nkz!Tj ');
define('SECURE_AUTH_SALT', 'cAtZ6aBzyn9>F>i2=Vy<<WPI$BOMGJ,TcYsoR!whm6gWu<X>(()6@$TtZj!%:8}W');
define('LOGGED_IN_SALT',   'V)P`MP1R~>m9fRg Sx}[>5WH4 ~+SMhBr,5S*Sqa*R)f(_d.Wc+m*#V)~Wx>5%9]');
define('NONCE_SALT',       'oofPz07J@%bN;4nIxR=Tive7KhOwrOmz^*ON%s)7]@{9[P16w;[aPc4jRhg,Kq` ');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
