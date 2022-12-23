@extends('clients.client')

@section('titre','Assistanica-demander')

@section('demandes')
             <div class="row">
                    <div class="col-xl-12">
                        <div class="card forms-card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Faite votre demande</h4>
                                <div class="basic-form">
                                    <form action="{{ route('demande.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="text-label">Titre*</label>
                                            <input type="text" name="titre" class="form-control" placeholder="Ma demande">
                                        </div>
                                        {{-- <div class="form-group">
                                            <label class="text-label">Date*</label>
                                            <input type="date" name="date" class="form-control">
                                        </div> --}}
                                        <div class="form-group">
                                            <label class="text-label">Description*</label>
                                            <textarea class="form-control" name="description" placeholder="description" class="form-control" rows="6"></textarea>
                                        </div>

                                         <div class="form-group" style="display: none">
                                            <input class="form-control" name="user_id" value={{Auth::user()->id}} >
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-form mr-2">Valider</button>
                                        <button type="reset" class="btn btn-light text-dark btn-form">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
@endsection
