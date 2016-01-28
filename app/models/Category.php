<?php

class Category extends Eloquent {
	
	protected $table = 'categories';

	public function ProductCategories()
	{
		return $this->hasMany('ProductCategory');
	}

}