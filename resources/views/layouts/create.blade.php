@extends('layouts/master')

@section('content')
 <h1>Add book to Database</h1>
 <form method="POST" action="http://localhost/Laravel5.4/public/books">
 {{ csrf_field() }}
 @foreach($attributes as $attribute)
    <div class="form-group">
    <label for={{$attribute}}>{{$attribute}}</label>
    <input type="text" class="form-control" id={{$attribute}} name={{$attribute}}>
  </div>
 @endforeach
   		<button type="submit" class="btn btn-primary">Add Book</button>
   </div>

	
  </div>



</form>


 @endsection