<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2013 Leo Feyer
 *
 * @package   jQueryVersionSwitcher
 * @author    Markus Kinzl
 * @license   LGPL
 * @copyright Web-Creations 2013
 */


/**
 * Class jQueryVersionSwitcher
 *
 * @copyright  Web-Creations 2013
 * @author     Markus Kinzl
 * @package    Devtools
 */
class jQueryVersionSwitcher extends \PageRegular
{

	/**
	 * Generate the module
	 */
	public function changeVersion($objPage, $objLayout, $PageRegular)
	{
		//check if addJquery is active and local source is selected
		if( $objLayout->addJQuery != 1 || $objLayout->jSource != 'j_local')
			return;
		
		//dont overwrite regular contao version
		if( $objLayout->jQueryVersion == '' || $objLayout->jQueryVersion == 'contao_version' )
			return;
		
		//find jquery asset
		$find_jquery = array_search('assets/jquery/core/' . JQUERY . '/jquery.min.js|static', $GLOBALS['TL_JAVASCRIPT']);

		if( $find_jquery === false )
			return;
		
		//add new source
		$GLOBALS['TL_JAVASCRIPT'][$find_jquery] = $GLOBALS['TL_JQUERY_VERSIONS'][$objLayout->jQueryVersion]['local'];
	}
}
