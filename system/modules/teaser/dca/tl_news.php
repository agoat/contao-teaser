<?php
/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */
 
 
/**
 * Palettes
 */

// remove teaser
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('{teaser_legend},subheadline,teaser;', '', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
// remove add image
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('{image_legend},addImage;', '', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
// remove enclosures
$GLOBALS['TL_DCA']['tl_news']['palettes']['default'] = str_replace('{enclosure_legend:hide},addEnclosure;', '', $GLOBALS['TL_DCA']['tl_news']['palettes']['default']);
