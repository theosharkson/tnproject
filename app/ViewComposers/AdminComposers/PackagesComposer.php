<?php
namespace App\ViewComposers\AdminComposers;

use App\Package;
use Illuminate\View\View;



class PackagesComposer
{
	public function compose(View $view)
	{
		$packages = Package::get();

		$view->with('packages',$packages);
	}
}
