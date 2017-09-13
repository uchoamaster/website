@extends('layouts.app')

@section('content')
 <nav class="navbar navbar-light bg-light justify-content-between fixed-top">
  <a class="navbar-brand"><img src="{{ asset('img/logo.png') }}" alt=""></a>
  <form class="form-inline col-md-6">
    <div class="col-md-8">
    	<input type="text" class="form-control controls" id="find-location" placeholder="Find Developer, by name, by location">
  </div>
    <div class="col-md-4">
    	<a class="btn btn-register" href="register/github">
    	<svg aria-hidden="true" class="octicon octicon-mark-github" height="23" version="1.1" viewBox="0 0 16 16" width="23">
			<path fill="#fff" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
			</path>
		</svg>
	 	<span>Register with Github</span>
    </a>
    </div>
  </form>
</nav>
<div id="map"> </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"> <a class="nav-link" href="#">Philosophy</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Events</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
      </ul>
    </div>
  </nav>
@endsection
@push('scripts')
<script src="{{ asset('js/script.js') }}"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"> </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDgIdV7w8h18k8E0TtZwjIlYjFi8cCBX2Y&am&callback=initMap"> </script>
@endpush
