@extends('layouts.master')

@section('content')
    <h1>Edit this pearl</h1>

    {!! Form::model($pearl, ['method' => 'PATCH', 'route' => ['pearls.update', $pearl->id]]) !!}
    	@include('pearls.partials.form', ['submittext' => 'Sla wijzigingen op'])
    {!! Form::close() !!}
@stop