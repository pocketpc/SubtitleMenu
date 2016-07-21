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

$attributes = array();

if ($item->anchor_title)
{
	$attributes['title'] = $item->anchor_title;
}

if ($item->anchor_css)
{
	$attributes['class'] = $item->anchor_css;
}

if ($item->anchor_rel)
{
	$attributes['rel'] = $item->anchor_rel;
}

$linktype = '<span class="nav-header">' . $item->title . '</span>';

if ($item->menu_image)
{
	$linktype = JHtml::_('image', $item->menu_image, $item->title);

	if ($item->params->get('menu_text', 1))
	{
		$linktype .= '<span class="image-title">' . $item->title . '</span>';
	}
}

$linktype .= '<span class="nav-subtitle">' . $item->params->get('subtitlemenu_subtitle') . '</span>';

if ($item->browserNav == 1)
{
	$attributes['target'] = '_blank';
}
elseif ($item->browserNav == 2)
{
	$options = 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes';

	$attributes['onclick'] = "window.open(this.href, 'targetWindow', '" . $options . "'); return false;";
}

echo JHtml::_('link', JFilterOutput::ampReplace(htmlspecialchars($item->flink)), $linktype, $attributes);
