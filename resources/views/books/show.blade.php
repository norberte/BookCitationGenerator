@extends('layout.masterTemplate')
@section('content')

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/showbook.css" />

</head>
<title>{{$books->title}}</title>
<body style="background-color: rgb(255, 249, 229)">
<table  class="table-fill">
    <thead>
    <tr>
        <th class="text-left">
            Tags
        </th>
        <th class="text-left">
            Values
        </th>
    </tr>
    </thead>
    @foreach($books as $key=>$value)
        <tr>
            <td class="text-left">
                <strong>{{$key}}:</strong>
            </td>
            <td class="text-left">
                {{$value}}
            </td>

        </tr>
    @endforeach
</table>
</body>

</html>
@endsection
