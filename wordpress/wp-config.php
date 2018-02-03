<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'aandy_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'aandy');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Chouchou42400');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'mysql-aandy.alwaysdata.net');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ']lE5Qm)ZcJ_8Y1!~~9(ZiM,U|&FP&:BQ1 JU7@Etr64MZ^K16#/b,J/mc4/;eL9H');
define('SECURE_AUTH_KEY',  'S6gvgb}Nq[,s5hUxe4i2sL$a,mGAY3vJNW^U(M<c=x5vV*l5%dl(nh*M,fK}{n9$');
define('LOGGED_IN_KEY',    'K8@^yllwZae7<gc)>A7$Y1BxF9iSLt{u7m7*oGt?+ss*QO!ueE]Z~2;&4@SMdNV0');
define('NONCE_KEY',        '|av:@GTSZ#<;V}K%fqy8]#0!4HD!TWcb ZH_.Fxp:X>` [++HK]Ko!U<wM4iuf4z');
define('AUTH_SALT',        'n64]{4T^Pp#Ev<rEn,L]H?RUrrBk?uQoY1T-c&En~v$-8A`MFOk Vn_-(VN`KRf0');
define('SECURE_AUTH_SALT', 'DVF42|I0?b1~@( Fd+Bk1_z6H]TGR!Pl8d>`gK;3)o9z}P3=K%4$o8sVL(3%3:uW');
define('LOGGED_IN_SALT',   '!qmBK96{7M.g|)P|Ta0LYZ&>sh=YkeIP>?*Qps<Pi^0)i#/yF s:RnxhskK|VBq|');
define('NONCE_SALT',       'KrO30aP,zQLxgy[6zlxW@$ag%Rt.!B=zFLJU#r Gd pua.EhCY:I;3bMC:Q_#CE1');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'yg_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');