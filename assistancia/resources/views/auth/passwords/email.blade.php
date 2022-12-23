@extends('layouts.app')

@section('title','Retrouve')

@section('formulaire')

<div class="login-form-box">
    <div class="login-card">
       <form action="{{ route('password.update') }}" method="POST">
          @csrf

          <div class="form-group">
            <label for="exampleInputEmail1">Entrer votre email:</label>
            <input class="input-field form-control @error('email') is-invalid @enderror" type="email" id="exampleInputEmail1" placeholder="exemple@gmail.com" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary">valider</button>

       </form>
    </div>

 </div>
@endsection
