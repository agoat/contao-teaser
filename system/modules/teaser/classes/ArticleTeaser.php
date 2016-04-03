<?php

/**
 * Contao Open Source CMS Extension
 *
 * @package  	 Teaser (Content block pattern)
 * @author   	 Arne Stappen
 * @license  	 LGPL-3.0+ 
 * @copyright	 Arne Stappen (2016)
 */
 
namespace Contao;


class ArticleTeaser extends News
{
	protected $strLink = false;
	
	public function getLink($intId) 
	{ 
		if ($this->strLink)
		{
			return $this->strLink;
		}
		
		$objArticle = \ArticleModel::findByPk($intId);
		$objPage = \PageModel::findWithDetails($objArticle->pid);
		
		$article = (!\Config::get('disableAlias') && $objArticle->alias != '') ? $objArticle->alias : $objArticle->id;
		$href = '/articles/' . (($objArticle->inColumn != 'main') ? $objArticle->inColumn . ':' : '') . $article;
		
		$this->strLink = $this->generateFrontendUrl($objPage->row(), $href);

		return $this->strLink;		
	}
}
