@extends('layout.master')
@section('content')

	{{$collection->cname}}
	<br>
	<br>
	@foreach($books as $book)
		{{$book->title}}<br>
		{{$book->authorFirstName}}<br>
		
	@endforeach

@endsection