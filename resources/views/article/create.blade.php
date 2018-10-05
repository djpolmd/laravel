
@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p> This is appended to the master sidebar.</p>
@endsection

  @section('content')


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

			<div class="form-group"> 

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

			<!-- Subbmit button on form -->

			<div class=form-grop">
				
				{!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}

			</div>

			{!! Form::close() !!}


</html>


<!-- Error message if some wrong -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
		

@stop