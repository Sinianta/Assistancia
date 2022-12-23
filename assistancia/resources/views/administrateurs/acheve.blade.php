@extends('administrateurs.adminTemplete')

@section('adminTitre','Assistancia-Achever')
@section('enCour')
{{$nbC}}
@endsection
@section('acheve')
{{$acheve}}
@endsection
@section('total')
{{$total}}
@endsection

@section('adminTraite')

<div class="row" id="attentes">
    <div class="col-lg-12">
        <div class="card transparent-card">
            <div class="card-header pb-0">
                <h4 class="card-title mt-2">Les demandes dèja Traitées</h4>

            </div>
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
                            @foreach ($demandeTrait as $demandeTrait)
                            <tr class="">
                                <td scope="row">{{ $loop->index +1}}</td>
                                <td><a href="" class="mr-4 bg-warning  text-center text-uppercase ">{{ $demandeTrait->titre}}</a>
                                </td>
                                <td class="text-muted">{{ $demandeTrait->created_at}}</td>
                                <td><a href="javascript:void()" class="text-primary">{{ $demandeTrait->description}}</a></td>

                                <td>
                                    <a  class="mr-2 bg-primary rounded-circle text-center" >
                                    <button type="submit" class="btn btn-success mb-0">{{ $demandeTrait->status}}</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="row" id="attentes">
    <div class="col-lg-12">
        <div class="card transparent-card">
            <div class="card-header pb-0">
                <h4 class="card-title mt-2">Les demandes dèja Rejetées</h4>

            </div>
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
                            @foreach ($demandeRejet as $demandeRejet)
                            <tr class="">
                                <td scope="row">{{ $loop->index +1}}</td>
                                <td><a href="" class="mr-4 bg-warning  text-center text-uppercase ">{{ $demandeRejet->titre}}</a>
                                </td>
                                <td class="text-muted">{{ $demandeRejet->created_at}}</td>
                                <td><a href="javascript:void()" class="text-primary">{{ $demandeRejet->description}}</a></td>

                                <td>
                                    <a  class="mr-2 bg-primary rounded-circle text-center" >
                                    <button type="submit" class="btn btn-danger mb-0">{{ $demandeRejet->status}}</button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
