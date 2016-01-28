<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		Product::create([
			'name' 			=> 'Test Product',
			'slug' 			=> 'test-product',
			'price' 		=> 100,
			'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus, turpis ac imperdiet dapibus, leo orci gravida neque, in malesuada elit libero eu sapien. Mauris sed sapien id sapien bibendum luctus et eu massa. Nulla egestas interdum magna non dignissim. Sed a laoreet purus, non rutrum augue. Proin laoreet eros nec elit mattis euismod. Aliquam facilisis, lacus blandit iaculis accumsan, leo quam sagittis nisi, non dapibus arcu libero efficitur turpis. In fringilla est nec sapien tempus suscipit. Suspendisse eget justo risus.',
		]);

		Product::create([
			'name' 			=> 'Uncategorized Product',
			'slug' 			=> 'uncategorized-product',
			'price'			=> 200,
			'description' 	=> 'This product has no category.',
		]);

		Category::create([
			'name' => 'Test Category',
			'slug' => 'test-category',
		]);

		ProductCategory::create([
			'product_id' 	=> 1,
			'category_id' 	=> 1,
		]);
	}

}
