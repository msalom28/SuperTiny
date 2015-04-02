@extends('layout')

@section('content')
    <div class=starter-template>
    <p>
    {{ $errors->first('url', '<p class="text-danger">:message</p>') }}
	{{ Form::open(['url' => 'Links', null, 'class' => 'form-inline']) }}
	<div class=form-group>
	{{ Form::label('url', 'url', ['class' => 'sr-only']) }}
	{{ Form::text('url', null, ['class' => 'form-control', 'placeholder' => 'http://supertiny.com']) }}
	
	</div>
	{{ Form::submit('TinyIt!', ['class' => 'btn btn-default']) }}
	{{ Form::close() }}
    </p> 
	<p>
		@if(Session::has('hashed'))
		<output>{{ link_to(Session::get('hashed')) }}</output>


		@endif
	</p>
    </div><!-- End stater template --> 
<div class=footer> <p><span class="glyphicon glyphicon-heart"></span> SuperTiny.com</p> </div> <!-- End Footer -->

@stop