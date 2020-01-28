@extends('19.base')
@section('title')
<title>Events | Currents '20</title>
@endsection
@section('scripts')
@parent
<link rel="stylesheet" type="text/css" media="screen" href="css/workshops.css" />
@endsection
@section('content')
<section class="main_page_str">
	<div class="title">Events</div>
	<div class="content">
		<a href="{{ env('APP_BASE_URL') }}/events/capture_currents"><img class="img-link" src="{{asset('https://currents.nitt.edu/images/workshop_game_20.png')}}"></a>
		<!-- <a href="{{ env('APP_BASE_URL') }}/events/code_currents"><img class="img-link" src="{{asset('https://currents.nitt.edu/images/workshop_game_20.png')}}"></a>
		<a href="{{ env('APP_BASE_URL') }}/events/colloquium"><img class="img-link" src="{{asset('https://currents.nitt.edu/images/workshop_game_20.png')}}"></a>
		<br>
		<a href="{{ env('APP_BASE_URL') }}/events/dhruva"><img class="img-link" src="{{asset('https://currents.nitt.edu/images/workshop_game_20.png')}}"></a>
		<a href="{{ env('APP_BASE_URL') }}/events/simularcrum"><img class="img-link" src="{{asset('https://currents.nitt.edu/images/workshop_game_20.png')}}"></a>
		<a href="{{ env('APP_BASE_URL') }}/events/line_follower"><img class="img-link" src="{{asset('https://currents.nitt.edu/images/workshop_game_20.png')}}"></a> -->
	</div>
</section>
@endsection
