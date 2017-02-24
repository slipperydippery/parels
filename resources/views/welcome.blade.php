@extends('layouts.master')

@section('content')
    <div id="parelsuitderegio">
        @include('pages.welcome')
        <div class="row">
            <pearllist :pearlid=0></pearllist>
        </div>
    </div>
@stop