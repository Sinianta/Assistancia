@extends('administrateurs.adminTemplete')

@section('adminTitre','Assistancia-D_en_attentes')

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
                <h4 class="card-title mt-2">Les demandes en attentes</h4>

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
                            @foreach ($demandes as $demande)
                            <tr class="">
                                <td scope="row">{{ $loop->index +1}}</td>
                                <td><a href="" class="mr-4 bg-warning  text-center text-uppercase ">{{ $demande->titre}}</a>
                                </td>
                                <td class="text-muted">{{ $demande->created_at}}</td>
                                <td><a href="javascript:void()" class="text-primary">{{ $demande->description}}</a></td>

                                <td>
                                    <a  class="mr-2 bg-primary rounded-circle text-center" >
                                    <form action="{{ route('demande.update',$demande->id) }}" method="POST" id="modifier"  class="modif">
                                        @method('put')
                                        @csrf
                                        <div class="form-group" style="display: none">

                                            <input type="text" name="titre" value="{{ old('titre') ?? $demande->titre }}" class="form-control" placeholder="Ma demande">
                                        </div>

                                        <div class="form-group" style="display: none">

                                            <textarea class="form-control" name="description" placeholder="description" class="form-control" rows="6">{{ old('description') ?? $demande->description }}</textarea>
                                        </div>

                                         <div class="form-group" style="display: none">
                                            <input class="form-control" name="user_id" value="{{ old('user_id') ?? $demande->user_id }}" >
                                        </div>
                                        <div class="form-group" style="display: none">
                                            <input class="form-control" name="status" value='En cour de traitement' >
                                        </div>

                                        <div class="form-group" style="display: none">
                                            <input class="form-control" name="admin_key" value={{ Auth::user()->id }} >
                                        </div>

                                        <a href="{{ route('demande.edit', $demande->id)}}"><button type="submit" class="btn btn-primary mb-0">{{ $demande->status}}</button>
                                        </a>

                                    </form>
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
