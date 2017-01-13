<?php
/**
*
* @package phpBB Extension - Topic Index
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADD_INILIST'					=> '+Lista',
	'REMOVE_INILIST'				=> '-Lista',
	'OTINDEX_LINK_TITLE'			=> 'Lista de temas',
	'NUM'							=> 'N°',
	'POSTER'						=> 'Publicado por',
	'INDEX_POST_PRES'				=> 'Antes de abrir un nuevo tema, compruebe si aún no está en esta lista. Si hay uso de ese tema para escribir sus mensajes. <br /> Gracias',
	'NON_ACTIVE'					=> 'Inactivo',
	'DEF_ALL_TOPICS_IN'				=> 'Todos los temas nuevos automáticamente',
	'DEF_ALL_TOPICS_OFF'			=> 'Agregar manualmente temas a la lista',
	'REMOVE_FROM_LIST'				=> 'borrar',
	'TOPICINDEX_VERSION'			=> 'Versión',
	'ALL'							=> 'Todo',
	'09'							=> '0-9',
	'SYMB'							=> '#&%',
	'ANY_TOPIC_IN_LIST'				=> 'Cualquier tema',
	'SELECT_A_LIST'					=> 'Seleccione una lista',
	'OIINDEX_HEADER'				=> 'Índice de Temas Oficiales - Lista de Temas',
));
