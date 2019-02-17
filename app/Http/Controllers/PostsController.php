<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//per accedere al Model Post.php
//usiamo il suo namespace (App) e il nome della classe (Post)
//ATTENZIONE!!!!!!
//quando si inseriscono i dati del db in env.php potrebbe
//essere necessario al fine di effettuare query con Eloquent
//rilanciare php artisan serve
use App\Post;

//il comando
//php artisan make:controller nomeController --resource
//crea automaticamente tutte le funzioni utili a
//Coprire la CRUD completa

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //nomeModel::funzione Eloquent
        //all() reperisce tutti i record
        //$posts = Post::all();

        //ordiniamo per titolo in ordine discendente
        //post più recenti in cima
        // $posts = Post::orderBy('title', 'desc')->get();

        //PAGINAZIONE
        //invece di get richiamiamo paginate(nrElementiPerPagina)

        $posts = Post::orderBy('title', 'desc')->paginate(10);
        //aggiungere nella pagina di destinazione
        // {{ $posts-links() }}   per mostrare i link

        //rimandiamo alla pagina index
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validazione con il metodo validate
        //primo parametro i dati della request
        //secondo parametro: array parametri
        $this->validate($request, [
          'title' => 'required',
          'body' => 'required'
        ]);

        return 'post ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postAtId = Post::find($id);

        return view('posts.show')->with('post',$postAtId);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
