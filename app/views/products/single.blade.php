@extends('layout.base')

@section('content')
	<div class="container">
		<div class="media">
		  	<div class="media-left">
		      	<img class="media-object" src="http://placehold.it/300x300" alt="...">
		  	</div>
		  	<div class="media-body">
		    	<h4 class="media-heading">{{ $product->name }} <span class="badge">&pound;{{ $product->price }}</span></h4>
		    	@if(!$product->ProductCategories->isEmpty())
			    	<ol class="breadcrumb">
			    		@foreach($product->ProductCategories as $key => $category)
			    			<li>{{ $category->Category->name }}</li>
			    		@endforeach
			    	</ol>
			    @endif
		    	<p>{{ $product->description }}</p>
		  	</div>
		</div>
	</div>
@endsection