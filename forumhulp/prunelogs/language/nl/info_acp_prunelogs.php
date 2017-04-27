<?php
/**
*
* @package Prune Log's
* @copyright (c) 2014 ForumHulp.com
* Nederlandse vertaling @ Solidjeuh <http://www.froddelpower.be>
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'PRUNE_LOGS_DAYS' 			=> 'Schoon logs op',
	'PRUNE_LOGS_DAYS_EXPLAIN'	=> 'Dagen alvorens de cron de logs zal opschonen. Instellen op 0 zal deze functie uitschakelen.',

	'LOG_PRUNE_LOGS'			=> '<strong>Logs schoongemaakt</strong><br />» %s',
	'NO_PRUNE_LOGS'				=> '<strong>Maak logs schoon</strong><br />» Geen logs verwijderd',
	'PRUNE_LOGS_NOTICE'			=> '<div class="phpinfo"><p class="entry">Configuratie instellingen zijn in %1$s » %2$s » %3$s.</p></div>',
));
