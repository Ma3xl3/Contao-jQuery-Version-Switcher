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

if( version_compare( VERSION, '3.1', '<' ) ) {
	$GLOBALS['TL_HOOKS']['generatePage'][] = array('jQueryVersionSwitcher', 'changeVersionV3_0');
}	
else {
	$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('jQueryVersionSwitcher', 'jqueryDisableTmp');
	$GLOBALS['TL_HOOKS']['generatePage'][] = array('jQueryVersionSwitcher', 'changeVersion');
}


$GLOBALS['TL_JQUERY_VERSIONS'] = array(
	'contao_version' => array(),
	'2.1.1' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-2.1.1.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js',
	),
	'2.0.3' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-2.0.3.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js',
	),
	'1.11.1' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.11.1.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js',
	),
	'1.10.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.10.2.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js',
	),
	'1.9.1' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.9.1.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js',
	),
	'1.8.3' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.8.3.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js',
	),
	'1.7.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.7.2.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js',
	),
	'1.6.4' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.6.4.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js',
	),
	'1.5.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.5.2.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js',
	),
	'1.4.4' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.4.4.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js',
	),
	'1.3.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.3.2.min.js',
		'googleapis' => 'ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
	),
);
