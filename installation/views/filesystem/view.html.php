<?php
/**
 * @version		$Id: view.html.php 22338 2011-11-04 17:24:53Z github_bot $
 * @package		Joomla.Installation
 * @copyright	Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.component.view');
jimport('joomla.html.html');

/**
 * The HTML Joomla Core Filesystem Configuration View
 *
 * @package		Joomla.Installation
 * @since		1.6
 */
class JInstallationViewFilesystem extends JView
{
	/**
	 * Display the view
	 *
	 */
	public function display($tpl = null)
	{
		$state = $this->get('State');
		$form  = $this->get('Form');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		$this->assignRef('state', $state);
		$this->assignRef('form', $form);

		JText::script('INSTL_FTP_SETTINGS_CORRECT');
		parent::display($tpl);
	}
}
