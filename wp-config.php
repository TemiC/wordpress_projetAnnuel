<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projetAnnuel');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IAt6zsL/O+-Zh4Hux@u: j@|nACof]PehQqYD[AU6-]]h!|$.D7o<HKACEa?#Z+j');
define('SECURE_AUTH_KEY',  ';Rky-)[^gKy-vI(<vaNiT-dfG#kIDO.>6OrCZ 4M}5,-n%zhvb`bD5ot)u]4!)RQ');
define('LOGGED_IN_KEY',    '`|@^sFJX!gGst+p$|%uM8L|YZhgMA7fat.6OXm$}youmQ77Kffg*EhUJ?Rcn;s{-');
define('NONCE_KEY',        '7C}J(wS+@_+Vy evE6--}uD+,Tb%mJL5] i|tbC Y  mM#+yok^7@~>W$hfYL0ff');
define('AUTH_SALT',        '3V/yC/~vI4JeFv+,9lOV!/0<Za)W%lYCOPg-h3iJBrx|eb9Hz$Rq3P7rAu&?by,N');
define('SECURE_AUTH_SALT', 'm~N*a}CMx.^I^C VEs)XxDet1Qvwpv8SfQ#$8<Z;V2sO`prQC1Wdri[g5!n#u+)K');
define('LOGGED_IN_SALT',   '-}vac[TO2I-V#Jz>ly,fM4q+u=Fk&Jl)4|8(,iTZ`|rXr<8`WHD!+SsXEf;1fH*!');
define('NONCE_SALT',       'JG2V|*}tm1EmICaQ76ceJ7r<LF8%7AJZB(L%BLExoGe|Qv/eREIM--a|6;WIzPIz');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');