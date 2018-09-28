
<!DOCTYPE html>
<html>
	<head>
		<title>My site</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<style type="text/css"></style>
	</head>
	<body>
		@if (Auth::check()) 		
			<ul>
				Curent User is :  {{auth()->user()->name}}
				
				<TABLE border="1"
				   summary="Tabelul cu articole">
					<CAPTION><EM>E un test model cu celule model</EM></CAPTION>
					<TR><TH rowspan="2"><TH colspan="2">Descrierea gen a articolelor
					<TH rowspan="2">Titlu<BR>Descrierea
					<TR><TH>text<TH>Imagine
				@foreach ($articol as $art)
					<TR><TH><a href="{{ url('/articles',$art->id) }}"> {{$art->title}} </a>
					<TD>{{$art->description}}<TD>{!!Html::Image('storage/img/'.$art->image)!!}<TD>{{$art->text}}
					 
					
				@endforeach				
				</TABLE>

		@else
		   <script>window.location = "/login";</script>  {{-- For more secure it ca be changed to --}}
		@endif
		<script type="text/javascript"></script>
	</body>
</html>