
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
			<ul>
				@foreach ($articol as $art)
				
				<li>  {{$art->title}}  
					/  {{$art->description}}
					/   
					<img src="{{URL::asset('storage/img/gun.jpeg', 'alt text', array('class' => 'css-class')) }}"> 
					</img>
					/
					{!!Html::Image('storage/img/'.$art->image)!!}

					/ {{$art->image}}
					/ {{$art->text}}
				</li>
				
				@endforeach
		
		<script type="text/javascript"></script>
	</body>
</html>