<?php
namespace App\ViewComposers\AdminComposers;

use App\UserType;
use Illuminate\View\View;



class UserTypesComposer
{
	public function compose(View $view)
	{
		$user_types = UserType::get();

		$view->with('user_types',$user_types);
	}
}
