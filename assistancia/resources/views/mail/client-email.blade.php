@component('mail::message')
# La reponse de la demande:

Bonjour {{$demandes->user->prenom}} {{$demandes->user->nom}},
Votre demande est maintenant achevée. Voir les informations sous-dessous

*Tritre:* __{{$demandes->titre}}__
*Description:* __{{$demandes->description}}__
*Reponse:* __{{$demandes->reponse}}__

@component('mail::button', ['url' => route('home')])
Plus de détaille
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
