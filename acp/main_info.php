<?php
/**
 *
 * Forum API. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, David Colón, https://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\forumapi\acp;

/**
 * Forum API ACP module info.
 */
class main_info
{
	public function module()
	{
		return array(
			'filename'	=> '\davidiq\forumapi\acp\main_module',
			'title'		=> 'ACP_FORUMAPI_TITLE',
			'modes'		=> array(
				'settings'	=> array(
					'title'	=> 'ACP_FORUMAPI',
					'auth'	=> 'ext_davidiq/forumapi && acl_a_board',
					'cat'	=> array('ACP_FORUMAPI_TITLE')
				),
			),
		);
	}
}
