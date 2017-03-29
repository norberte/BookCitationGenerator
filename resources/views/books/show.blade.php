<!DOCTYPE html>
<html>
<head>
	<title>{{$books->title}}</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href = "../resources/views/layouts/navbar.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
 	@foreach($books as $key=>$value)
 		<p><strong>{{$key}}:</strong> {{$value}}</p> <br>
 	@endforeach



</body>
</html>