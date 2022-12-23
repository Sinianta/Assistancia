@extends('administrateurs.adminTemplete')

@section('adminTitre','Demande-Traitées')


@section('adminTraite')
<div class="row" id="attentes">
    <div class="col-lg-12">
        <div class="card transparent-card">
            <div class="card-header pb-0">
                <h4 class="card-title mt-2">Les demandes dèja traitées</h4>

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
                            @foreach ($demandeTraite as $demandeTraite)
                            <tr class="">
                                <td scope="row">{{ $loop->index +1}}</td>
                                <td><a href="" class="mr-4 bg-warning  text-center text-uppercase ">{{ $demandeTraite->titre}}</a>
                                </td>
                                <td class="text-muted">{{ $demandeTraite->created_at}}</td>
                                <td><a href="javascript:void()" class="text-primary">{{ $demandeTraite->description}}</a></td>

                                <td>
                                    <a  class="mr-2 bg-primary  text-center" href="{{ route('status.store',compact('demandeTraite'))}}" >
                                        <button class="btn btn-primary mb-0">{{ $demandeTraite->status}}</button>

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
