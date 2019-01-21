<?php
namespace App\ViewComposers\AdminComposers;

use App\Feature;
use Illuminate\View\View;



class FeaturesComposer
{
	public function compose(View $view)
	{
		$features = Feature::get();

		$view->with('features',$features);
	}
}
