@extends('layouts.app')

@section('sidebar')
	@parent

@endsection

  @section('content')

  	@if (Auth::check())
		
   		  @php ($id = Auth::user()->id)
		
		{!! Form::open(['url' => '/articles/save', 'class' => 'form-horizontal']) !!}

	<fieldset>
 
		<legend>Create New Article</legend>

		<!-- ID Form Input -->
     <div class="row">
		<div class="col-md-4"></div>
			<div class="form-group">
				{!! Form::label('Id:','Name')!!}
				{!! Form::text('id','Write some name', ['class' => 'form-control']) !!}
			
			</div>
		</div>

	
			<!--'Title Form Input -->
		  <div class="row">
				<div class="col-md-4"></div>
				
			<div class="form-group">

				{!! Form::label('Title:','Enter Title:')!!}
				{!! Form::text('title','Enter title', ['class' => 'form-control'])  !!}
			</div></div>
			<!-- body Form Input -->
		  <div class="row">
				<div class="col-md-4"></div>
				
			<div class="form-group"> 

				{!! Form::label('Description:','Description:')!!}
				{!! Form::textarea('description','lorem ipsum', ['class' => 'form-control'])  !!}
			</div></div>
				<!-- Image Form Input -->

		  <div class="row">
				<div class="col-md-4"></div>
				<div class="form-group">

				{!! Form::label('Image:','Image :')!!}
				{!! Form::text('image','book.jpeg', ['class' => 'form-control'])  !!}
			</div></div>

			<!-- Text Form Input -->
			  <div class="row">
			<div class="col-md-4"></div>
		
			<div class="form-group">

				{!! Form::label('Text:','Text')!!}
				{!! Form::textarea('text','null', ['class' => 'form-control'])  !!}
			</div></div>

			<!-- Send Form Input -->
			  <div class="row">
				<div class="col-md-4"></div>
		
			<div class="form-group">

				{!! Form::label('Send:','Send to admin email:')!!}
				
				{{ Form::checkbox('send_to_admin_email', true, false ) }}
			</div>	</div>

				<!-- Was_send Form Input -->
			<div class="row">
				<div class="col-md-4"></div>
					<div class="form-group">

				{!! Form::label('Was_send:','If was send:')!!}

				{!! Form::checkbox('was_sent_to_admin_email', true, true)  !!}
			</div></div>

				<!-- user_id Form Input -->

				{!! Form::hidden('user_id', $id)!!}
					<!-- body Form Input -->
			 <div class="row">
			<div class="col-md-4"></div>
		
			<div class="form-group">
				{!! Form::label('created_at:','Created at:')!!}
				{!! Form::input('date','created_at', date('Y-m-d'),['class' => 'form-control'])  !!}
			</div> </div>

			<!-- Subbmit button on form -->
		  <div class="row">
				<div class="col-md-4"></div>
		
			<div class="form-group">

				{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
			</div></div>
			

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