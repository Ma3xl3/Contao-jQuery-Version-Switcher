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
 */
class jQueryVersionSwitcher extends \PageRegular
{
	
	/**
	 * Disable jquery first if Version Switcher enabled
	 */
	public function jqueryDisableTmp($objPage, $objLayout, $self)
	{
		if(  $objLayout->addJQuery != 1 || $objLayout->jQueryVersion == 'contao_version' || $objLayout->jQueryVersion == '')
			return;
		
		$this->jswitcher = true;
		
		//disable temporarly addJquery
		$objLayout->addJQueryTmp = $objLayout->addJQuery;
		$objLayout->addJQuery = '';
	}
	
	
	/**
	 * Add new jquery Version
	 */
	public function changeVersion($objPage, $objLayout, $self)
	{
		// check if jswitcher is enabled
		if( !$this->jswitcher )
			return;		
		
		//add jquery
		if ($objLayout->jSource == 'j_googleapis' || $objLayout->jSource == 'j_fallback')
		{
			$mooScripts = '';
			$blnXhtml = ($objPage->outputFormat == 'xhtml');			
			
			$protocol = \Environment::get('ssl') ? 'https://' : 'http://';
			$mooScripts .= '<script' . ($blnXhtml ? ' type="text/javascript"' : '') . ' src="' . $protocol . $GLOBALS['TL_JQUERY_VERSIONS'][$objLayout->jQueryVersion]['googleapis'] . '"></script>' . "\n";
		
			if ($objLayout->jSource == 'j_fallback')
			{
				if ($blnXhtml)
				{
					$mooScripts .= '<script type="text/javascript">' . "\n/* <![CDATA[ */\n" . 'window.jQuery || document.write(\'<script src="' . $GLOBALS['TL_JQUERY_VERSIONS'][$objLayout->jQueryVersion]['local'] . '">\x3C/script>\')' . "\n/* ]]> */\n" . '</script>' . "\n";
				}
				else
				{
					$mooScripts .= '<script>window.jQuery || document.write(\'<script src="' . $GLOBALS['TL_JQUERY_VERSIONS'][$objLayout->jQueryVersion]['local'] . '">\x3C/script>\')</script>' . "\n";
				}
			}
			
			$self->Template->mooScripts = $mooScripts . $self->Template->mooScripts;
		}
		else
		{
			$arrAppendJs = array( $GLOBALS['TL_JQUERY_VERSIONS'][$objLayout->jQueryVersion]['local'] . '|static' );
			$GLOBALS['TL_JAVASCRIPT'] = array_merge($arrAppendJs, $GLOBALS['TL_JAVASCRIPT']);
		}
		
		//remove mootools-request.js
		$findMooReq = array_search('assets/mootools/core/' . MOOTOOLS . '/mootools-request.js|static', $GLOBALS['TL_JAVASCRIPT']);
		
		if( $findMooReq !== false )
			unset($GLOBALS['TL_JAVASCRIPT'][$findMooReq]);
		
		//restore old addJquery variable
		$objLayout->addJQuery = $objLayout->addJQueryTmp;
	}
	
	
	/**
	 * Add new jquery Version (For Contao lt 3.1; no getPageLayout hook in Contao 3.0)
	 */
	public function changeVersionV3_0($objPage, $objLayout, $self)
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
		$GLOBALS['TL_JAVASCRIPT'][$find_jquery] = $GLOBALS['TL_JQUERY_VERSIONS'][$objLayout->jQueryVersion]['local'] . '|static';
	}
}
