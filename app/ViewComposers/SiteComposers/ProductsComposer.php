<?php
namespace App\ViewComposers\SiteComposers;

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
