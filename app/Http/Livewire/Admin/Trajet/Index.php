<?php

namespace App\Http\Livewire\Admin\Trajet;

use App\Models\Trajet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $trajet_id;

    public function deleteTrajet($trajet_id)
    {
        $this->trajet_id = $trajet_id;
    }

    public function destroyTrajet()
    {
        Trajet::find($this->$trajet_id);

        session()->flash('message', 'Trajet supprimer');
        $this->dispatchBrowserEvent('close-modal');
    }

    public function render()
    {
        $trajets = Trajet::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.trajet.index', ['trajets' => $trajets]);
    }
}
