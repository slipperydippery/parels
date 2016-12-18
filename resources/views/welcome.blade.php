@extends('layouts.master')

@section('content')
	<div class="row">
	    <div class="col-md-4" >
    	    <h1 class="programmalijn">Parels in de regio</h1>   
	    </div>

	    <div class="col-md-8">
    	    <div class="flex-video widescreen inblockvideo">
    	        <iframe width="700" height="394"
    	            src="/img/parelcorp.png" 
    	            frameborder="0" allowfullscreen
    	        >
    	        </iframe>
    	    </div>
	    	<div class="contentelement">  
	    	    <div clas="introtext">
	    	    	<p>Voion presenteert 24 parels uit de regio. Prachtige succesverhalen van scholen in het Voortgezet Onderwijs die u inspireren en helpen bij: - opleiding & professionalisering, arbeidsmarkt en mobiliteit en veilig en gezond werken. Wij presenteren de parels dit jaar een voor een. In welke parel bent u geïnteresseerd?</p>
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