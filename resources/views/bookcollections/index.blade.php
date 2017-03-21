@extends('layout.master')

@section('title','Book Collections')

@section('content') 
   <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="http://localhost/bookcat/public/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="http://localhost/bookcat/public/css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
    <noscript>
      <style>
        .st-accordion ul li{
          height:auto;
        }
        .st-accordion ul li > a span{
          visibility:hidden;
        }
      </style>
    </noscript>

            <?php
                echo $_POST['templatename'];
            ?>
            <br>
            <div class="wrapper">
                <div id="st-accordion" class="st-accordion">
                    <ul>
                        @foreach($collections as $collection)
                        <li>  
                             
                             <a href={{'http://localhost/bookcat/public/bookcollections/'.$collection->id}}>{{$collection->cname}}</a> 
                            <div class="st-content">
                              
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        
       
 
@endsection