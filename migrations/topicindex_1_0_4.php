<?php
/**
*
* @package phpBB Extension - Topic Index
* @copyright (c) 2015 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicindex\migrations;

class topicindex_1_0_4 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array(
			'\dmzx\topicindex\migrations\topicindex_1_0_3',
		);
	}

	public function update_data()
	{
		return array(
			// Update config
			array('config.update', array('topicindex_version', '1.0.4')),
		);
	}
}
