<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package  	 ReadMore
 * @author   	 Arne Stappen
 * @license  	 LGPL-3.0+ 
 * @copyright	 Arne Stappen 2015
 */
 
 
/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\\ArticleTeaser' 	=> 'system/modules/teaser/classes/ArticleTeaser.php',
	'Contao\\NewsTeaser' 		=> 'system/modules/teaser/classes/NewsTeaser.php',

	// Pattern
	'Contao\\PatternTeaser' 	=> 'system/modules/teaser/pattern/PatternTeaser.php',

	// Hook
	'Contao\\Teaser' 		=> 'system/modules/teaser/classes/Teaser.php'
));


