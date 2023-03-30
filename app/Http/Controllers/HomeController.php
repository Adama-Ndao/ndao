<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use App\Models\Chauffeur;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trajets = Trajet::all();
        $chauffeurs = Chauffeur::all();
        return view('home', ['trajets' => $trajets, 'chauffeurs' => $chauffeurs]);
    }
}
