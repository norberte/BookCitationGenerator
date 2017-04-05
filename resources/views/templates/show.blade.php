@extends('layout.master')
<link rel="stylesheet" type="text/css" href="/css/showbook.css" />

@section('content')
    <body>
<br><br>
    <div class="container text-center table-fill">
        <div class="row content">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8 text-left" style="text-align:center">
                <h1 style="font-family: Roboto;">View Template</h1>
                <hr>
            </div>

            <div class="col-sm-12 form-group table-fill">
                <label style="font-family: Roboto; font-size: 1.5em; text-decoration: underline;">Template Name: </label>
                <strong  style="font-family: Roboto;  font-size: 1.5em;">@foreach($template as $temp){{$temp->tname}}@endforeach</strong><br>
                <div class="col-sm-12 form-group">
                    <label style="font-family: Roboto; font-size: 1.5em; text-decoration: underline;">Template Content:</label>
                    @foreach($template as $temp)
                        <strong  style="font-family: Roboto; font-size: 1.5em;">{{$temp->content}}</strong><br>
                    @endforeach
                </div>
            </div>


        </div>
    </div>
    </body>


@endsection
