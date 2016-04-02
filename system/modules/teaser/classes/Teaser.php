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
 


namespace Contao;


class Teaser extends Frontend
{
	// isVisible Hook
	public function checkVisibility($objElement, $blnIsVisible) 
	{ 
		// direct article view
		if (($objElement->ptable == "tl_article" && \Input::get('articles')) || 
			($objElement->ptable == "tl_news" && \Input::get('items')))
		{

			if ($objElement->teaser == 'teaser')
			{
				$blnIsVisible = false;
			}

		}
		else
		{
			if ($objElement->teaser == 'article')
			{
				$blnIsVisible = false;
			}
		}
		return $blnIsVisible;
	}
	
}


