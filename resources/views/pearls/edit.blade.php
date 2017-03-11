@extends('layouts.master')

@section('content')
    <h1>Maak wijzigingen aan deze parel</h1>

    {!! Form::model($pearl, ['method' => 'PATCH', 'route' => ['pearls.update', $pearl->id]]) !!}
    	@include('pearls.partials.form', ['submittext' => 'Sla wijzigingen op'])
    {!! Form::close() !!}

	<div class="row">
		<div class="col-md-6 col-xs-12">
			    <h2>Video</h2>
				<video 
				    preload="auto" 
				    id="singlepearl-video"
				    class="video-js vjs-big-play-centered vjs-16-9 vjs-nofull" 
				    poster="/video/poster/parel{{ $pearl->id }}.png"
				    data-setup="{}" controls
				>
				    <source src="{{ URL::to('/') }}/{{ $pearl->video->adress }}" type="video/mp4" >,
				    <p class="vjs-no-js">
				        To view this video please enable JavaScript, and consider upgrading to a web browser that
				        <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
				    </p>
				</video>
				<h4>Upload een nieuw video</h4>
			    <form method="post" action="/videos" enctype="multipart/form-data">
			    	{{ csrf_field() }}

					<!-- Hidden pearl Type Form Input -->
					{!! Form::hidden('pearl', $pearl->id, null) !!}

			    	<input type="file" name="video">
			    	<button type="submit">Sla video op</button>
			    </form>
				
				<h2>Poster</h2>
				<img src="{{ URL::to('/') }}/{{ $pearl->video->poster }}" alt="">
				<h4>Upload een nieuw poster</h4>
				<form method="post" action="/videos/poster" enctype="multipart/form-data">
			    	{{ csrf_field() }}

					<!-- Hidden pearl Type Form Input -->
					{!! Form::hidden('pearl', $pearl->id, null) !!}

			    	<input type="file" name="poster">
			    	<button type="submit">Sla poster op</button>
			    </form>
			
		</div>
	</div>
    
@stop