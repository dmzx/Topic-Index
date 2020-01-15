<?php
/**
*
* @package phpBB Extension - Topic Index
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
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
	'ACP_CAT_OINDEX'				=> 'Officiële Topic Index',
	'ACP_OINDEX_CFG'				=> 'Configuratie',
	//Log
	'LOG_OINDEX_ADDLIST'			=> '<strong>Nieuwe topic lijst toegevoegd.</strong><br />%s',
	'LOG_OINDEX_DELETELIST'			=> '<strong>Topic lijst verwijderd.</strong><br />%s',
	'LOG_OINDEX_EDITCFG'			=> '<strong>Bewerkte de configuratie van Offici&euml;le topic index</strong><br />%s',
));
