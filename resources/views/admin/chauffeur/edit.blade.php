@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h3>Modification du Chauffeur
                    <a href="{{ url('admin/chauffeur') }}" class="btn btn-primary btn-sm text-white float-end">Lister</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/chauffeur/'.$chauffeur->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Nom</label>
                            <input type="text" name="nom" value="{{$chauffeur->nom}}" class="form-control"/>
                            @error('nom') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Prenom</label>
                            <input type="text" name="prenom" value="{{$chauffeur->prenom}}" class="form-control"/>
                            @error('prenom') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Telephone</label>
                            <input type="text" name="tel" value="{{$chauffeur->tel}}" class="form-control"/>
                            @error('tel') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Adresse</label>
                            <input type="text" name="adresse" value="{{$chauffeur->adresse}}" class="form-control"/>
                            @error('adresse') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                           <button type="submit" class="btn btn-primary float-end">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection