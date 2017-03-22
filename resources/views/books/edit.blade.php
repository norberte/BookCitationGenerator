<!DOCTYPE html>
<html lang="en">

<head>
 <title>Edit Book</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href = "../resources/views/layouts/navbar.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
 <style>
 th{
 text-align: center;
 }
 </style>
</head>
<body style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/home')}}">BooKStrap</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Book <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('/books/create')}}">Add Book</a></li>
            <li><a href="{{url('/books/edit')}}">Edit Book</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Template <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Template</a></li>
            <li><a href="#">Edit Template</a></li>

          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Collection <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add to collecton</a></a></li>
            <li><a href="#">Edit Book</a></li>
            <li><a href="#">Export</a></li>
            <li><a href="{{url('/changePassword')}}">Change Password</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>
            Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
      </ul>



    </div>
  </div>
</nav>

  <div class="container text-center">
   <div class="row content">
    <div class="col-sm-2">
    </div>

     <div class="col-sm-8 text-left" style="text-align:center">
       <h1>Edit {{$book->title}}</h1><p>&nbsp;</p>


       <div class="col-sm-8 text-left" style="text-align:left">
         <h3>BASIC FIELDS</h3><p>&nbsp;</p>
       </div>



    <form method="POST" action="http://localhost/bookcat/public/books">
      {{ csrf_field() }}
      @foreach($book as $key =>$value)

      <div class="col-sm-12">
        <div class="row">
          <div class="form-group">
            <label>{{$key}}</label>
            <input type="text" name="title"  class="form-control" value= "{{$value}}" >
          </div>
          <hr>
     
      @endforeach
  </div>


<hr>




<input class="btn btn-lg btn-primary btn-block" type="submit" value="Save">

</form>
</body>
</html>
