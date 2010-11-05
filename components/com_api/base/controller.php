<?php
/**
 * @version		$Id
 * @package		Joomla
 * @subpackage	com_api
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
 * @license		GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

defined('_JEXEC') or die( 'Restricted access' );

jimport('joomla.application.component.controller');

class ApiController extends JController {
	
	/**
	 * Base Controller Constructor
	 *
	 * @param array $config Controller initialization configuration parameters
	 * @return void
	 * @since 0.1
	 */
	
	public function __construct($config=array()) {
		parent::__construct($config);
		
		JModel::addIncludePath(JPATH_COMPONENT.'/models');
		JTable::addIncludePath(JPATH_COMPONENT.'/tables');
		
	}
	
	/**
	 * Resets the document type to format=raw 
	 *
	 * @return void
	 * @since 0.1
	 * @todo Figure out if there is a better way to do this
	*/
	
	protected function resetDocumentType() {
		$document	= &JFactory::getDocument();
		$raw		= &JDocument::getInstance('raw');
		$document	= $raw;
		
		JResponse::clearHeaders();
		
	}
	
}