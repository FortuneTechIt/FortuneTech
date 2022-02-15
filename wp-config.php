<?php
define('WP_CACHE', true);
/**
 * WordPress için başlangıç ayar dosyası.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * Bu dosya şu ayarları içerir:
 * 
 * * MySQL ayarları
 * * Gizli anahtarlar
 * * Veritabanı tablo ön eki
 * * ABSPATH
 * 
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri servis sağlayıcınızdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'u0046360_ftechh' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'u0046360_ftechh' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', 'SQtu50V0NKck89A' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define( 'DB_COLLATE', '' );

/**#@+
 * Eşsiz doğrulama anahtarları ve tuzlar.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'N;jV%r2[g-[ ;RNn%b,>1BlB#ec(z)R?cJ_|,%_V8D`ITuEV22qIG~B}DPo+rJ3 ' );
define( 'SECURE_AUTH_KEY',  'pSm[d,W%)SuANjg$TA:lRiqMS`UA6(QAzZ0Q-5nD/hz8eo6410635NYjB?8|LjJk' );
define( 'LOGGED_IN_KEY',    'v1kax!_lQCJ~,gx+h(c+N=.i <%(c~uo%]b2)yvtgAOZL7b;@+^Y]5{bb@{.6+4M' );
define( 'NONCE_KEY',        '})^dBWap[1i>Lg6.QtK!W{dvNu&qA`r0h}x}BYc<r@%/Z7u2jK#H:^7%]+J3wp1x' );
define( 'AUTH_SALT',        'o5d8J0^#ZL|uV(S5`8(H9~DR86a Om H^KspO8 3-,Q[]Ddg:eU[8inws2e>w{K%' );
define( 'SECURE_AUTH_SALT', 'WRyBeq&KMV!_FL|Xh|Qy?Q&apI<0izen+ZCCIo9$d`$CmR lfB;IILV3v:9{fSt5' );
define( 'LOGGED_IN_SALT',   'sOYvd/=$mDvl&Mn08heuTNfKZ -X.CS/r04(8-WyJK-[m7ci>dG@RbT*5R|}{A<n' );
define( 'NONCE_SALT',       '_dG8XRz61GIcVc4TS[ Fla}-5%12_Vd=3|$Ab?#mG#&{%;q8Vf>RkCho:]&m~&;(' );

/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'ft_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 * 
 * Hata ayıklama için kullanabilecek diğer sabitler ile ilgili daha fazla bilgiyi
 * belgelerden edinebilirsiniz.
 * 
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** WordPress değişkenlerini ve yollarını kurar. */
require_once ABSPATH . 'wp-settings.php';