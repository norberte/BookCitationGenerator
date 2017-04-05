@extends('layout.master')

@section('title','Apply Template')

@section('content')
    <?php
    use App\bookcollection;
    ?>
   <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
          <link rel="shortcut icon" href="../favicon.ico">
         <link rel="stylesheet" type="text/css" href="http://localhost/bookcat/resources/views/books/showbook.css" />
     <link rel="stylesheet" type="text/css" href="http://localhost/bookcat/resources/views/templates/popup.css" />
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
    
  
                 <h1 style="text-align: center;"><strong>Apply <a href={{url('/templatepreview/'.$content->tname)}}>{{$content->tname}}</a> to the following book collections:</strong><h1>

                        
             
                   
                    <form method = "POST" action="{{url('/applytemplate/preview/'.$content->tname)}}">
                    {{ csrf_field() }}

                           <table class="table-fill">
                           <thead>
                           <tr>
                               <th class="text-left">
                                   Select
                               </th>
                               <th class="text-left">
                                   Book Collection
                               </th>
                               <th class="text-left">
                                   Preview
                               </th>
                           </tr>

                           </thead>
                               @foreach($collections as $collection)
                                   <tr>
                                       <td class="text-left">
                                           <input type="checkbox" name="bookcol[]" value={{$collection->id}}>
                                       </td>
                                       <td class="text-left">
                                           <a href={{url('/bookcollections/'.$collection->id)}}>{{$collection->cname}}</a>
                                       </td>
                                       <td class="text-left">
                                           <div id="popup"> <a href="{{url('/bookcollections/'.$collection->id)}}">View Collection<span><?php      $collectionId = $collection->id;

                                                       //gets all the books from the collection ID
                                                       $bookId = bookcollection::find($collectionId)->books;

                                                       //prints out all the books from the collection ID
                                                       foreach ($bookId as $value){
                                                           echo "<p style='color:blue;'>Title: $value->title</p>";
                                                           echo "<p>&emsp;Author Last Name: $value->authorLastName</p>";

                                                           echo "<br>";
                                                       }?></span></a></div>
                                       </td>
                                   </tr>
                               @endforeach
                           </table>
							

                         <input type="hidden" name="tname" value={{$content->tname}}>
                         <input type="submit" value="Submit" style='background-color:#337AB7; color: white; border:none; padding: 10px 24px; float:right;'>
                    </form>
        
       
 
@endsection
