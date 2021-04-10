@extends('/layout/main')

@section('title', 'Laravel Apps')

@section('page_title', 'home')

@section('container')
@php
	$user = Auth::user();
@endphp
	<div class="container">
	<div class="row">
		<div class="col-10">
			<h1 class="mt-2">Hello, WORLD</h1>			
		</div>
	</div>
</div>
@endsection

