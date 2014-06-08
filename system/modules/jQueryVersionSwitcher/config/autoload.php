<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2014 Leo Feyer
 * 
 * @package jQueryVersionSwitcher
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Register the namespace
 */
ClassLoader::addNamespace('WebCreations');


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'WebCreations\jQueryVersionSwitcher' => 'system/modules/jQueryVersionSwitcher/classes/jQueryVersionSwitcher.php',
));
