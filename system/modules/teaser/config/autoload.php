<?php
/**
 * Contao Open Source CMS Extension
 *
 * @package  	 Teaser (Content block pattern)
 * @author   	 Arne Stappen
 * @license  	 LGPL-3.0+ 
 * @copyright	 Arne Stappen (2016)
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


