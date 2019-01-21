<?php
namespace App\ViewComposers\AdminComposers;

use App\User;
use Illuminate\View\View;



class StaffsComposer
{
	public function compose(View $view)
	{
		$staffs = User::where('user_type','<>',getCustomerRoleId())->get();

		$view->with('staffs',$staffs);
	}
}
