<?php
namespace App\ViewComposers\AdminComposers;

use App\PackageType;
use Illuminate\View\View;



class PackageTypesComposer
{
	public function compose(View $view)
	{
		$packagetypes = PackageType::get();

		$view->with('packagetypes',$packagetypes);
	}
}
