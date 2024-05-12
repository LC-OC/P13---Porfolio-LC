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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'portfolio_lc' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'D/03NXBha0Yo%d04cB5MpKh&&5=4nQ*[clFamYye;-y}X6trQRF@)>a5`vM+1+)&' );
define( 'SECURE_AUTH_KEY',  '6pF>=.p+$pJj_KC=}^63bQ;J  !dhA_3>x5mPfx2u?,y24T_/?GLkrRsS7*4& f7' );
define( 'LOGGED_IN_KEY',    'ZB@`eG9@?LCR)!,/O#AxOOB(:ByD>pi!@6R_`HvU8P^0XfkovtzG5p*QA<MXW//!' );
define( 'NONCE_KEY',        'P+{kK gR&S#Ddx-~e#M2*}C5avXMDw?_?~}Eyo1QDzZ(;sd6Xz}e!mjwRzFZ.V,F' );
define( 'AUTH_SALT',        '+m{H6yb!v@LY~LeRo?VKtWQ&5aBdgG!;<0^#fT1x%HTJ@C;uai>s4ZftsPd!ML;m' );
define( 'SECURE_AUTH_SALT', '%FJNKb$o&J<rf/n?edUMDG$`,djy(7}q@q&M{aHxm]D).|[f7 Jud,givdM$ Opo' );
define( 'LOGGED_IN_SALT',   'Mxz[FlLn;&{/;{J%Ni Ld`^LRWAH$B~PB*nhL zi:Q*`.q@~::Ho:jGTdpA/mV/N' );
define( 'NONCE_SALT',       '94wc>>4^VG xR*J.74~+<Xn!@D (r`*/0^N7GYDbm=}!cJt~bM5=1w-InYS-hJnP' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');