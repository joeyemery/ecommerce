<div class="panel panel-default">
	<div class="panel-heading">Categories</div>
	<ul class="list-group">
			<li class="list-group-item"><a href="{{ Route('home') }}">All</a></li>
		@foreach($categories as $key => $category)
			<li class="list-group-item"><a href="{{ Route('category.single', $category->slug) }}">{{ $category->name }}</a></li>
		@endforeach
	</ul>
</div>