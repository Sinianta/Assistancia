@extends('login.templete')

@section('title','Assistancia-login')

@section('formulaire')
                  <div class="login-form-box">
                     <div class="login-card">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                           <div class="form-group">
                             <label for="exampleInputEmail1">Entrer votre email:</label>
                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="exemple@gmail.com">
                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Email incorrect</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group">
                             <label for="exampleInputPassword1">Entrer votre mot de passe:</label>
                             <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Mot de passe">
                             @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Verifier le mot de passe</strong>
                                    </span>
                                @enderror
                           </div>
                           <button type="submit" class="btn btn-primary">Connexion</button>
                           <div>
                              <label class="mb-0" style="cursor: pointer;">
                              <input class="checkbox" type="checkbox" name="userRememberMe" {{ old('remember') ? 'checked' : '' }}>
                              Se souvenir de moi
                              </label>
                              @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-password float-right">Mot de passe oublier?</a>
                              @endif
                           </div>
                        </form>
                     </div>
                     <div class="join-now-outer text-center">
                        <a class="text-white" href="{{ route('register') }}">Joindre maintenant, créer votre compte</a>
                     </div>
                  </div>
@endsection

