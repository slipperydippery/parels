@extends('layouts.master')

@section('content')
<div id="pearls" >
   <div class="pearls singlepearl clearfix">
        <div class="col-md-4">
            <div class="flex-video widescreen"> <!-- iframe width="283" height="159" -->
                <iframe width="350" height="197" 
                    src="https://www.youtube.com/embed/{{ $pearl->videos->first()->adress }}?rel=0&amp;showinfo=0" 
                    frameborder="0" allowfullscreen
                >
                </iframe>
            </div>
            <div class="icons">
                    <a href="{{ URL::to('/') }}" title="Terug naar alle parels">
                    <div class="icon">
                        <svg class="icon--back icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 26.676 26.676" xml:space="preserve">
                            <g class="icon--back icon">
                                <path  d="M26.105,21.891c-0.229,0-0.439-0.131-0.529-0.346l0,0c-0.066-0.156-1.716-3.857-7.885-4.59   c-1.285-0.156-2.824-0.236-4.693-0.25v4.613c0,0.213-0.115,0.406-0.304,0.508c-0.188,0.098-0.413,0.084-0.588-0.033L0.254,13.815   C0.094,13.708,0,13.528,0,13.339c0-0.191,0.094-0.365,0.254-0.477l11.857-7.979c0.175-0.121,0.398-0.129,0.588-0.029   c0.19,0.102,0.303,0.295,0.303,0.502v4.293c2.578,0.336,13.674,2.33,13.674,11.674c0,0.271-0.191,0.508-0.459,0.562   C26.18,21.891,26.141,21.891,26.105,21.891z"></path>
                            </g>
                        </svg>
                    </div>
                </a>
            </div>
            <div class="icons icons--social">
                <a href="#">
                    <div class="icon icon--social linkedin"></div>
                </a>
                <a href="#">
                    <div class="icon icon--social twitter"></div>
                </a>
                <a href="#">
                </a>
                <a href="#">
                    <div class="icon icon--social facebook"></div>
                </a>
                <a href="#">
                    <div class="icon icon--social email"></div>
                </a>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row contentelement pearlinfo">
                <h2>{{ $pearl->title }}  </h2> 

                <div>
                    <span>{!! $pearl->description !!}</span>
                    <br>
                    Neem contact op met <a href="#">de betrokkenen</a>
                    <br>
                    <a href="http://voion.nl/aanmelden">Houd me op de hoogte</a>
                    <br>
                    <a href="http://voion.nl/contact">Geef reactie</a>

                </div>
            </div>           
             <div class="row ">
                <div class="col-md-4">
                    <a href="/pdf/casebeschrijving-v4.pdf" class="btn">Parelbeschrijving</a>
                </div>
                <div class="col-md-4">
                    <a href="/pdf/factsheet-v3.pdf" class="btn">Factsheet</a>
                </div>
                <div class="col-md-4">
                    <a href="/pdf/infographic-v5.pdf" class="btn">Handleiding</a>
                </div>

            </div>
        </div>    


            
    </div>
        <pearllistfilter></pearllistfilter>
        <pearllist pearlid="{{ $pearl->id }}"></pearllist>

</div>

@stop