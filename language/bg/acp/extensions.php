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
	'EXTENSION'					=> 'Разширение',
	'EXTENSIONS'				=> 'Разширения',
	'EXTENSIONS_ADMIN'			=> 'Управление на разширения',
	'EXTENSIONS_EXPLAIN'		=> 'Това е инструмент във вашият форум, който ви позволява да управлявате вашите разширения и да виждате информация за тях.',
	'EXTENSION_INVALID_LIST'	=> '“%s” разширението не е валидно.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Избраното разширение не е валидно за този форум, проверете phpBB и PHP версиите (вижте страницата с детайлите)',
	'EXTENSION_DIR_INVALID'		=> 'Избраното разширение е с невалидна структура на директориите и не може да бъде пуснато.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Избраното разширение не може да бъде пуснато, проверете изискваниятя му.',

	'DETAILS'				=> 'Детайли',

	'EXTENSIONS_DISABLED'	=> 'Спряни разширения',
	'EXTENSIONS_ENABLED'	=> 'Пуснати разширения',

	'EXTENSION_DELETE_DATA'	=> 'Изтрий данните',
	'EXTENSION_DISABLE'		=> 'Спри',
	'EXTENSION_ENABLE'		=> 'Пусни',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Изтриването на данните премахва всични запазени настройки. Файловете на разширението остават, така че то може да бъде пуснато отново.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'При спиране на разширението, всичко в него се запазва (данни и настройки), но се премахва фунционалността от форума.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Пускане на разширение ви позволява да го използвате във форума.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Данните на разширението в момента се трият, моля не напускайте/обновявайте страницата, докато процеса не завърши.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Разширението в момента се спира, моля не напускайте/обновявайте страницата, докато процеса не завърши.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Разширението в момента се пуска, моля не напускайте/обновявайте страницата, докато процеса не завърши.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Данните на разширението бяха успешно изтрити.',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Разширенито е спряно успешно.',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Разширенеито е пуснато успешно.',

	'EXTENSION_NAME'			=> 'Име',
	'EXTENSION_ACTIONS'			=> 'Действия',
	'EXTENSION_OPTIONS'			=> 'Опции',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Обновяване на разширение',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Спира разширението</li>
			<li>Изтрива файловете от диска</li>
			<li>Качва новите файлове</li>
			<li>Пуска разширението</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Изтриване на разширението',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Спира разширението</li>
			<li>Изтрива настройките</li>
			<li>Изтрива файловете от диска</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Сигурен ли си, че искаш да изтриеш данните свързани с “%s”?<br /><br />Това ще изтрие данните и настройките, този процес не може да бъде спрян/върнат!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Сигурен ли си, че искаш да спреш разширението “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Сигурен ли си, че искаш да пуснеш разширението “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Сигурен ли си, че искаш да форсираш използването на нестабилна версия?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Върни се към списъка с разширенията',

	'EXT_DETAILS'			=> 'Детайли',
	'DISPLAY_NAME'			=> 'Пълно име',
	'CLEAN_NAME'			=> 'Кратко име',
	'TYPE'					=> 'Тип',
	'DESCRIPTION'			=> 'Описание',
	'VERSION'				=> 'Версия',
	'HOMEPAGE'				=> 'Страница',
	'PATH'					=> 'Файл път',
	'TIME'					=> 'Излязло на',
	'LICENSE'				=> 'Лиценз',

	'REQUIREMENTS'			=> 'Изискваняи',
	'PHPBB_VERSION'			=> 'phpBB версия',
	'PHP_VERSION'			=> 'PHP версия',
	'AUTHOR_INFORMATION'	=> 'Информация за автора',
	'AUTHOR_NAME'			=> 'Име',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Страница',
	'AUTHOR_ROLE'			=> 'Роля',

	'NOT_UP_TO_DATE'		=> '%s не е последна версия',
	'UP_TO_DATE'			=> '%s е последна версия',
	'ANNOUNCEMENT_TOPIC'	=> 'Известие',
	'DOWNLOAD_LATEST'		=> 'Свали версията',
	'NO_VERSIONCHECK'		=> 'Няма информация за версията.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Провери всички версии',
	'FORCE_UNSTABLE'					=> 'Винаги проверявай за нестабилни версии',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Настройки проврка версии',

	'META_FIELD_NOT_SET'	=> 'Задължителното поле %s не е налично.',
	'META_FIELD_INVALID'	=> 'Полето %s е невалидно.',
));
