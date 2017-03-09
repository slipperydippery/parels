@extends('layouts.master')

@section('content')
    <h1>Maak wijzigingen aan deze parel</h1>

    {!! Form::model($pearl, ['method' => 'PATCH', 'route' => ['pearls.update', $pearl->id]]) !!}
    	@include('pearls.partials.form', ['submittext' => 'Sla wijzigingen op'])
    {!! Form::close() !!}

@foreach($pearl->videos as $video)
	{{ $video->adress }} 
	    <h2>Upload een video voor deze parel</h2>
	    <form method="post" action="/videos" enctype="multipart/form-data">
	    	{{ csrf_field() }}

			<!-- voor Parel Form Input -->
			<!-- Hidden pearl Type Form Input -->
			{!! Form::hidden('pearl', $pearl->id, null) !!}
			
			    

	    	<input type="file" name="video">
	    	<button type="submit">Sla video op</button>
	    </form>
@endforeach

@stop