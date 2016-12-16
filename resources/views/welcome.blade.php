@extends('layouts.master')

@section('content')
	<div class="row">
	    <div class="col-md-4" >
    	    <h1 class="programmalijn">Parels van Voion</h1>   
	    </div>

	    <div class="col-md-8">
    	    <div class="flex-video widescreen inblockvideo">
    	        <iframe width="700" height="394"
    	            src="https://www.youtube.com/embed/XXdfvsQHcTU?rel=0&showinfo=0" 
    	            frameborder="0" allowfullscreen
    	        >
    	        </iframe>
    	    </div>
	    	<div class="contentelement">  
	    	    <div clas="introtext">
	    	    	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
	    	    	<a href="#">Bekijk hier het Groeidocument / E-jaarboek</a>
	    	    </div>
		    </div>
	    </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="pearls">
            <pearls></pearls>
        </div>
    </div>
@stop