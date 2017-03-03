@extends('layouts/master')

@section('content')
 <h1>Add book to Database</h1>
 <form method="POST" action="http://localhost/Laravel5.4/public/posts">
 {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title of book">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="Author of book">
   <div class="form-group">
   		<button type="submit" class="btn btn-primary">Add Book</button>
   </div>

	
  </div>



</form>


 @endsection