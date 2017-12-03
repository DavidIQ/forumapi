<?php
/**
 *
 * Forum API. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, David Colón, https://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\forumapi\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['forumapi_userinfo']);
	}

	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v320\v320');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('forumapi_userinfo', 1)),

			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_FORUMAPI_TITLE'
			)),
			array('module.add', array(
				'acp',
				'ACP_FORUMAPI_TITLE',
				array(
					'module_basename'	=> '\davidiq\forumapi\acp\main_module',
					'modes'				=> array('settings'),
				),
			)),
		);
	}
}
