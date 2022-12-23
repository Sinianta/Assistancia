@extends('administrateurs.adminTemplete')

@section('adminTitre','Assistancia-D_en_cours')
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
                <h4 class="card-title mt-2">Les demandes en cour de traitement</h4>

            </div>
            <div class="card-body p-0">

                            @foreach ($demandes as $demande)
                            <div class="border border-danger p-2 mb-2" >
                                <div class="col-md-12 col-sm-6 text-md-left text-center" id="dropdown">
                                <div class="solutions-section-plan-box hover-effect">
                                    <div class="row">
                                        <div class="col-lg-9 col-12">
                                            <h4>{{ $demande->titre}}</h4>
                                        </div>
                                        <div class="col-lg-3 col-12">
                                            <figure>
                                                <a >
                                                    <button class="btn btn-success mb-0" name="enCour" id="dropbtn">{{ $demande->status}}</button>

                                                </a>
                                                {{-- <img src="images/solution-section-plan-box-img-3.png" alt=""> --}}
                                            </figure>
                                        </div>

                                        <p class="text-size-16 mb-0">{{ $demande->description}}</p>
                                    </div>
                                <div class="dropdown-content">
                                <form  class="mt-5 mb-5" action="{{ route('status.update',$demande->id) }}" method="POST">
                                @method('PATCH')
                                @csrf

                                <div class="form-group" style="display: none">

                                    <input type="text" name="titre" value="{{ old('titre') ?? $demande->titre }}" class="form-control" placeholder="Ma demande">
                                </div>

                                <div class="form-group" style="display: none">

                                    <textarea class="form-control" name="description" placeholder="description" class="form-control" rows="6">{{ old('description') ?? $demande->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-label">Reponse</label>
                                    <textarea class="form-control" name="reponse" placeholder="description" class="form-control" rows="6" required></textarea>
                                </div>
                                <div class="form-group" style="display: none">

                                    <input class="form-control" name="user_id" value="{{ old('user_id') ?? $demande->user_id }}" >
                                </div>

                                <div class="form-group">
                                    <label for="inputNoncorehub">Decision de l'administrateur: <small>(Traitée ou Rejetée)</small></label>
                                    <select id="inputNoncorehub" class="form-control select-option" name="status">
                                        <option selected value="Traitée">Traitée</option>
                                        <option value="Rejetée">Rejetée</option>
                                    </select>
                                </div>

                                <div class="form-group" style="display: none">
                                    <input class="form-control" name="admin_key" value="{{ old('admin_key') ?? $demande->admin_key }}" >
                                </div>

                                <div class="text-center mb-4 mt-4">
                                    <a href="{{ route('status.edit',$demande->id) }}">
                                        <button class="btn btn-success mb-0" type="submit" >Valider</button>

                                    </a>
                                </div>
                            </form>
                            </div>
                                </div>
                            </div>

                            </div>

                            @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
