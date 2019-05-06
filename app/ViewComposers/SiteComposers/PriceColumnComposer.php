<?php
namespace App\ViewComposers\SiteComposers;

use Illuminate\View\View;



class PriceColumnComposer
{
	public function compose(View $view)
	{
		$county_price = coutyPrice();

		$view->with('county_price',$county_price);
	}
}
