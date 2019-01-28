<?php
namespace App\ViewComposers\AdminComposers;

use App\Portfolio;
use Illuminate\View\View;



class PortfoliosComposer
{
	public function compose(View $view)
	{
		$portfolios = Portfolio::get();

		$view->with('portfolios',$portfolios);
	}
}
