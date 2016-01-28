<?php

class ProductController extends Controller {
	
	public function all()
	{
		$products = Product::all();
		$categories = Category::all();

		return View::make('products.all', [
			'products' => $products,
			'categories' => $categories
		]);
	}

	public function single($slug)
	{
		$product = Product::where('slug', '=', $slug)->with('ProductCategories.Category')->first();

		return View::make('products.single', [
			'product' => $product
		]);
	}

}