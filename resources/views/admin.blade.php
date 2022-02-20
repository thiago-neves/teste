<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/css/uikit.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/uikit@3.11.1/dist/js/uikit-icons.min.js"></script>
	<style>
		body {
			display: flex;
			justify-content: center;
		}
		.page {
			width: 80%;
		}
	</style>
</head>
<body class="uk-padding">
	<div class="page">
		<ul uk-tab>
			<li><a href="#">Adicionar Produtos</a></li>
			<li><a href="#">Perguntas</a></li>
		</ul>
		<ul class="uk-switcher uk-margin">
			<li>
				<form enctype="multipart/form-data" action="{{route('add_product')}}" method="post">
					{{ csrf_field() }}
					<fieldset class="uk-fieldset">
						<legend class="uk-legend">Adicionar produto</legend>
						<div class="uk-margin">
							<div uk-form-custom>
								<input class="" type="file" name="image" accept="image/*" required>
								<button class="uk-button uk-button-primary">Adicionar imagem</button>
							</div>
						</div>
						<div class="uk-margin">
							<label class="uk-form-label"  for="name">Nome</label>
							<input class="uk-input"  type="text" name="name">
						</div>
						<div>
							<label class="uk-form-label" for="types">Tipo</label>
							<div class="uk-form-controls">
								<select class="uk-select" id="types" name="type" required>
									<option value="fixed_price">Com preco fixo</option>
									<option value="without_price">Sem preco</option>
								</select>
							</div>
						</div>
						<div class="uk-margin">
							<label class="uk-form-label" for="price">Preco</label>
							<input class="uk-input"  type="number" name="price" min="0">
						</div>
						<div>
							<button class="uk-button uk-button-primary" type="submit">Confirmar</button>
						</div>
					</fieldset>
				</form>
			</li>
			<li>
				<div class="uk-child-width-1-5@m" uk-grid>
					@foreach ($questions as $question)
					@if ($question->answer == '')
					<div class="uk-padding">
						<div class="uk-card uk-card-default">
							<div class="uk-card-body">
								<h3 class="ukk-card-title">{{$question->title}}</h3>
								<p>{{$question->question}}</p>
								<div class="uk-padding uk-text-right">
									<a class="uk-button uk-button-default" href={{route('show_question', ['question' => $question])}}>Responder</a>
								</div>
							</div>
						</div>
					</div>
					@endif
					@endforeach
				</div>
			</li>
		</ul>
	</div>
</body>
</html>