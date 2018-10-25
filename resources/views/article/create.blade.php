@extends('layouts.app')

@section('sidebar')
	@parent

@endsection

  @section('content')

	@if (Auth::check())
		
	<div class="container">
			<h2>Add new Articles</h2><br/>
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

			<!-- Body Form Input -->

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

			<!-- Send admin Form Input -->

			<div class="row">
				<div class="col-md-4"></div>
				   <input type="checkbox" id="send_to_admin_email" name="send_to_admin_email"
						   value="yes" checked />
					<label for="send_to_admin_email">Send to admin an email</label>
				</div>

			

				
				<!-- Subbmit button on form -->
				<div class="row">
				<div class="col-md-4"></div>
				<div class="form-group col-md-4">
				
					{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
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