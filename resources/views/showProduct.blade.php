<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
	<title>Document</title>
	<style>
		body {
			display: flex;
			justify-content: center;
		}
		div.uk-text-center{
			width: 70%;
		}
		img {
			max-width: 400px;
		}
		.question-div {
			background-color: #F3F3F3;
		}
		.question {
			color: #333;
		}
	</style>
</head>
<body class="uk-padding">
	<div class="uk-text-center">
		<img src="{{asset($product->image)}}" alt="">
		<h2 class="uk-heading">{{$product->name}}</h2>
		@if ($product->price)
			<p>R$ {{$product->price}}</p>
		@endif
		<h3>Perguntas</h3>
		<form  action="{{$product->id}}" method="post">
			{{ csrf_field() }}
			<div class="uk-margin uk-text-left">
				<label class="uk-form-label" for="title">Titulo da pergunta</label>
				<input class="uk-input" type="text" name="title" required>
			</div>
			<div class="uk-margin uk-text-left">
				<label class="uk-form-label" for="title">Pergunta</label>
				<textarea id="story" name="question" cols="2" class="uk-textarea" required></textarea>
			</div>
			<div>
				<button class="uk-button uk-button-primary" type="submit">Enviar</button>
			</div>
		</form>
		@foreach ($product->questions as $question)
			<div class="question-div uk-padding uk-margin uk-text-left">
				<div class="">
					<h3>{{$question->title}}</h3>
				</div>
				<p class="question">{{$question->question}}</p>
				<p class="uk-margin-left">{{$question->answer}}</p>
			</div>
		@endforeach
	</div>
</body>
</html>