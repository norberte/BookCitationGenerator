@extends('layout.master')

@section('title','Book Collections')

@section('content') 
   <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
          <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/bookcat/public/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/bookcat/public/css/style.css" />
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
    <script>
          window.setTimeout(function() {
  $(".flash").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
    });
      }, 5000);

    </script>

          
            
                @if (Session::has('message'))
              <div class = "alert alert-success flash">{{ Session::get('message')}}</div>
                  @endif
    
  
                   
                        
                <div class="wrapper">
                 <div id="st-accordion" class="st-accordion">
                    <ul>
                       @foreach($collections as $collection)
                        <li>
                            <a href="#">{{$collection->cname}}<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">
                       

                         
                             <a href={{'http://localhost/bookcat/public/bookcollections/'.$collection->id}} class="btn btn-info ">View Collection</a> 
                             <form class ="form-group pull-right" action="{{'bookcollections/'.$collection->id}}" method ="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                      
                          </div>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                    </div>

    <script type="text/javascript" src="/bookcat/public/js/jquery.accordion.js"></script>
    <script type="text/javascript" src="/bookcat/public/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
      
        $('#st-accordion').accordion({
          oneOpenedItem : true
        });
        
            });
        </script>
                       
            
        
       
 
@endsection