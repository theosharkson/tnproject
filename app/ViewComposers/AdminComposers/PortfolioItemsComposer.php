<?php
namespace App\ViewComposers\AdminComposers;

use App\PortfolioItem;
use Illuminate\View\View;



class PortfolioItemsComposer
{
	public function compose(View $view)
	{
		$portfolioItems = PortfolioItem::get();

		$view->with('portfolioItems',$portfolioItems);
	}
}
