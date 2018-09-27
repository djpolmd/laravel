<!DOCTYPE html>
<html>
	<head>
		<title>Article SHOW</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		<style type="text/css"></style>
	</head>
	<body>
		<p>Article</p>

		<h1> {{$articol->title}} </h1>
		<TABLE>
			<TR>Articol:{{$articol->id}}</TR>
		<TH>{{$articol->title}}<br><TD>
			{{$articol->description}}<TD>
			{!!Html::Image('storage/img/'.$articol->image)!!}<TD>
			{{$articol->text}}
					
</TABLE>
		<script type="text/javascript"></script>\
	</body>
</html>