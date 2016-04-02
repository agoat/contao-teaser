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

