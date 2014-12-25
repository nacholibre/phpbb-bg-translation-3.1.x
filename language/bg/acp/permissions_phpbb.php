<?php
/**
* acp_permissions_phpbb (phpBB Permission Set) [Bulgarian]
*
* @package language
* @version $Id: permissions_phpbb.php 8911 2008-09-23 13:03:33Z nacholibre $
* @copyright (c) 2005 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

/**
*	MODDERS PLEASE NOTE
*
*	You are able to put your permission sets into a separate file too by
*	prefixing the new file with permissions_ and putting it into the acp
*	language folder.
*
*	An example of how the file could look like:
*
*	<code>
*
*	if (empty($lang) || !is_array($lang))
*	{
*		$lang = array();
*	}
*
*	// Adding new category
*	$lang['permission_cat']['bugs'] = 'Bugs';
*
*	// Adding new permission set
*	$lang['permission_type']['bug_'] = 'Bug Permissions';
*
*	// Adding the permissions
*	$lang = array_merge($lang, array(
*		'acl_bug_view'		=> array('lang' => 'Can view bug reports', 'cat' => 'bugs'),
*		'acl_bug_post'		=> array('lang' => 'Can post bugs', 'cat' => 'post'), // Using a phpBB category here
*	));
*
*	</code>
*/


$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Действия',
	'ACL_CAT_CONTENT'		=> 'Съдържание',
	'ACL_CAT_FORUMS'		=> 'Форуми',
	'ACL_CAT_MISC'			=> 'Други',
	'ACL_CAT_PERMISSIONS'	=> 'Права',
	'ACL_CAT_PM'			=> 'Лични съобщение',
	'ACL_CAT_POLLS'			=> 'Анкети',
	'ACL_CAT_POST'			=> 'Мнение',
	'ACL_CAT_POST_ACTIONS'	=> 'Действия за мнение',
	'ACL_CAT_POSTING'		=> 'Писане',
	'ACL_CAT_PROFILE'		=> 'Профил',
	'ACL_CAT_SETTINGS'		=> 'Настройки',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Действия за тема',
	'ACL_CAT_USER_GROUP'	=> 'Потребители &amp; Групи',
));

//// Define categories and permission types
//$lang = array_merge($lang, array(
//	// With defining 'global' here we are able to specify what is printed out if the permission is within the global scope.
//	'permission_type'	=> array(
//		'u_'			=> 'Потребителски права',
//		'a_'			=> 'Администраторски права',
//		'm_'			=> 'Модераторски права',
//		'f_'			=> 'Форум права',
//		'global'		=> array(
//          'm_'         => 'Права на глобалните модератори',
//		),
//	),
//));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> array('lang' => 'Може да преглежда профили', 'cat' => 'profile'),
	'ACL_U_CHGNAME'		=> array('lang' => 'Може да променя потребителско име', 'cat' => 'profile'),
	'ACL_U_CHGPASSWD'	=> array('lang' => 'Може да променя паролата си', 'cat' => 'profile'),
	'ACL_U_CHGEMAIL'	=> array('lang' => 'Може да променя email адреса си', 'cat' => 'profile'),
	'ACL_U_CHGAVATAR'	=> array('lang' => 'Може да сменя аватара си', 'cat' => 'profile'),
	'ACL_U_CHGGRP'		=> array('lang' => 'Може да променя групата по подразбиране', 'cat' => 'profile'),

	'ACL_U_ATTACH'		=> array('lang' => 'Може да прикачва файлове', 'cat' => 'post'),
	'ACL_U_DOWNLOAD'	=> array('lang' => 'Може да сваля файлове', 'cat' => 'post'),
	'ACL_U_SAVEDRAFTS'	=> array('lang' => 'Може да записва чернови', 'cat' => 'post'),
	'ACL_U_CHGCENSORS'	=> array('lang' => 'Може да изключва цензурата на думи', 'cat' => 'post'),
	'ACL_U_SIG'			=> array('lang' => 'Може да използва сигнатура', 'cat' => 'post'),

	'ACL_U_SENDPM'		=> array('lang' => 'Може да изпраща лични съобщения', 'cat' => 'pm'),
	'ACL_U_MASSPM'		=> array('lang' => 'Може да изпраща лични съобщения до много потребители или цяла група', 'cat' => 'pm'),
	'ACL_U_MASSPM_GROUP'=> array('lang' => 'Може да изпраща съобщения до групи', 'cat' => 'pm'),
	'ACL_U_READPM'		=> array('lang' => 'Може да чете лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_EDIT'		=> array('lang' => 'Може да променя собствените си лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_DELETE'	=> array('lang' => 'Може да изтрива личните си съобщения', 'cat' => 'pm'),
	'ACL_U_PM_FORWARD'	=> array('lang' => 'Може да пренасочва личните си съобщения', 'cat' => 'pm'),
	'ACL_U_PM_EMAILPM'	=> array('lang' => 'Може да праща лични съобщения (email)', 'cat' => 'pm'),
	'ACL_U_PM_PRINTPM'	=> array('lang' => 'Може да принтира лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_ATTACH'	=> array('lang' => 'Може да прикачва файлове към лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_DOWNLOad'	=> array('lang' => 'Може да сваля файлове от лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_BBCODE'	=> array('lang' => 'Може да използва BBCode в лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_SMILIEs'	=> array('lang' => 'Може да използва усмивки в лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_IMG'		=> array('lang' => 'Може да използва [img] BBCode таг в лични съобщения', 'cat' => 'pm'),
	'ACL_U_PM_FLASH'	=> array('lang' => 'Може да използва  [flash] BBCode таг в лични съобщения', 'cat' => 'pm'),

	'ACL_U_SENDEMAIl'	=> array('lang' => 'Може да изпраща email адреси', 'cat' => 'misc'),
	'ACL_U_SENDIM'		=> array('lang' => 'Може да изпраща моментални съобщения', 'cat' => 'misc'),
	'ACL_U_IGNOREFLood'	=> array('lang' => 'Може да игнорира flood лимита', 'cat' => 'misc'),
	'ACL_U_HIDEONLIne'	=> array('lang' => 'Може да се скрива от он-лайн статуса', 'cat' => 'misc'),
	'ACL_U_VIEWONLIne'	=> array('lang' => 'Може да вижда кой е на линия', 'cat' => 'misc'),
	'ACL_U_SEARCH'		=> array('lang' => 'Може да използва търсенето', 'cat' => 'misc'),
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> array('lang' => 'Може да преглежда форум', 'cat' => 'post'),
	'ACL_F_READ'		=> array('lang' => 'Може да чете форум', 'cat' => 'post'),
	'ACL_F_POST'		=> array('lang' => 'Може да публикува нова тема', 'cat' => 'post'),
	'ACL_F_REPLY'		=> array('lang' => 'Може да отговаря в теми', 'cat' => 'post'),
	'ACL_F_ICONS'		=> array('lang' => 'Може да използва икони в мнение/тема', 'cat' => 'post'),
	'ACL_F_ANNOUNCE'	=> array('lang' => 'Може да публикува Важни теми', 'cat' => 'post'),
	'ACL_F_STICKY'		=> array('lang' => 'Може да публикува Закачени теми', 'cat' => 'post'),

	'ACL_F_POLL'		=> array('lang' => 'Може да създава анкети', 'cat' => 'polls'),
	'ACL_F_VOTE'		=> array('lang' => 'Може да гласува в анкети', 'cat' => 'polls'),
	'ACL_F_VOTECHG'		=> array('lang' => 'Може да променя съществуващи анкети', 'cat' => 'polls'),

	'ACL_F_ATTACH'		=> array('lang' => 'Може да прикачва файлове', 'cat' => 'content'),
	'ACL_F_DOWNLOAD'	=> array('lang' => 'Може да сваля файлове', 'cat' => 'content'),
	'ACL_F_SIGS'		=> array('lang' => 'Може да използва подпис', 'cat' => 'content'),
	'ACL_F_BBCODE'		=> array('lang' => 'Може да използва BBCode', 'cat' => 'content'),
	'ACL_F_SMILIES'		=> array('lang' => 'Може да използва усмивки', 'cat' => 'content'),
	'ACL_F_IMG'			=> array('lang' => 'Може да използва [img] BBCode таг', 'cat' => 'content'),
	'ACL_F_FLASH'		=> array('lang' => 'Може да използва [flash] BBCode таг', 'cat' => 'content'),

	'ACL_F_EDIT'		=> array('lang' => 'Може да променя собствените си мнения', 'cat' => 'actions'),
	'ACL_F_DELETE'		=> array('lang' => 'Може да изтрива собствените си мнения', 'cat' => 'actions'),
	'ACL_F_USER_LOCk'	=> array('lang' => 'Може да заключва собствените си мнения', 'cat' => 'actions'),
	'ACL_F_BUMP'		=> array('lang' => 'Може да избутва теми', 'cat' => 'actions'),
	'ACL_F_REPORT'		=> array('lang' => 'Може да сигнализира за мнения/теми', 'cat' => 'actions'),
	'ACL_F_SUBSCRIBe'	=> array('lang' => 'Може да се абонира', 'cat' => 'actions'),
	'ACL_F_PRINT'		=> array('lang' => 'Може да принтира теми', 'cat' => 'actions'),
	'ACL_F_EMAIL'		=> array('lang' => 'Може да изпраща теми (email)', 'cat' => 'actions'),

	'ACL_F_SEARCH'		=> array('lang' => 'Може да търси във форума', 'cat' => 'misc'),
	'ACL_F_IGNOREFlood' => array('lang' => 'Може да игнорира flood лимита', 'cat' => 'misc'),
	'ACL_F_POSTCOUnt'	=> array('lang' => 'Брояч на мнения<br /><em>Настройките ще повлияят на новите мнения.</em>', 'cat' => 'misc'),
	'ACL_F_NOAPPROve'	=> array('lang' => 'Може да пише без одобрение', 'cat' => 'misc'),
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> array('lang' => 'Може да променя мнения', 'cat' => 'post_actions'),
	'ACL_M_DELETE'		=> array('lang' => 'Може да изтрива мнения', 'cat' => 'post_actions'),
	'ACL_M_APPROVE'		=> array('lang' => 'Може да одобрява мнения', 'cat' => 'post_actions'),
	'ACL_M_REPORT'		=> array('lang' => 'Може да затваря и изтрива сигнали', 'cat' => 'post_actions'),
	'ACL_M_CHGPOSTer'	=> array('lang' => 'Може да променя автор на тема', 'cat' => 'post_actions'),

	'ACL_M_MOVE'	=> array('lang' => 'Може да премества теми', 'cat' => 'topic_actions'),
	'ACL_M_LOCK'	=> array('lang' => 'Може да заключва теми', 'cat' => 'topic_actions'),
	'ACL_M_SPLIT'	=> array('lang' => 'Може да разделя теми', 'cat' => 'topic_actions'),
	'ACL_M_MERGE'	=> array('lang' => 'Може да съединява теми', 'cat' => 'topic_actions'),

	'ACL_M_INFO'	=> array('lang' => 'Може да преглежда детайли на мнение', 'cat' => 'misc'),
	'ACL_M_WARN'	=> array('lang' => 'Може да слага предупреждения', 'cat' => 'misc'),
	'ACL_M_BAN'		=> array('lang' => 'Може да управлява бановете', 'cat' => 'misc'), // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> array('lang' => 'Може да променя настройките на форума/проверява за нови версии', 'cat' => 'settings'),
	'ACL_A_SERVER'		=> array('lang' => 'Може да променя сървър/комуникационните настройки', 'cat' => 'settings'),
	'ACL_A_JABBER'		=> array('lang' => 'Може да променя Jabber настройките', 'cat' => 'settings'),
	'ACL_A_PHPINFO'		=> array('lang' => 'Може да преглежда php настройките', 'cat' => 'settings'),

	'ACL_A_FORUM'		=> array('lang' => 'Може да управлява форуми', 'cat' => 'forums'),
	'ACL_A_FORUMADd'	=> array('lang' => 'Може да добавя форуми', 'cat' => 'forums'),
	'ACL_A_FORUMDEl'	=> array('lang' => 'Може да изтрива форуми', 'cat' => 'forums'),
	'ACL_A_PRUNE'		=> array('lang' => 'Може да изчиства форуми', 'cat' => 'forums'),

	'ACL_A_ICONS'		=> array('lang' => 'Може да промяна иконите и усмивките в теми', 'cat' => 'posting'),
	'ACL_A_WORDS'		=> array('lang' => 'Може да променя цензура', 'cat' => 'posting'),
	'ACL_A_BBCODE'		=> array('lang' => 'Може да добавя нови BBCode тагове', 'cat' => 'posting'),
	'ACL_A_ATTACH'		=> array('lang' => 'Може да промяна настройките за прикачените файлове', 'cat' => 'posting'),

	'ACL_A_USER'		=> array('lang' => 'Може да управлява потребители', 'cat' => 'user_group'),
	'ACL_A_USERDEL'		=> array('lang' => 'Може да изтрива/изчиства потребители', 'cat' => 'user_group'),
	'ACL_A_GROUP'		=> array('lang' => 'Може да управлява групи', 'cat' => 'user_group'),
	'ACL_A_GROUPADd'	=> array('lang' => 'Може да създава групи', 'cat' => 'user_group'),
	'ACL_A_GROUPDEl'	=> array('lang' => 'Може да изтрива групи', 'cat' => 'user_group'),
	'ACL_A_RANKS'		=> array('lang' => 'Може да управлява рангове', 'cat' => 'user_group'),
	'ACL_A_PROFILE'		=> array('lang' => 'Може да добавя нови полета', 'cat' => 'user_group'),
	'ACL_A_NAMES'		=> array('lang' => 'Може да управлява забранените имена', 'cat' => 'user_group'),
	'ACL_A_BAN'			=> array('lang' => 'Може да контролира бановете', 'cat' => 'user_group'),

	'ACL_A_VIEWAUTh'	=> array('lang' => 'Може да преглежда правата', 'cat' => 'permissions'),
	'ACL_A_AUTHGROups'	=> array('lang' => 'Може да променя правата за индивидуални групи', 'cat' => 'permissions'),
	'ACL_A_AUTHUSErs'	=> array('lang' => 'Може да променя правата за индивидуални потребители', 'cat' => 'permissions'),
	'ACL_A_FAUTH'		=> array('lang' => 'Може да променя форум клас правата', 'cat' => 'permissions'),
	'ACL_A_MAUTH'		=> array('lang' => 'Може да променя модератор клас правата ', 'cat' => 'permissions'),
	'ACL_A_AAUTH'		=> array('lang' => 'Може да променя админ клас правата', 'cat' => 'permissions'),
	'ACL_A_UAUTH'		=> array('lang' => 'Може да променя потребител клас правата', 'cat' => 'permissions'),
	'ACL_A_ROLES'		=> array('lang' => 'Може да управлява ролите', 'cat' => 'permissions'),
	'ACL_A_SWITCHPERM'	=> array('lang' => 'Може да използва други права', 'cat' => 'permissions'),

	'ACL_A_STYLES'		=> array('lang' => 'Може да управлява стиловете', 'cat' => 'misc'),
	'ACL_A_VIEWLOGS'	=> array('lang' => 'Може да преглежда логовете', 'cat' => 'misc'),
	'ACL_A_CLEARLOGS'	=> array('lang' => 'Може да изчиства логовете', 'cat' => 'misc'),
	'ACL_A_MODULES'		=> array('lang' => 'Може да управлява модулите', 'cat' => 'misc'),
	'ACL_A_LANGUAGE'	=> array('lang' => 'Може да управлява езиковите пакети', 'cat' => 'misc'),
	'ACL_A_EMAIL'		=> array('lang' => 'Може да изпраща масов email', 'cat' => 'misc'),
	'ACL_A_BOTS'		=> array('lang' => 'Може да управлява ботовете', 'cat' => 'misc'),
	'ACL_A_REASONS'		=> array('lang' => 'Може да управлява причините за сигнал', 'cat' => 'misc'),
	'ACL_A_BACKUP'		=> array('lang' => 'Може да бек-ъпва/възстановява база данни', 'cat' => 'misc'),
	'ACL_A_SEARCH'		=> array('lang' => 'Може да променя настройките за търсене', 'cat' => 'misc'),
));
