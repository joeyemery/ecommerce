<?php

class ProductCategory extends Eloquent {
	
	protected $table = 'product_categories';

	public function Category() {
		return $this->hasOne('Category', 'id', 'category_id');
	}

	public function Product()
	{
		return $this->hasOne('Product', 'id', 'product_id');
	}

}