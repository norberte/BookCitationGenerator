@extends('layout.master')

@section('title','Book Collections')

@section('content') 
   <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
    <noscript>
      <style>
      p{
        margin-bottom:6em;
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
                   
                        @foreach($collections as $collection)
                        
                         <h3>{{$collection->cname}}</h3>
                         
                             <a href={{'http://localhost/bookcat/public/bookcollections/'.$collection->id}} class="btn btn-info ">View Collection</a> 
                             <form class ="form-group pull-right" action="{{'bookcollections/'.$collection->id}}" method ="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                      
                        

                            
                        
                         <hr>
                        @endforeach
                    
            
        
       
 
@endsection