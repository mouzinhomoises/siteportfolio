<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'siteportfolio' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'tr,5<Mhb~?9wCeMb|$)kQ.a/bh18NLzKH![X>6F{a8SHb-_myrVneLGakN%~bFlj' );
define( 'SECURE_AUTH_KEY',  '~Od-CpJU}S.e2P*NTP/Es4WlC5hi5q1Cu4 nDo/*evq=Q)n8Wp3HkYTbZ}Fb./=q' );
define( 'LOGGED_IN_KEY',    'R:}?(H:.^XeJB$o8E#?4Be/ ~g/B&-d>Tcx9b7D;odh9}WRmS&V5YF!W5Lea7`].' );
define( 'NONCE_KEY',        'c?z,G#!~q8z;9H$6K>{d6B|,ZK$g{D)HG`sGgkjnzD$}W=m4yw*rQ,bKdH<Sp7mW' );
define( 'AUTH_SALT',        '[9>:N[eU5G,!Nnb,-LEClRn{L5?TS+4aa8@#A$NmSe6Ztf|1iWy~j8]5Ylz?xp&$' );
define( 'SECURE_AUTH_SALT', 'j)4[S%RE;PoDJ+G9FJeW>9xq53?k[k;p)41)43G0,T:gXZW3~h;qws`iaqnU|njP' );
define( 'LOGGED_IN_SALT',   '6bLc:g}Xg@|/_+_N37Z{J<op^pGsw~y~y2T=*g&~6J-wB;9!cZ-9O0pP<s&WZ9I_' );
define( 'NONCE_SALT',       '>}Upa@Hq:xm_v|Ngi,NA_4!-iSEp%1bU~XZKc-99P$87<QXb^tw|~/3G)Y68,<LQ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
