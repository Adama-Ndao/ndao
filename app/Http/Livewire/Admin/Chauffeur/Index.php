<?php

namespace App\Http\Livewire\Admin\Chauffeur;

use Livewire\Component;
use App\Models\Chauffeur;

class Index extends Component
{
    public function render()
    {
        $chauffeurs = Chauffeur::orderBy('id','DESC')->paginate(10);
        return view('livewire.admin.chauffeur.index', ['chauffeurs' => $chauffeurs]);
    }
}
