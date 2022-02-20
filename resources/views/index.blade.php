<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teste</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
</head>
<body class="uk-padding">
	<h1 class="uk-heading uk-">Produtos</h1>
	<div class="uk-child-width-1-5@m" uk-grid>
		@foreach($products as $product)
		<div>
			<div class="uk-card uk-card-default">
				<div class="uk-card-media-top">
						<img src={{asset($product->image)}} alt="">
	            </div>
	            <div class="uk-card-body">
	                <h3 class="uk-card-title">{{ $product->name }}</h3>
					@if ($product->price)
	                	<p>R$ {{ $product->price }}</p>
					@endif
				</div>
				<div class="uk-padding uk-text-right">
					<a class="uk-button uk-button-default" href={{route('show_product', ['product' => $product])}}>Mostre mais</a>
				</div>
	        </div>
	    </div>
		@endforeach
	</div>
</body>
</html>