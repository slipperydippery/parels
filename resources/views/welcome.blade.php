@extends('layouts.master')

@section('content')
    <div id="parelsuitderegio">
	    <div class="row">
	        @include('pages.welcome')
	    </div>
        <div class="row">
            <pearllist :pearlid=0></pearllist>
        </div>
    </div>
@stop