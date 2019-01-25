<?php
namespace App\ViewComposers\SiteComposers;

use App\PackageType;
use Illuminate\View\View;



class PackageTypesComposer
{
	public function compose(View $view)
	{
		$package_types = PackageType::where('active_status',1)->get();

		$view->with('package_types',$package_types);
	}
}
