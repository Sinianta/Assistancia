@component('mail::message')
# Les information de votre compte administrateurs

Bonjour {{$admin->Prenom}} {{$admin->nom}},
Votre compte administrateur à été créer, voiçi vos information de connexion :

*Nom et Prenom:* __{{$admin->prenom}} {{$admin->nom}}__
*Email:* __{{$admin->email}}__
*Mot de passe:* __{{$passe}}__

@component('mail::button', ['url' => route('home')])
Se connecter
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
