@extends('layouts.master')

@section('content')

    <div id="parelsuitderegio">
        <div class="pearls">
            <div class="row entree" >
                <div class="col-md-4">
                    <h1 class="programmalijn">Parels uit de regio</h1>   
                        <div class="introtext">
                            <p>Voion presenteert 24 parels uit de regio. Prachtige verhalen van scholen in het voortgezet onderwijs die u inspireren en helpen bij:
<ul>
    <li>opleiding & professionalisering</li>
    <li>arbeidsmarkt en mobiliteit</li>
    <li>veilig en gezond werken</li>
</ul>
    Wij presenteren de parels dit jaar een voor een. Klik op de animatiefilm voor een overzicht van de parels of op een parel hieronder.</p>
                        </div>
                </div>

                <div class="col-md-8 overview--video">
                    <div class="flex-video widescreen inblockvideo">
                        <iframe width="700" height="394"
                            src="/img/parelcorp.png" 
                            frameborder="0" allowfullscreen
                        >
                        </iframe>
                    </div>
				        <pearllistfilter></pearllistfilter>
                </div>
            </div>
        </div>
        <div class="row">
            <pearllist :pearlid=0></pearllist>
        </div>
    </div>

@stop