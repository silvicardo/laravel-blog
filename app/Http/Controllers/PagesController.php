<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //funzione rotta principale
    //rimanda alla index page
    public function index(){
      return view('pages.index');
    }

    //PAGINA About
    //dot notation per raggiungere
   //la sottocartella pages
    public function about()
    {
      return view('pages.about');
    }

    //SERVICES
    public function services()
    {
      return view('pages.services');
    }

}
