<?php
namespace App\ViewComposers\SiteComposers;

use App\Package;
use Illuminate\View\View;



class PackagesComposer
{
	public function compose(View $view)
	{
		$packages = Package::where('active_status',1)->get();

		$view->with('packages',$packages);
	}
}
