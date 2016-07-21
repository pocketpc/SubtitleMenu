<?php
/**
 * @package subtitlemenu Subtitled menu for Joomla
 * @subpackage plg_subtitlemenu
 * @copyright Copyright (C) 2016 Patrick Andersen. All rights reserved.
 * @license http://www.gnu.org/licenses GNU General Public License version 2 or later; see LICENSE.txt
 * @author Patrick Andersen pocketpc_@outlook.com
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');
//jimport('joomla.form.fields.text');

class plgSystemSubtitlemenu extends JPlugin
{
    
    protected $autoloadLanguage = true;

    public function onContentPrepareForm($form, $data)
    {

        if ($form->getName() == 'com_menus.item')
        {

            JForm::addFormPath(__DIR__ . '/params');
            $form->loadFile('params', false);

        }

    }

}
