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
		{!! Form::open() !!}
		<!-- ID Form Input -->

		<div class="form-group">
			{!! Form::label('Id:','Name')!!}

			{!! Form::text('id','null', ['class' => 'form-control']) !!}
		

		</div>

			<!--'Title Form Input -->
			<div class="form-group">
				{!! Form::label('Title:','Enter Title:')!!}
				{!! Form::text('Title','null', ['class' => 'form-control'])  !!}
			</div>
			<!-- body Form Input -->
			<div class="form-group">
				{!! Form::label('Description:','Description:')!!}
				{!! Form::textarea('Description','null', ['class' => 'form-control'])  !!}
			</div>
				<!-- Image Form Input -->
			<div class="form-group">
				{!! Form::label('Image:','Image :')!!}
				{!! Form::text('Image','null', ['class' => 'form-control'])  !!}
			</div>
			<!-- Text Form Input -->
			<div class="form-group">
				{!! Form::label('Text:','Text')!!}
				{!! Form::textarea('Text','null', ['class' => 'form-control'])  !!}
			</div>
			<!-- Send Form Input -->
			<div class="form-group">
				{!! Form::label('Send:','Send to admin email:')!!}
				{!! Form::text('Send','null', ['class' => 'form-control'])  !!}
			</div>	
				<!-- Was_send Form Input -->
			<div class="form-group">
				{!! Form::label('Was_send:','If was send:')!!}
				{!! Form::text('Was_send','null', ['class' => 'form-control'])  !!}
			</div>
				<!-- user_id Form Input -->
			<div class="form-group">
				{!! Form::label('user_id:','User_ID:')!!}
				{!! Form::text('user_id','null', ['class' => 'form-control'])  !!}
			</div>
				<!-- created_at Form Input -->
			<div class="form-group">
				{!! Form::label('created_at:','Created At:')!!}
				{!! Form::text('created_at','null', ['class' => 'form-control'])  !!}
			</div>
				<!-- updated_at Form Input -->
			<div class="form-group">
				{!! Form::label( 'updated_at:','Uploaded At:')!!}
				{!! Form::text( 'updated_at','null', ['class' => 'form-control'])  !!}
			</div>

		{!! Form::close() !!}
		<script type="text/javascript"></script>
	</body>
</html>
@section('content')
<H1></H1>
@stop