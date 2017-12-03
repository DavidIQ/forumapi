<?php
/**
 *
 * Forum API. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, David Colón, https://www.davidiq.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_FORUMAPI_USERINFO'			=> 'Enable user information API',
	'ACP_FORUMAPI_SETTING_SAVED'	=> 'Settings have been saved successfully!',
));
