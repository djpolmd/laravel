@extends('layouts.app')

@section('content')

		@if (Auth::check()) 		
			<ul>
				Curent User is :  {{auth()->user()->name}}
				
				<TABLE border="1"
				   summary="Tabelul cu articole">
					<CAPTION><EM>E un test model cu celule model</EM></CAPTION>
					<TR><TH rowspan="2"><TH colspan="2">Descrierea gen a articolelor
					<TH rowspan="2">Titlu<BR>Descrierea
					<TR><TH>text<TH>Imagine
			@foreach ($articol as $art)
					<TR><TH><a href="{{ url('/articles',$art->id) }}"> {{$art->title}} <br> 
						{{$art->created_at}} </a>
					<TD>{{$art->description}}<TD>
						{!!Html::Image('storage/img/'.$art->image)!!}<TD>{{$art->text}}
					
			@endforeach				
				</TABLE>

		@else
		   <script>window.location = "/login";</script>  {{-- For more secure it ca be changed to --}}
		@endif
		<script type="text/javascript"></script>
@endsection