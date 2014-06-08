<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   jQueryVersionSwitcher
 * @author    Markus Kinzl
 * @license   LGPL
 * @copyright Web-Creations 2014
 */

/**
 * Class jQueryVersionSwitcherRunonce
 *
 * @copyright  Web-Creations 2014
 * @author     Markus Kinzl
 */

class jQueryVersionSwitcherRunonce extends Controller
{
	
	public function run()
	{
		$this->import('Database');
		
		//update old jquery versions
		//1.10.1 to 1.10.2
		$this->Database->query("UPDATE tl_layout SET jQueryVersion='1.10.2' WHERE jQueryVersion='1.10.1'");
		//1.11.0 to 1.11.1
		$this->Database->query("UPDATE tl_layout SET jQueryVersion='1.11.1' WHERE jQueryVersion='1.11.0'");
		//2.1.0 to 2.1.1
		$this->Database->query("UPDATE tl_layout SET jQueryVersion='2.1.1' WHERE jQueryVersion='2.1.0'");
	}
}

$runonce = new jQueryVersionSwitcherRunonce();
$runonce->run();