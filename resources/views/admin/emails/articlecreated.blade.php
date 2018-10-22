@component('mail::message')
# Utilizatorul ID : {{$user}} 
New article been created! <br>
Nou articol a fost creat:  {{$art_id}}, <br>
Titlu articol: {{$art_title}} , <br>
Data de creare : {{$art_data}}. <br>

@php ( $url = 'http://127.0.0.1:8000/articles/'. $art_id) )

@component('mail::button', ['url' => $url, 'color' => 'success'])
Vew Order
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
