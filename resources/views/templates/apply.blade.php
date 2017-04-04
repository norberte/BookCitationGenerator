@extends('layout.master')

@section('title','Apply Template')

@section('content') 
   <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
          <link rel="shortcut icon" href="../favicon.ico"> 
 	
 		
 		<style>

    	.box{
    	display: none;
    	width: 100%;
		}

		a:hover + .box,.box:hover{
   		 display: block;
    	position: relative;
    	z-index: 100;
	   }
    	 
		
	
    	</style>
 	
    	
  
   
     
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
    
  
                 <h1><strong>Apply <a href="{{url('/templatepreview/'.$content->tname)}}">{{$content->tname}}</a><div class="box"><iframe src="{{url('/templatepreview/'.$content->tname)}}" width = "500px" height = "50px"></iframe></div> to the following collections</strong><h1>
                        
             
                   
                    <form method = "POST" action="{{url('/applytemplate/preview/'.$content->tname)}}">
                    {{ csrf_field() }}
                       @foreach($collections as $collection)
                    
							
                            <input type="checkbox" name="bookcol[]" value={{$collection->id}}> <a href="{{url('/bookcollections/'.$collection->id)}}">{{$collection->cname}}</a><div class="box"><iframe src="{{url('/bookcollections/'.$collection->id)}}" width = "500px" height = "500px"></iframe></div><br>



                       
                        @endforeach
                         
                    <input type="hidden" name="tname" value={{$content->tname}}>
                    <input type="submit" value="Preview">
						</form>

  
                       
            
        
       
 
@endsection
