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
 * Table tl_layout
 */

$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addJQuery'] = str_replace
(
	'jSource',
	'jSource,jQueryVersion',
	$GLOBALS['TL_DCA']['tl_layout']['subpalettes']['addJQuery']
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['jQueryVersion'] = array(
	'label'				=> &$GLOBALS['TL_LANG']['tl_layout']['jquery_version'],
	'default'			=> 'contao_version',
	'exclude'			=> true,
	'inputType'			=> 'select',
	'options_callback'	=> array('tl_layout_jquerySwitcher', 'getVersions'),
	'sql'				=> "varchar(30) NOT NULL default ''",
);

$GLOBALS['TL_DCA']['tl_layout']['fields']['jSource']['eval']['tl_class'] = 'w50';
$GLOBALS['TL_DCA']['tl_layout']['fields']['jquery']['eval']['tl_class'] = 'clr';

/**
 * Class tl_layout_jquerySwitcher
 *
 * @package   jQueryVersionSwitcher
 * @author    Markus Kinzl
 * @copyright Web-Creations 2013
 */
class tl_layout_jquerySwitcher extends Backend
{
	/**
	 * Return all jquery Versions
	 * @return array
	 */
	public function getVersions()
	{
		foreach( $GLOBALS['TL_JQUERY_VERSIONS'] as $version => $settings)
		{
			if( $version == 'contao_version' || $version == 'latest_jquery_version' )
				$return[$version] = $GLOBALS['TL_LANG']['tl_layout']['jquery_version'][$version]; 
			else 
				$return[$version] = $version;
		}
		
		return $return;
	}	
	
}