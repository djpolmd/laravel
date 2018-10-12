@extends('layouts.app')

@section('sidebar')
	@parent

@endsection

  @section('content')

  	@if (Auth::check())
		
		{!! Form::model($articol, [
			'metod' => 'PATCH', 
			'action' => ['ArticlesController@update', $articol->id]] ) !!}

	<fieldset>
 
		<legend>Edit Article:</legend>

		<!-- ID Form Input -->
		<div class="col-md-9">
            <div class="input-group">
				{!! Form::label('Id:','Name')!!}
				{!! Form::text('id',  $articol->id, ['class' => 'form-control']) !!}
		
          </div>
		</div>
			<!--'Title Form Input -->

		<div class="col-md-9">
            <div class="input-group">

				{!! Form::label('Title:','Enter Title:')!!}
				{!! Form::text('title', $articol->title, ['class' => 'form-control'])  !!}
			</div>
		</div>

			<!-- body Form Input -->

			<div class="col-md-9">
	            <div class="input-group">
					{!! Form::label('Description:','Description:')!!}
					{!! Form::textarea('description', $articol->description, ['class' => 'form-control'])  !!}
				</div>
			</div>

			<!-- Image Form Input -->

		<div class="col-md-9">
            <div class="input-group">
				{!! Form::label('Image:','Image :')!!}
				{!! Form::text('image', $articol->image, ['class' => 'form-control'])  !!}
			</div>
		</div>

			<!-- Text Form Input -->

			<div class="col-md-9">
	            <div class="input-group">
					{!! Form::label('Text:','Text')!!}
					{!! Form::textarea('text', $articol->text, ['class' => 'form-control'])  !!}
				</div>
			</div>
			<!-- Send Form Input -->

			<div class="col-md-9">
	            <div class="input-group">
	            	{!! Form::label('Send:','Send to admin email:')!!}
					
					{{ Form::checkbox('send_to_admin_email', $articol->send_to_admin_email, false ) }}
				</div>	
			</div>	

				<!-- Was_send Form Input -->

			<div class="col-md-9">
	            <div class="input-group">
	            {!! Form::label('Was_send:','If was send:')!!}

				{!! Form::checkbox('was_sent_to_admin_email', $articol->was_sent_to_admin_email, true)  !!}
				</div>
			</div>

				<!-- user_id Form Input -->

				{!! Form::hidden('user_id', Auth::user()->id)!!}

				<!-- body Form Input -->

			<div class="col-md-9">
     	       <div class="input-group">
            	{!! Form::label('created_at:','Created at:')!!}
				{!! Form::input('date','created_at', date('Y-m-d'),['class' => 'form-control', 'disabled' => 'disabled'])  !!}
				</div> 
			</div>
		
			<!-- Subbmit button on form -->
			
			<div class="form-group">

				{!! Form::submit('Edit Article', ['class' => 'btn btn-primary form-control']) !!}
			</div>
			

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