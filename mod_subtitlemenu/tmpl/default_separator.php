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

$title      = $item->anchor_title ? ' title="' . $item->anchor_title . '"' : '';
$anchor_css = $item->anchor_css ? $item->anchor_css : '';

$linktype   = $item->title;

if ($item->menu_image)
{
	$linktype = JHtml::_('image', $item->menu_image, $item->title);

	if ($item->params->get('menu_text', 1))
	{
		$linktype .= '<span class="image-title">' . $item->title . '</span>';
	}
}

?>
<span class="separator <?php echo $anchor_css; ?>"<?php echo $title; ?>><?php echo $linktype; ?></span>

<span class="nav-subtitle"><?php echo $item->params->get('subtitlemenu_subtitle'); ?></span>
