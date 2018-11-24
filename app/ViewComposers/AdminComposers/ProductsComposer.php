<?php
namespace App\ViewComposers\AdminComposers;

use App\Product;
use Illuminate\View\View;



class ProductsComposer
{
	public function compose(View $view)
	{
		$products = Product::get();

		$view->with('products',$products);
	}
}
