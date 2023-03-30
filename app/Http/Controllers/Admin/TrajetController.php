<?php

namespace App\Http\Controllers\Admin;

use App\Models\Trajet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\TrajetFormRequest;

class TrajetController extends Controller
{
    public function index()
    {
        return view('admin.trajet.index');
    }

    public function create()
    {
        return view('admin.trajet.create');
    }

    public function store(TrajetFormRequest $resquest)
    {
        $validatedData = $resquest->validated();

        $trajet = new Trajet;
        $trajet->Depart =  $validatedData['Depart'];
        $trajet->Arriver =  $validatedData['Arriver'];
        $trajet->Heure =  $validatedData['Heure'];
        $trajet->Prix =  $validatedData['Prix'];

        $trajet->save();

        return redirect('admin/trajet')->with('message', 'Trajet creer avec success');
    }

    public function edit(Trajet $trajet)
    {
        return view('admin.trajet.edit', compact('trajet'));
    }

    public function update(TrajetFormRequest $resquest, $trajet)
    {
        $trajet = Trajet::findOrFail($trajet);

        $validatedData = $resquest->validated();

        
        $trajet->Depart =  $validatedData['Depart'];
        $trajet->Arriver =  $validatedData['Arriver'];
        $trajet->Heure =  $validatedData['Heure'];
        $trajet->Prix =  $validatedData['Prix'];

        $trajet->update();

        return redirect('admin/trajet')->with('message', 'Trajet modifier avec success');
    }

    public function reserver(Request $request) {
        $depart = $request->input('depart');
        $arriver = $request->input('arriver');
        $heure = $request->input('heure');
        $prix = $request->input('prix');
    
        // Faites quelque chose avec les données récupérées, par exemple les afficher sur la page
        return view('reserver', compact('depart', 'arriver', 'heure', 'prix'));
    }
}
