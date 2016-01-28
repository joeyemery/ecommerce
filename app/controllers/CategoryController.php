<?php

class CategoryController extends Controller {
	
	public function single($slug)
	{
		$categories = Category::all();
		$products = Category::where('slug', '=', $slug)->with('ProductCategories.Product')->first();
		
		return View::make('products.category', [
			'categories' => $categories,
			'products' => $products
		]);
	}

}