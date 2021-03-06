<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Articles test page</title>

		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

		<!-- Styles -->
		<style>
			html, body {
				background-color: #fff;
				color: #636b6f;
				font-family: 'Nunito', sans-serif;
				font-weight: 200;
				height: 100vh;
				margin: 0;
			}

			.full-height {
				height: 100vh;
			}

			.flex-center {
				align-items: center;
				display: flex;
				justify-content: center;
			}

			.position-ref {
				position: relative;
			}

			.top-right {
				position: absolute;
				right: 10px;
				top: 18px;
			}

			.content {
				text-align: center;
			}

			.title {
				font-size: 84px;
			}

			.links > a {
				color: #636b6f;
				padding: 0 25px;
				font-size: 12px;
				font-weight: 600;
				letter-spacing: .1rem;
				text-decoration: none;
				text-transform: uppercase;
			}

			.m-b-md {
				margin-bottom: 30px;
			}
		</style>
	</head>
	<body>
		<div class="flex-center position-ref full-height">
			@if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ route('login') }}">Login</a>
						<a href="{{ route('register') }}">Register</a>
					@endauth
				</div>
			@endif

			<div class="content">
				<div class="title m-b-md">
					Articles test page
				</div>

				<ul class="list-group">

				<li class="list-group-item"> 
					<a href="/articles">			Vizualiare articole (lista) : GET /articles &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li><br>
				<li class="list-group-item"> 
					<a href="articles/add">			Adaugare articol : GET /articles/add  -> POST /article/save</a></li><br>
				<li class="list-group-item">
					<a href="articles/edit/1">		Editare articol : GET /articles/edit/{articles_ID} -></a></li><br>

				<li class="list-group-item"> 	Modificare articol : PATCH /articles/update/{id}</li><br>
				<li class="list-group-item">
					<a href="/articles/id_search">	Vizualizare unui articol {ID} : GET /articles/{articles_ID} </a></li>
					
				</ul class="list-group">
			</div>
		</div>
	</body>
</html>
