<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    //funzione rotta principale
    //rimanda alla index page
    public function index(){
      $title = 'Welcome to Laravel!';

      return view('pages.index')->with('title', $title);
    }

    //PAGINA About
    //dot notation per raggiungere
   //la sottocartella pages
    public function about()
    {

      $title = 'About us';
      return view('pages.about', compact('title'));
    }

    //SERVICES
    public function services()
    {

      $data = array(
        'title' => 'Services',
        'services' => ['Web Design', 'Programming','SEO']
      );

      return view('pages.services')->with($data);
    }

}
