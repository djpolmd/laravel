<!DOCTYPE html>
<html>
	<head>
		<title>Demo</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
		
		<style type="text/css"></style>
	</head>
	<body>
		<p>Let the game begin!</p>

		<H2>Create new Article</H2>

		{!! Form::open(['url' => 'articles', 'class' => 'form-horizontal']) !!}



    <fieldset>
 
        <legend>Create New Article</legend>

		<!-- ID Form Input -->

		<div class="form-group">
			{!! Form::label('Id:','Name')!!}

			{!! Form::text('id','Write some name', ['class' => 'form-control']) !!}
		

		</div>

			<!--'Title Form Input -->
			<div class="form-group">
				{!! Form::label('Title:','Enter Title:')!!}
				{!! Form::text('title','Enter title', ['class' => 'form-control'])  !!}
			</div>
			<!-- body Form Input -->
			<div class="form-group"> lorem
				{!! Form::label('Description:','Description:')!!}
				{!! Form::textarea('description','lorem ipsum', ['class' => 'form-control'])  !!}
			</div>
				<!-- Image Form Input -->
			<div class="form-group">
				{!! Form::label('Image:','Image :')!!}
				{!! Form::text('image','book.jpeg', ['class' => 'form-control'])  !!}
			</div>
			<!-- Text Form Input -->
			<div class="form-group">
				{!! Form::label('Text:','Text')!!}
				{!! Form::textarea('text','null', ['class' => 'form-control'])  !!}
			</div>
			<!-- Send Form Input -->
			<div class="form-group">
				{!! Form::label('Send:','Send to admin email:')!!}
				{!! Form::text('send_to_admin_email','null', ['class' => 'form-control'])  !!}
			</div>	
				<!-- Was_send Form Input -->
			<div class="form-group">
				{!! Form::label('Was_send:','If was send:')!!}
				{!! Form::text('was_sent_to_admin_email',0, ['class' => 'form-control'])  !!}
			</div>
				<!-- user_id Form Input -->
			<div class="form-group">
				{!! Form::label('user_id:','User_ID:')!!}
				{!! Form::text('user_id','1', ['class' => 'form-control'])  !!}
			</div>
					<!-- body Form Input -->
			<div class="form-group">
				{!! Form::label('created_at:','Created at:')!!}
				{!! Form::input('date','created_at', date('Y-m-d'),['class' => 'form-control'])  !!}
			</div>

			<div class=form-grop">
				
				{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

			</div>

		{!! Form::close() !!}
		<script type="text/javascript"></script>
	</body>
</html>
@section('content')
<H1></H1>
@stop