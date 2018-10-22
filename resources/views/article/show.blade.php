@extends('layouts.app')

@section('content')

		<p>Article</p>

		<h1> {{$articol->title}} </h1>
		<TABLE>
			<TR>Articol:{{$articol->id}}</TR>
		<TH>{{$articol->title}}<br><TD>
			{{$articol->description}}<TD>
			{!!Html::Image('storage/img/'.$articol->image)!!}<TD>
			{{$articol->text}}
					
</TABLE>
		<script type="text/javascript"></script>\
@endsection