@extends('layout.masterTemplate')
@section('content')
    <div class="container text-center">
        <div class="row content">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8 text-left" style="text-align:center">
                <h1>View Template</h1>
            </div>
            <div class="col-sm-12 form-group">
                <label>Template Name: </label>
                <strong>@foreach($template as $temp){{$temp->tname}}@endforeach</strong><br>
            </div>

            <div class="col-sm-12 form-group">
                <label>Template Content:</label>
                @foreach($template as $temp)
                    <strong>{{$temp->content}}</strong><br>
                @endforeach
            </div>
        </div>
    </div>
@endsection
