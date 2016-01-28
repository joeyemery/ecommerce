<div class="col-md-4">
	<div class="thumbnail">
  		<img src="http://placehold.it/600x600" class="img-responsive" alt="{{ $product->name }}">
  		<div class="caption text-center">
    		<h3>{{ $product->name }}</h3>
    		<p>{{ str_limit($product->description, 100, '...') }}</p>
    		<p><a href="{{ Route('product.single', $product->slug) }}" class="btn btn-default" role="button">View product</a></p>
  		</div>
	</div>
</div>