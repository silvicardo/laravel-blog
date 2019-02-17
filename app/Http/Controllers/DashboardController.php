<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//visto che esiste la relazione con User per l'id
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //il costruttore della classe richiama il
        //middleware per l'autenticazione, così facendo ogni
        //Contenuto non appartenente all'utente corrente
        //sarà bloccato
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //VOGLIAMO MOSTRARE TUTTI I POST DELL'UTENTE LOGGATO

        //Otteniamo l'id dell'utente della
        //sessione corrente
        $user_id = auth()->user()->id;

        //ricerchiamo l'utente con Model::find(id)
        $user = User::find($user_id);

        //restituiamo la dashboard con una var posts
        //corrispondente ai posts dell'utente loggato
        //$user->posts richiama la funzione posts creata
        //nello User Model per gestire la relazione
        return view('dashboard')->with('posts', $user->posts);
    }
}
