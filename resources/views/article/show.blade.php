@extends('layouts.app')

@section('content')

		
	<div class="container">
		<div class="row">
			<p>Article titlu: </p>
     		<div class="col-md-10 col-md-offset-1">
     		  	<div class="panel panel-default">
        		  <div class="panel-heading text-justify" >
							<h1>	{{$articol->title}} </h1><br>
						
							Articol ID:{{$articol->id}}<br>
							Descriere: {{$articol->description}}<br>
							Imagine: {!!Html::Image('public/img/'.$articol->image)!!}<br>
							Text: {{$articol->text}}<br>
							Creat : {{$articol->created_at}}<br>
							Modificat : {{$articol->updated_at}}<br>
							Trimitere emailului a fost solicitata {{$articol->send_to_admin_email}} <br>
							Email fost expediat catre administartor : {{$articol->was_sent_to_admin_email}}

	</div>
		<script type="text/javascript"></script>
@endsection