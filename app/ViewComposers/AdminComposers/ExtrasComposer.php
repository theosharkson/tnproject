<?php
namespace App\ViewComposers\AdminComposers;

use App\Extra;
use Illuminate\View\View;



class ExtrasComposer
{
	public function compose(View $view)
	{
		$extras = Extra::get();

		$view->with('extras',$extras);
	}
}
