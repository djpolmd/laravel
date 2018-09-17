
<!DOCTYPE html>
<html>
	<head>
		<title>My site</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
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
					<TR><TH>text<TH>weight
				@foreach ($articol as $art)
					<TR><TH>{{$art->title}}<TD>{{$art->description}}<TD>{!!Html::Image('storage/img/'.$art->image)!!}<TD>{{$art->text}}
						<TD>  <TD> 
					
				@endforeach				
				</TABLE>

				@foreach ($articol as $art)
				
				<li>   {{$art->title}}  
					/  {{$art->description}}
					/
						{!!Html::Image('storage/img/'.$art->image)!!}

					/ 
					/ {{$art->text}}
				</li>
				
				@endforeach

		@else
		   <script>window.location = "/dashboard";</script>
		@endif
		<script type="text/javascript"></script>
	</body>
</html>