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
define( 'DB_NAME', 'wp-projet' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f*xYR8S7`4 d|St7e{lEO#<2aOIQ=A}Hh%qp_Kv9r30p7_Dj5?7h;j=4jF^YFKd1' );
define( 'SECURE_AUTH_KEY',  '13Wx]v7x/uk6^TPv@%-N?`%):,SNCb$jAZ_`m`-a6i,?w.|n+R@+.*..M2|mIDWP' );
define( 'LOGGED_IN_KEY',    '?Km,Kdrk-aN=TEgUV%BKe5g&pDQgR-VOhr] R:Kb,cEZz4PD!dSuj>,VS4=Axga;' );
define( 'NONCE_KEY',        'M]d8Wnf?Xr)>&_{.rGQ@P5Gqe(L^#nJ7^G-*J-SOTX=Z8X:t`,|G/ishDN9CUvYB' );
define( 'AUTH_SALT',        'H=~uCRg>E}a5(1OWq--l@de_BeJ8FK71vcm}RE[S3X}I@q[u.w`-|,j{.isr~DHM' );
define( 'SECURE_AUTH_SALT', '*]js;@BkMJvI/rA#!d?VsJ.wR[S2bCN4dBYTG`)q&`[x,2fKmVRuj9JKTfs37uuZ' );
define( 'LOGGED_IN_SALT',   '7!KYD$l7:ucvDWS!{AKXo =.>O*>dfOCkcGl}pOMJxjwi.M2kfG]~egl$g-{SCh[' );
define( 'NONCE_SALT',       '3=@/GCPyXPt+V#sYJh[%2>e[OOZ[K|<|iFH,x(B)Q%uNU<#w$Ax*8A5(0aD6 <$f' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'Hf4okM_';

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
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
