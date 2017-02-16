@extends('layouts.master')

@section('content')

    <div id="parelsuitderegio">
        <div class="pearls">
            <div class="row entree" >
                <div class="col-md-4">
                    <h1 class="programmalijn">Parels uit de regio</h1>   
                        <div clas="introtext">
                            <p>Voion presenteert 24 parels uit de regio. Prachtige succesverhalen van scholen in het Voortgezet Onderwijs die u inspireren en helpen bij: - opleiding & professionalisering, arbeidsmarkt en mobiliteit en veilig en gezond werken. Wij presenteren de parels dit jaar een voor een. In welke parel bent u geïnteresseerd?</p>
                            <a href="#">Bekijk hier het Groeidocument / E-jaarboek</a>
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