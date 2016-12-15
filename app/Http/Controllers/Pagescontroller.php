<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagescontroller extends Controller
{
  public function factsheet()
  {
      return view ('pages.factsheet');
  }
}
