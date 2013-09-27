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
 * Class jQueryVersionSwitcherRunonce
 *
 * @copyright  Web-Creations 2013
 * @author     Markus Kinzl
 */

class jQueryVersionSwitcherRunonce extends Controller
{
	
	public function run()
	{
		$this->import('Database');
		
		//update old jquery versions
		$this->Database->query("UPDATE tl_layout SET jQueryVersion='1.10.2' WHERE jQueryVersion='1.10.1'");
	}
}

$runonce = new jQueryVersionSwitcherRunonce();
$runonce->run();