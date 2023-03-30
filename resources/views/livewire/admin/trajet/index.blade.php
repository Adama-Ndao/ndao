<div>
    
    <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Suppression</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form wire:submit.prevent="destroyTrajet">

            <div class="modal-body">
                <h6>Voulez-vous supprimer ce trajet ?</h6>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Oui. Supprimer</button>
            </div>
        </form>
        </div>
    </div>
    </div>

    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Trajet
                        <a href="{{ url('admin/trajet/create') }}" class="btn btn-primary btn-sm float-end">Ajout des tajets</a>
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>DEPART</th>
                                <th>ARRIVER</th>
                                <th>HEURE</th>
                                <th>PRIX</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($trajets as $trajet)
                                <tr>
                                    <td>{{ $trajet->id }}</td>
                                    <td>{{ $trajet->Depart }}</td>
                                    <td>{{ $trajet->Arriver }}</td>
                                    <td>{{ $trajet->Heure }}</td>
                                    <td>{{ $trajet->Prix }}</td>
                                    <td>
                                        <a href="{{ url('admin/trajet/'.$trajet->id.'/edit') }}" class="btn btn-success">Modifier</a>
                                        <a href="#" wire:click="deleteTrajet({{$trajet->id}})" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $trajets->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')

<script>
    window.addEventListener('close-modal', event => {
        $('#deleteModal').modal('hide');
    });
</script>

@endpush