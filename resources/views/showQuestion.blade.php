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
</head>
<body class="uk-padding">
	<div class="uk-text-center">
		<div>
			<h2>{{$question->title}}</h2>
			<p>
				{{$question->question}}
			</p>
			<form action="{{$question->id}}" method="post">
				{{ csrf_field() }}
				<div class="uk-margin">
					<textarea name="answer" rows="2" class="uk-textarea"></textarea>
				</div>
				<button class="uk-button uk-button-primary">Enviar reposta</button>
			</form>

		</div>
	</div>
</body>
</html>