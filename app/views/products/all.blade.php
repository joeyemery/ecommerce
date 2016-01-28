@extends('layout.base')

@section('content')

	<div class="container">
		<div class="row">
			<!-- Category Sidebar -->
			<div id="category_sidebar" class="col-md-3">
				@include('products.partials.sidebar')
			</div>

			<!-- Product Listing -->
			<div id="product_listing" class="col-md-9">
				@foreach($products as $key => $product)
				  	@include('products.partials.single-listing', ['product' => $product])
				@endforeach
			</div>
		</div>
	</div>

@endsection