@extends('layouts.app')

@section('sidebar')
	@parent

@endsection
@section('content')
  
     <div class="alert alert-success">
  			<strong>Success!</strong> {{$mesaga}}
	</div>
       
@endsection