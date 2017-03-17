@extends('layout.master')

@section('title','Book Collections')

@section('content') 
    @foreach($collections as $collection)
          {{$collection->cname}}<br>
    @endforeach
@endsection