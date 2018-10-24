@extends('layouts.app')

@section('sidebar')
	@parent

@endsection

  @section('content')

	@if (Auth::check())
	

	<div class="container">
			<h2>Edit A Form</h2><br/>
				<form method="post" action="{{action('ArtController@update', $id)}}">
				@csrf
				<input name="_method" type="hidden" value="PATCH">

  	 <div class="row"><div class="col-md-4"></div><div class="form-group col-md-4">
		<legend>Edit Article:</legend>
	</div></div>
		<!-- ID Form Input -->
		  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				{!! Form::label('Id:','Name')!!}
			<div class="input-group">
				{!! Form::text('id',  $articol->id, ['class' => 'form-control']) !!}
		
		  </div></div>
		</div>

			<!--'Title Form Input -->

		  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				{!! Form::label('Title:','Enter Title:')!!}
			<div class="input-group">

				{!! Form::text('title', $articol->title, ['class' => 'form-control'])  !!}

			</div></div>
		</div>

			<!-- B`ody Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
					{!! Form::label('Description:','Description:')!!}
				<div class="input-group">
					{!! Form::textarea('description', $articol->description, ['class' => 'form-control'])  !!}
				</div></div>
			</div>

			<!-- Image Form Input -->

		  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				{!! Form::label('Image:','Image :')!!}
		   <div class="input-group">
				{!! Form::text('image', $articol->image, ['class' => 'form-control'])  !!}
			</div></div>
		</div>

			<!-- Text Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
					{!! Form::label('Text:','Text')!!}
				<div class="input-group">
					{!! Form::textarea('text', $articol->text, ['class' => 'form-control'])  !!}
				</div></div>
			</div>

			<!-- Send Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
					{!! Form::label('Send:','Send to admin email:')!!}					
				<div class="input-group">
					{{ Form::checkbox('send_to_admin_email', $articol->send_to_admin_email, false ) }}
				</div></div>
			</div>	

				<!-- Was_send Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				{!! Form::label('Was_send:','If was send:')!!}
				<div class="input-group">

				{!! Form::checkbox('was_sent_to_admin_email', $articol->was_sent_to_admin_email, true)  !!}
				</div></div>
			</div>

				<!-- User_id Form Input -->

				{!! Form::hidden('user_id', Auth::user()->id)!!}

				<!-- body Form Input -->

				{!! Form::hidden('created_at', $articol->created_at)!!}
		
				<!-- Subbmit button on form -->
				<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
				
					{!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
				</div></div>
				</fieldset>

				{!! Form::close() !!}

				<!-- Validation field check -->
		
							@if ($errors->any())
							<div class="alert alert-danger">
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif

			@else 
				<H2> Please log-in </H2>
			@endif

		<!-- Error message if some wrong -->
		
@stop