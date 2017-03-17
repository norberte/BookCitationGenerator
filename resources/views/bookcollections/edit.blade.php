@extends('layout.master')
@section('content')
	{{$bookcollection->cname}}
	<br>
	<br>
	@foreach($books as $book)
		{{$book->title}}<br>
		{{$book->authorLastName}}<br>
		
	@endforeach

@endsection