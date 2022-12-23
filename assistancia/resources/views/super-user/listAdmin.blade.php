@extends('super-user.accueil')

@section('superTitre','Assistanci-Liste-admin')
@section('demandeAttente')
{{$nbAt}}
@endsection
@section('demandeTr')
{{$nbT}}
@endsection
@section('demandeRe')
{{$nbR}}
@endsection
@section('demandeCour')
{{$nbCour}}
@endsection

@section('super_contenue')


    <div class="row" id="attentes">
        <div class="col-lg-12">
            <div class="card transparent-card">
                <div class="card-header pb-0">
                    <h4 class="card-title mt-2">Les demandes Achevées</h4>

                </div>
                @if ($admins->isEmpty())
                <div class="card-header pb-0">
                    <h4 class="card-title mt-2">Il y a aucun administrateur</h4>

                </div>
                @else
                <div class="card-body p-0">

                                @foreach ($admins as $admin)
                                <div class="border border-danger p-2 mb-2" >
                                    <div class="col-md-12 col-sm-6 text-md-left text-center" id="dropdown">
                                    <div class="solutions-section-plan-box hover-effect">
                                        <div class="row">
                                            <div class="col-lg-9 col-12">
                                                <a href="{{ route('connexion.show',$admin->id) }}"><h4 class="text-danger">{{ $admin->prenom}} {{ $admin->nom}}</h4></a>
                                            </div>
                                            <div class="col-lg-3 col-12">
                                                <figure>
                                                    <a >
                                                        <form class="d-inline" action="{{ route('admin.destroy', compact('admin')) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                                        </form>
                                                    </a>
                                                    {{-- <img src="images/solution-section-plan-box-img-3.png" alt=""> --}}
                                                </figure>
                                            </div>

                                            <p class="text-size-16 mb-0 text-primary"> La date de naissance: {{ $admin->date_naissance}}   ==></p><br>
                                            <p class="text-size-16 mb-0 text-primary"> Numero de téléphone: {{ $admin->telephone}} </p>
                                        </div>
                                    <div class="dropdown-content">



                                </div>
                               </div>
                                </div>

                                </div>

                                @endforeach

                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
