<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
  public function factsheet()
  {
      return view ('pages.factsheet');
  }

  public function welcome()
  {
  		$visited = false;
  		if(Session::get('visited')){
  		    $visited = true;
  		}
  		Session::put('visited', true);

  	    return view('welcome');
  }
}
