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
 * Forum API ACP module.
 */
class main_module
{
	public $page_title;
	public $tpl_name;
	public $u_action;

	public function main($id, $mode)
	{
		global $config, $request, $template, $user;

		$user->add_lang_ext('davidiq/forumapi', 'acp_forumapi');
		$this->tpl_name = 'acp_forumapi_body';
		$this->page_title = $user->lang('ACP_FORUMAPI_TITLE');
		add_form_key('davidiq/forumapi');

		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('davidiq/forumapi'))
			{
				trigger_error('FORM_INVALID', E_USER_WARNING);
			}

			$config->set('forumapi_userinfo', $request->variable('forumapi_userinfo', 0));

			trigger_error($user->lang('ACP_FORUMAPI_SETTING_SAVED') . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'FORUMAPI_USERINFO'		=> $config['forumapi_userinfo'],
		));
	}
}
