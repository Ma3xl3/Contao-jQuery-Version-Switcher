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

$GLOBALS['TL_HOOKS']['generatePage'][] = array('jQueryVersionSwitcher', 'changeVersion');

$GLOBALS['TL_JQUERY_VERSIONS'] = array(
	'contao_version' => array(),
	/*'latest_jquery_version' => array(
		'local' => 'http://code.jquery.com/jquery.min.js',
		'googleapis' => 'http://code.jquery.com/jquery.min.js',
	),*/
	'1.10.1' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.10.1.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.10.1.min.js',
	),
	'1.9.1' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.9.1.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.9.1.min.js',
	),
	'1.8.3' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.8.3.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.8.3.min.js',
	),
	'1.7.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.7.2.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.7.2.min.js',
	),
	'1.6.4' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.6.4.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.6.4.min.js',
	),
	'1.5.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.5.2.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.5.2.min.js',
	),
	'1.4.4' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.4.4.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.4.4.min.js',
	),
	'1.3.2' => array(
		'local' => 'system/modules/jQueryVersionSwitcher/assets/js/jquery/jquery-1.3.2.min.js|static',
		'googleapis' => 'http://code.jquery.com/jquery-1.3.2.min.js',
	),
);
