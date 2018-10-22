@component('mail::message')
# Introduction
New article been created!
Nou articol a fost creat:  {{$art_id}} , {{$art_title}} , {{$art_data}}

@component('mail::button', ['url' => '/welcome', 'color' => 'success'])
Vew Order
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
