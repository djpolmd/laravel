@extends('app')

@section('content')

    <h1>Write a New Article</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!} <!-- ['url' => 'articles'] sends input to /articles page -->

        @include('articles._form', ['submitButtonText' => 'Add Article'])

    {!! Form::close() !!}

@include('errors.list')

@stop