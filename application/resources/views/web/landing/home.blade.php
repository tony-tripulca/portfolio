@extends('layouts.web.app')
@extends('layouts.web.header')
@extends('layouts.web.footer')

@section('plugin-styles')

@endsection

@section('module-styles')
	@if(config('app.env') == "production")
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web/home.min.css') }}">
    @else
		<link rel="stylesheet" type="text/css" href="{{ asset('css/web/home.css') }}">
    @endif
@endsection

@section('plugin-scripts')

@endsection

@section('module-scripts')
	@if(config('app.env') == "production")
		<script type="text/javascript" src="{{ asset('js/web/home.min.js') }}"></script>
    @else
		<script type="text/javascript" src="{{ asset('js/web/home.js') }}"></script>
    @endif
@endsection

@section('content')
Testing
@endsection

@section('modal')

@endsection