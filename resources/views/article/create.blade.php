@extends('layouts.app')

@section('sidebar')
	@parent

@endsection

  @section('content')

  	@if (Auth::check())
		

	<div class="container">
			<h2>Edit A Form</h2><br/>
				<form method="post" action="{{action('ArtController@store')}}" enctype="multipart/form-data">
				@csrf

  	
			<!--'Title Form Input -->

		  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				{!! Form::label('Title:','Enter Title:')!!}
			<div class="input-group">

				{!! Form::text('title', 'Enter title' , ['class' => 'form-control'])  !!}

			</div></div>
		</div>

			<!-- B`ody Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
					{!! Form::label('Description:','Description:')!!}
				<div class="input-group">
					{!! Form::textarea('description', 'Enter Description', ['class' => 'form-control'])  !!}
				</div></div>
			</div>

			<!-- Image Form Input -->

		  <div class="row">
					<div class="col-md-4"></div>
					<div class="form-group col-md-4">
						<input type="file" name="filename">    
				 </div>
				</div>

			<!-- Text Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
					{!! Form::label('Text:','Text')!!}
				<div class="input-group">
					{!! Form::textarea('text', 'some text', ['class' => 'form-control'])  !!}
				</div></div>
			</div>

			<!-- Send Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
					{!! Form::label('Send:','Send to admin email:')!!}					
				<div class="input-group">
					{{ Form::checkbox('send_to_admin_email', false, false ) }}
				</div></div>
			</div>	

				<!-- Was_send Form Input -->

			  <div class="row">
			<div class="col-md-4"></div>
			<div class="form-group col-md-4">
				{!! Form::label('Was_send:','If was send:')!!}
				<div class="input-group">

				{!! Form::checkbox('was_sent_to_admin_email', false, true)  !!}
				</div></div>
			</div>

				
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