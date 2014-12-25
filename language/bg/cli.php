<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Изберете тази опцяи ако опцията за конфигурация се сменя често за да бъде ефикасно кеширана.',
	'CLI_CONFIG_CURRENT'				=> 'Сегашната конфигурационна стойност, използвайте 0 или 1 за булеви стойности',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Успешно изтрито %s.',
	'CLI_CONFIG_NEW'					=> 'Нова конфигурационна стойност, използвайте 0 или 1 за булеви стойности',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Конфигурация %s не съществува',
	'CLI_CONFIG_OPTION_NAME'			=> 'Име на опцията за конфигурация',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Настройте тази опция ако стойността трябва да бъде показана без нов ред накрая.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'С колко да бъде увеличено',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Успешно увелечена конфигурация %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Не може да сложи конфигурация %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Успешно сложи конфигурация %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Показва списък с cron задачи',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Пуска всички готови cron задачи',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Име на задачата която ще се пусне',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Обновява базата данни като прилага миграции.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Изтрива конфигурационна опция',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Спира определено разширение.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Пуска определено разширение.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Намира миграции от които не зависи.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Взима конфигурационна опция',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Увеличава конфигурационна опция',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Показва всички разширение в базата данни и на файловата система.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Пуска в Safe Mode (без разширения).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Пуска shell.',
	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Изчиства разширението.',
	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Прекалкулира user_email_hash колоната в таблицата с потребителите.',
	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Настройва конфигурационната опция само ако старата е като новата стойност',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Настройва конфигурационна опция',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Разширението %s не може да бъде спряно',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Разширението %s беше успешно спряно.',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Разширението %s не може да бъде спряно.',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Разширението %s беше успешно пуснато.',
	'CLI_EXTENSION_NAME'				=> 'Име на разширението',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Не може да изчисти разширението %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Успешно изчистено разширение %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Няма намерени разширения.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Налично',
	'CLI_EXTENSIONS_DISABLED'			=> 'Спряно',
	'CLI_EXTENSIONS_ENABLED'			=> 'Пуснато',

	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Успешно прекалкулирани user_email_hash.',
));
