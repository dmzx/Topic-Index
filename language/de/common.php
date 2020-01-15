<?php
/**
*
* @version $Id: common.php 50 2017-01-22 01:57:07Z Scanialady $
* @package phpBB Extension - Topic Index [Deutsch]
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
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
//	‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ADD_INILIST'					=> '+Liste',
	'REMOVE_INILIST'				=> '-Liste',
	'OTINDEX_LINK_TITLE'			=> 'Themenliste',
	'NUM'							=> 'Nr.',
	'POSTER'						=> 'Verfasst von',
	'INDEX_POST_PRES'				=> 'Bevor du ein neues Thema eröffnest, prüfe bitte, ob es nicht bereits in dieser Liste ist. Wenn bereits vorhanden, benutze dieses Thema, um deine Beiträge zu schreiben.<br />Danke.',
	'NON_ACTIVE'					=> 'Inaktiv',
	'DEF_ALL_TOPICS_IN'				=> 'Alle neuen Themen automatisch',
	'DEF_ALL_TOPICS_OFF'			=> 'Füge Themen manuell zur Liste hinzu',
	'REMOVE_FROM_LIST'				=> 'entfernen',
	'TOPICINDEX_VERSION'			=> 'Version',
	'ALL'							=> 'Alle',
	'09'							=> '0-9',
	'SYMB'							=> '#&%',
	'ANY_TOPIC_IN_LIST'				=> 'Alle Themen in der Liste',
	'SELECT_A_LIST'					=> 'Wähle eine Liste',
	'OIINDEX_HEADER'				=> 'Official Topic Index - Themenliste',
));
