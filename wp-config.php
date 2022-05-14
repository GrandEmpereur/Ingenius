<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ingenius' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Zq8AIfs:Z~Y<=~6*vD&tJ!EnGc$8/b&,{B@1_#oSA4Z%4fj!Co>Qm1?FD;k@z;N9' );
define( 'SECURE_AUTH_KEY',  '.lE(mMcs+j[BF-vH0U?TP!kMcJU-$^D>oHVumcA);8^9R9@mb<s<kCY*K<D`34sA' );
define( 'LOGGED_IN_KEY',    '{r&(&K!v*(e!<fmX9.:q|iGrBI#=JKoGWbCW`/+jU+xfrvTK^r2:DREQ/ahn2W%V' );
define( 'NONCE_KEY',        'z(V~q|*j.>NDG;QQYdM7Us9BA78;tCHZsaZf_UHV)1?,U2!+DF.:$&E5^Avi.Q}~' );
define( 'AUTH_SALT',        'YAoV`S-TZS2Ye*M8w^DCcd00(%/yraxv-ekV^r$Y6F3KDlN!P6%?z@r~zw6bphGw' );
define( 'SECURE_AUTH_SALT', '<<?$Aza$6unvMiC5A.m63%z_Nt/+pw`cl/`>!w7K<}+NX&VG@?E+Z)0;<1,AgkOg' );
define( 'LOGGED_IN_SALT',   '_PR{-PJeO`Y~FeN]W_XJ=6mf.,.Pl<tm$d3_{Z!rJZyqr%I_:sFNQ)xi2XY#V-Td' );
define( 'NONCE_SALT',       '^`jgL]?IVoHCg:-#5*|SM/pW!1L(T38V>Ym<FhApXuJFoAE~48KY^La[=:xujwn<' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'hkjsqfb_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
