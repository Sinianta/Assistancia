

@extends('super-user.accueil')

@section('superTitre','Assistancia-super-user')
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
<div class="card-body p-0" id="voirDemandes">
    <div class="card-header pb-0">
        <h4 class="card-title mt-2">Les demandes en attentes</h4>

    </div>

    <div class="table-responsive">
        @if ($demandes->isEmpty())
        <div class="card-header pb-0">
            <h4 class="card-title mt-2">Aucun demande en attente</h4>

        </div>
        @else
        <table class="table table-padded recent-order-list-table table-responsive-fix-big">
            <thead>
                <tr>
                    <th scope="col">#No</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Date</th>
                    <th scope="col">desciption</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($demandes as $demande)
                <tr class="">
                    <td scope="row">{{ $loop->index +1}}</td>
                    <td><a href="javascript:void()" class="mr-4 bg-warning  text-center text-uppercase ">{{ $demande->titre}}</a>
                    </td>
                    <td class="text-muted">{{ $demande->created_at}}</td>
                    <td><a href="javascript:void()" class="text-primary">{{ $demande->description}}</a></td>
                    <td>
                        <a href="" class="mr-2 bg-primary  text-center">{{ $demande->status}}</a>

                    </td>
                    <td>
                        <a href="" class="mr-2 bg-primary  text-center">
                            <form class="d-inline" action="{{ route('demande.destroy', compact('demande')) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>

                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</div>
<div class="row" id="attentes">
    <div class="col-lg-12">
        <div class="card transparent-card">
            <div class="card-header pb-0">
                <h4 class="card-title mt-2">Les demandes en cour de traitement</h4>

            </div>
            @if ($demandeCour->isEmpty())
            <div class="card-header pb-0">

                <h4 class="card-title mt-2">aucun demande n'est en cour de traitement</h4>

            </div>
            @else
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                        <thead>
                            <tr>
                                <th scope="col">#No</th>
                                <th scope="col">Titre</th>
                                <th scope="col">Date</th>
                                <th scope="col">desciption</th>

                                <th scope="col">Status</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($demandeCour as $demandeCour)
                            <tr class="">
                                <td scope="row">{{ $loop->index +1}}</td>
                                <td><a href="" class="mr-4 bg-warning  text-center text-uppercase ">{{ $demandeCour->titre}}</a>
                                </td>
                                <td class="text-muted">{{ $demandeCour->created_at}}</td>
                                <td><a href="javascript:void()" class="text-primary">{{ $demandeCour->description}}</a></td>

                                <td>
                                    <a  class="mr-2 bg-primary rounded-circle text-center" >

                                        <button type="submit" class="btn btn-primary mb-0">{{ $demandeCour->status}}</button>

                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            @endif
        </div>
    </div>
</div>
<div class="row" id="attentes">
    <div class="col-lg-12">
        <div class="card transparent-card">
            <div class="card-header pb-0">
                <h4 class="card-title mt-2">Les demandes Achevées</h4>

            </div>
            @if ($demandeTrait->isEmpty() && $demandeRejet->isEmpty())
            <div class="card-header pb-0">
                <h4 class="card-title mt-2">Aucun demande achevées</h4>

            </div>
            @else
            <div class="card-body p-0">

                            @foreach ($demandeTrait as $demandeTrait)
                            <div class="border border-danger p-2 mb-2" >
                                <div class="col-md-12 col-sm-6 text-md-left text-center" id="dropdown">
                                <div class="solutions-section-plan-box hover-effect">
                                    <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <h4 class="text-danger">{{ $demandeTrait->titre}}</h4>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <figure>
                                                <a >
                                                    <button class="btn btn-success mb-0" name="enCour" id="dropbtn">{{ $demandeTrait->status}}</button>

                                                </a>
                                                {{-- <img src="images/solution-section-plan-box-img-3.png" alt=""> --}}
                                            </figure>
                                        </div>

                                        <p class="text-size-16 mb-0 text-primary">{{ $demandeTrait->description}}</p>
                                    </div>
                                <div class="dropdown-content">

                                <div class="form-group">
                                    <h3 class="text-label">Reponse</h3>
                                    <p class="text-size-16 mb-0 text-primary">{{ $demandeTrait->reponse}}</p>

                                </div>
                            </div>
                           </div>
                            </div>

                            </div>

                            @endforeach
                            @foreach ($demandeRejet as $demandeRejet)
                            <div class="border border-danger p-2 mb-2" >
                                <div class="col-md-12 col-sm-6 text-md-left text-center" id="dropdown">
                                <div class="solutions-section-plan-box hover-effect">
                                    <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <h4 class="text-danger">{{ $demandeRejet->titre}}</h4>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <figure>
                                                <a >
                                                    <button class="btn btn-danger mb-0" name="enCour" id="dropbtn">{{ $demandeRejet->status}}</button>

                                                </a>
                                                {{-- <img src="images/solution-section-plan-box-img-3.png" alt=""> --}}
                                            </figure>
                                        </div>

                                        <p class="text-size-16 mb-0 text-primary">{{ $demandeRejet->description}}</p>
                                    </div>
                                <div class="dropdown-content">

                                <div class="form-group">
                                    <h3 class="text-label">Reponse</h3>
                                    <p class="text-size-16 mb-0 text-primary">{{ $demandeRejet->reponse}}</p>
                                    {{-- <a class="form-control text-success" >{{ $demandeRejet->reponse}}</a> --}}
                                </div>
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
