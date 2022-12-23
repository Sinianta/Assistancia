@extends('super-user.ajout')

@section('title','Assistancia-inscription')


@section('formulaire')
               <div class="login-form-box">
                  <div class="login-card">
                     <form action="{{ route('admin.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputName1">Votre Prenom:</label>
                            <input  class="input-field form-control @error('prenom') is-invalid @enderror" type="text"  id="prenom" name="prenom" placeholder="Ex: prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                            @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Votre Nom:</label>
                          <input  class="input-field form-control @error('nom') is-invalid @enderror" type="text"  id="nom" name="nom" placeholder="Ex: nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                          @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Vote Email:</label>
                          <input  class="input-field form-control @error('email') is-invalid @enderror" type="text"  id="email" name="email" placeholder="prenom@gmail.com" value="{{ old('email') }}" required autocomplete="email">
                          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Verifier l'Email</strong>
                                    </span>
                          @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Votre Date de Naissance:</label>
                            <input  class="input-field form-control @error('date_naissance') is-invalid @enderror" type="date"  id="dateNaiss" name="date_naissance" value="{{ old('date_naissance') }}" required autocomplete="date_naissance">
                            @error('date_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                          @enderror
                          </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Entrer votre mot de passe: <small>min. 6 characters</small></label>
                           <input  class="input-field form-control @error('password') is-invalid @enderror" type="password"  id="password" name="password" placeholder="Password" required autocomplete="new-password">
                           @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                           @enderror
                         </div>

                         <div class="form-group">
                            <label for="exampleInputPassword1">Entrer votre numéro de téléphone: <small>min. 13 characters</small></label>
                            <input  class="input-field form-control @error('password') is-invalid @enderror" type="Interger"  id="telephone" name="telephone" placeholder="+221........9" value="{{ old('telephone') }}" required autocomplete="telephone">
                          </div>

                          <div class="form-group" style="display: none">
                            <input class="form-control" name="priorite" value='2' >
                          </div>



                        <button type="submit" class="btn btn-primary mb-0">Enregistrer maintenant</button>
                     </form>
                  </div>

               </div>

@endsection

