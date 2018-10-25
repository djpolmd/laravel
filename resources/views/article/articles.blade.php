@extends('layouts.app')

@section('content')
	
			<ul> Curent User is :
				@if (Auth::check())  {{auth()->user()->name}}
				@else Guest @endif

			<div class="table-responsive">
				<table border="0" summary="Tabelul cu articole" class="table">
					
					<thead>
					<th>Titlu <br> Descrierea </th>
						<th>text 			</th>
						<th>Imagine 		</th>
						<th>Created     	</th>	
						<th>Updated:    	</th>
						<th>Send to admin   </th>
						<th>Was Send        </th>
						<th> User ID       </th>
						</thead>
						
						<tbody>
			@foreach ($articol as $art)
					<tr>
					<td>
						<a href="{{ url('/articles',$art->id) }}"> 
						ID: {{$art->id}} 	 	 <br>
						{{$art->title}}  		 <br> 						
						{{$art->created_at}} </a> </td>						
					<td>{{$art->description}}
					<td> {{$art->image}}<br>
					<img src = {{ asset('/image/'.$art->image) }} alt=asset{{$art->image}} height="74" width="74" >
					<td>{{$art->text}}
					<td>{{$art->created_at}}<br>
					<td>{{$art->updated_at}}<br>
					<td>{{$art->send_to_admin_email}} <br>
					<td>{{$art->was_sent_to_admin_email}}
					<td>{{$art->user_id}}
					</tr>
			@endforeach		
				</tbody>		
				</table></div>

		<script type="text/javascript"></script>
@endsection