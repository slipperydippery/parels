@extends('layouts.master')

@section('content')
    <h1>here a pearl list</h1>
    @foreach ($pearls as $pearl) 
    	<a href="{{ URL::route('pearls.edit', $pearl->id) }}">
			{{ $pearl->title }} <br>
		</a>
    @endforeach
@stop