<!-- Titel Form Input -->
<div class="form-group">
	{!! Form::label('title', 'Titel:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Beschrijving Form Input -->
<div class="form-group">
	{!! Form::label('description', 'Beschrijving:') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>



<!-- Add Submit Field -->
<div class="form-group">
    {!! Form::submit($submittext, ['class' => 'btn form-control']) !!}
</div>