@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h3>Ajout Chauffeur
                    <a href="{{ url('admin/chauffeur/create') }}" class="btn btn-primary btn-sm text-white float-end">Lister</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/chauffeur') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nom</label>
                            <input type="text" name="nom" class="form-control"/>
                            @error('nom') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Prenom</label>
                            <input type="text" name="prenom" class="form-control"/>
                            @error('prenom') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Telephone</label>
                            <input type="text" name="tel" class="form-control"/>
                            @error('tel') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Adresse</label>
                            <input type="text" name="adresse" class="form-control"/>
                            @error('adresse') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                           <button type="submit" class="btn btn-primary float-end">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection