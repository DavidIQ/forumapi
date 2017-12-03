<?php
/**
 *
 * Forum API. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, David Colón, https://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace davidiq\forumapi\controller;

use phpbb\exception\http_exception;

/**
 * Forum API main controller.
 */
class main
{
	/* @var \phpbb\config\config */
	protected $config;

	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	 * Constructor
	 *
	 * @param \phpbb\config\config		$config
	 * @param \phpbb\controller\helper	$helper
	 * @param \phpbb\template\template	$template
	 * @param \phpbb\user				$user
	 */
	public function __construct(\phpbb\config\config $config, \phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->config = $config;
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;
	}

	/**
	 * Controller for route /forumapi/userinfo
	 *
	 * @throws http_exception
	 */
	public function userinfo()
	{
		if (!$this->config['forumapi_userinfo'])
		{
			throw new http_exception(503, 'FORUMAPI_UNAUTHORIZED');
		}

		$json = new \phpbb\json_response();
		$json->send(array(
			'username'	=> $this->user->data['username'],
			'user_id'	=> $this->user->data['user_id'],
		));
	}
}
