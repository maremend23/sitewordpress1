<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'easypharm1' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_zi0Hx_fJ%7QI!e(ox`8@PdIK46hL[d</J7Hd!TRY +f]a;UzI=NGmFuah4dt{p$' );
define( 'SECURE_AUTH_KEY',  'SaO~nl?3;=o)(ta=3eh}+|,WF6A~2$/=c/Zn*?sQ5WK,TC+^>/$>hC,2t*Es8DZz' );
define( 'LOGGED_IN_KEY',    ']mXo6vg55;W;fJxJbS*S:ACVL0[j^;U%*|Q2<A%S.}>j~e%HRO7nhNOC@9p]gMeA' );
define( 'NONCE_KEY',        'kkI!9#UyI2S7GY7.{6?c+u~_dwI|[4P*|/1?e,kNP)z|Hz~~0TQxh XShg]H/R*B' );
define( 'AUTH_SALT',        'Ui&kwX:r|v1JqL)flNLqQn;$M&<ZpGq^QHJU|eO::.0z`7^DL;_-3z1)?_bJ`vqt' );
define( 'SECURE_AUTH_SALT', '&n;$J7R.1S#.GyaZmL%$Ci4ASa,wyl=>ZYGiY;,,|Ny_wZ_E[?S?8pho_Y2=W|2X' );
define( 'LOGGED_IN_SALT',   'hR@5G/m8T2S;WGlbsxAm[F`G|s-hp,?J46:yf9[qKwv3xNa0=gI@D:Z`2bD0A?94' );
define( 'NONCE_SALT',       '0JE&dUYYP#=R)7Y= 6kZbF%doH}3d86xvTKJv~9oYV! <N.w@qUWo. 8I3/L]aWI' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
