<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chauffeur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChauffeurFormRequest;

class ChauffeurController extends Controller
{
    public function index()
    {
        return view('admin.chauffeur.index');
    }

    public function create()
    {
        return view('admin.chauffeur.create');
    }

    public function store(ChauffeurFormRequest $resquest)
    {
        $validatedData = $resquest->validated();

        $chauffeur = new Chauffeur;
        $chauffeur->nom =  $validatedData['nom'];
        $chauffeur->prenom =  $validatedData['prenom'];
        $chauffeur->tel =  $validatedData['tel'];
        $chauffeur->adresse =  $validatedData['adresse'];

        $chauffeur->save();

        return redirect('admin/chauffeur')->with('message', 'Chauffeur creer avec success');
    }

    public function edit(Chauffeur $chauffeur)
    {
        return view('admin.chauffeur.edit', compact('chauffeur'));
    }

    public function update(ChauffeurFormRequest $resquest, $chauffeur)
    {
        $chauffeur = Chauffeur::findOrFail($chauffeur);

        $validatedData = $resquest->validated();

        
        $chauffeur->nom =  $validatedData['nom'];
        $chauffeur->prenom =  $validatedData['prenom'];
        $chauffeur->tel =  $validatedData['tel'];
        $chauffeur->adresse =  $validatedData['adresse'];

        $chauffeur->update();

        return redirect('admin/chauffeur')->with('message', 'Chauffeur modifier avec success');
    }
}
