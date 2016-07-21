<?php
/**
 * @package subtitlemenu Subtitled Menu for Joomla
 * @subpackage mod_subtitlemenu
 * @copyright Copyright (C) 2016 Patrick Andersen. All rights reserved.
 * @license http://www.gnu.org/licenses GNU General Public License version 2 or later; see LICENSE.txt
 * @author url: github.com/pocketpc_
 * @author Patrick Andersen pocketpc_@outlook.com
 */

defined('_JEXEC') or die;

// Include the menu functions only once
require_once __DIR__ . '/helper.php';

$list       = ModSubtitleMenuHelper::getList($params);
$base       = ModSubtitleMenuHelper::getBase($params);
$active     = ModSubtitleMenuHelper::getActive($params);
$default    = ModSubtitleMenuHelper::getDefault();
$active_id  = $active->id;
$default_id = $default->id;
$path       = $base->tree;
$showAll    = $params->get('showAllChildren');
$class_sfx  = htmlspecialchars($params->get('class_sfx'), ENT_COMPAT, 'UTF-8');

if (count($list))
{

	require JModuleHelper::getLayoutPath('mod_subtitlemenu', $params->get('layout', 'default'));

}
