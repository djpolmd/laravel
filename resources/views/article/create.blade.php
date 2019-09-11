@extends('layouts.app')

@section('sidebar')
    @parent

@endsection

  @section('content')

    @if (Auth::check())
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Add new Article') }}</div>

                            <div class="card-body">


                    <form method="post" action="{{action('ArtController@store')}}" enctype="multipart/form-data">
                        @csrf
                        <!--'Title Form Input -->
                            <div class="form-group row">
                                {!! Form::label('Title:','Enter Title:')!!}
                            </div>
                            <div class="input-group">
                                {!! Form::text('title', null , ['class' => 'form-control'])  !!}
                            </div>


                  <!-- Body Form Input -->
                            <div class="form-group row">
                                {!! Form::label('Description:','Description:')!!}
                            </div>
                            <div class="input-group">
                                {!! Form::textarea('description', null, ['class' => 'form-control'])  !!}
                            </div>
                <!-- Image Form Input -->
                            <div class="form-group row">
                                <input type="file" name="filename">
                            </div>

                <!-- Text Form Input -->

                            <div class="form-group row">
                                {!! Form::label('Text:','Text')!!}
                            </div>
                                <div class="input-group">
                                    {!! Form::textarea('text', null, ['class' => 'form-control'])  !!}
                                </div>
                <!-- Send admin Form Input -->
                            <div class="form-group row">
                                <input type="checkbox" id="send_to_admin_email" name="send_to_admin_email" value="yes" checked />
                                <label for="send_to_admin_email">Send to admin an email</label>
                            </div>

                    <!-- Subbmit button on form -->
                            <div class="form-group row">
                                {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
                            </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
