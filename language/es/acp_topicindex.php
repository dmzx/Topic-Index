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

// Merge the following language entries into the lang array
$lang = array_merge($lang, array(
	'OFFICIAL_TOPIC_INDEX'			=> 'Administrar la extensión oficial del índice de temas',
	'ADD_NEW_TOPICS_LIST'			=> 'Añadir una nueva lista',
	'LIST_NAME'						=> 'Lista de nombres',
	'OINDEX_CFG_SETUP'				=> 'Configurar el índice de temas oficial',
	'OVERFLOW_IN_TOPIC'				=> 'Permitir barra de desplazamiento en la lista de temas internos',
	'NAME_FORUM_LIST_EMPTY'			=> 'El nombre de la lista no puede estar vacío.',
	'SELECT_FORUM_LIST_EMPTY'		=> 'Al menos un foro debe ser seleccionado.',
	'OINDEX_ADDED_LIST'				=> 'Lista guardada correctamente.',
	'OINDEX_DELETED_LIST'			=> 'Lista eliminada correctamente.',
	'OINDEX_EDIT_CFG'				=> 'Configuración del índice de temas oficial editado correctamente.',
	'OINDEX_FORUMS'					=> 'Foros',
	'OINDEX_SELECT_FORUM'			=> 'Seleccionar foro',
	'OTINDEX_LIST_ALONE_DSC'		=> 'Crear una lista externa de todos los temas de un solo foro o un conjunto de foros juntos. En lugar de la lista en un tema, el externo no necesita ser activado directamente en el foro, pero en ese caso se enumeran todos los temas sin opción.',
	'OTINDEX_LIST_INTOPIC_DSC'		=> 'Cree una lista de temas organizados que aparecerán dentro de un tema seleccionado. Una vez activa esta función en el primer post de cada tema aparecerán nuevos iconos para insertar o eliminar el tema de la lista.',
	'ACTIVE_TOPIC_INDEX'			=> 'Active y seleccione el tema de la lista',
	'TOPIC_INDEX_DEFAULT'			=> 'Elija qué temas agregar por defecto.',
	'ACTIVE_TOPIC_INDEX_EXPLAIN'	=> 'Elija el tema en los temas <strong>pegajosos o anunciados</ strong> que se convertirán en la lista. Por lo tanto, debe tener al menos un tema en el foro.',
	'TOPIC_INDEX_DEFAULT_EXPLAIN'	=> 'Elija el sistema por el cual los temas se incluirán en la lista.',
	'ACTIVE_INDEX_FILTER'			=> 'Filtro de etiquetas activor',
	'ACTIVE_INDEX_FILTER_EXPLAIN'	=> 'Debe activar esta opción si tiene temas con TAG común en el título. Apoyamos la etiqueta con este formato solo o doble: <strong>[]</strong>, <strong>{}</strong>, <strong>()</strong>.',
));
