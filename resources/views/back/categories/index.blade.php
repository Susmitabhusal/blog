@extends('back.master')

@section('content')

<div class="row">
	<div class="col-md-12">
		I am content of category

		@foreach($categories as $cat)

		{{ $cat->name }}

		{{ $cat->description }}

		<hr>

		@endforeach
	</div>
</div>



@endsection