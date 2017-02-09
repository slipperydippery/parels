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
        </div>
        <div class="col-md-8">
            <div class="contentelement pearlinfo">
                <h2>{{ $pearl->title }} </h2> 

                <div>
                    <span>{{ $pearl->description }}</span>
                    <br>
                    Neem contact op met <a href="#">de betrokkenen</a>

                </div>
            </div>
        </div>    

        <div class="col-md-12">
            <div class="row linkrow">
                <div class="col-md-2">
                    <a href="/pdf/casebeschrijving-v4.pdf" class="btn">Parelbeschrijving</a>
                </div>
                <div class="col-md-2">
                    <a href="/pdf/factsheet-v3.pdf" class="btn">Factsheet</a>
                </div>
                <div class="col-md-2">
                    <a href="/pdf/infographic-v5.pdf" class="btn">Handleiding</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn">Share</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn">Geef reactie</a>
                </div>
                <div class="col-md-2">
                    <a href="#" class="btn">Houd me op de hoogte</a>
                </div>
            </div>
            
        </div> 
    </div>
        <pearllistfilter></pearllistfilter>
        <pearllist pearlid="{{ $pearl->id }}"></pearllist>

</div>

@stop