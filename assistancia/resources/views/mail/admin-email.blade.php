@component('mail::message')
# Nouvelle demandes - {{$demandes->titre}}

Bonjour cher administrateur,
Une nouvelle demandes a été créée, voici les détails :

*Nom:* __{{$demandes->titre}}__
*Description:* __{{$demandes->description}}__

@component('mail::button', ['url' => route('home')])
Afficher la demandes
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
