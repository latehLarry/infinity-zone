@if($section == 'edit')
<div class="mb-10">
	<form action="{{ route('post.deleteproduct', ['product' => $product->id]) }}" method="post">
		@csrf
		<button type="submit" class="text-danger">delete this product</button>
	</form>
</div>
@endif
<div class="container">
	<a href="{{ $section == 'edit' ? route('images', ['section' => $section, 'product' => $product->id]) : route('images', ['section' => 'add']) }}" class="inblock">Images</a> &rarr;
	<a href="{{ $section == 'edit' ? route('offers', ['section' => $section, 'product' => $product->id]) : route('offers', ['section' => 'add']) }}" class="inblock">Offers</a> &rarr;
	<a href="{{ $section == 'edit' ? route('deliveries', ['section' => $section, 'product' => $product->id]) : route('deliveries', ['section' => 'add']) }}" class="inblock">Deliveries</a> &rarr;
	<a href="{{ $section == 'edit' ? route('informations', ['section' => $section, 'product' => $product->id]) : route('informations', ['section' => 'add']) }}" class="inblock">Basic information</a>
</div>
