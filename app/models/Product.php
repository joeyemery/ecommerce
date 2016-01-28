<?php

class Product extends Eloquent {
	
	protected $table = 'products';

	public function ProductCategories()
	{
		return $this->hasMany('ProductCategory');
	}

}