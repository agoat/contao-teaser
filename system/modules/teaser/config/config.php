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
 * -------------------------------------------------------------------------
 * CONTENT PATTERN
 * -------------------------------------------------------------------------
 */

$GLOBALS['TL_CTP']['element']['teaser'] = 'PatternTeaser';


/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['isVisibleElement'][] = array('Teaser', 'checkVisibility'); 

