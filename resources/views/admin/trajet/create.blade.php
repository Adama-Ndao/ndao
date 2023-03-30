@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-header">
                <h3>Ajout Trajet
                    <a href="{{ url('admin/trajet/create') }}" class="btn btn-primary btn-sm text-white float-end">Lister</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/trajet') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Depart</label>
                            <input type="text" name="Depart" class="form-control"/>
                            @error('Depart') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Arriver</label>
                            <input type="text" name="Arriver" class="form-control"/>
                            @error('Arriver') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Heure</label>
                            <input type="text" name="Heure" class="form-control"/>
                            @error('Heure') <small class="text-danger">{{$message}}</small>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Prix</label>
                            <input type="number" name="Prix" class="form-control"/>
                            @error('Prix') <small class="text-danger">{{$message}}</small>@enderror
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