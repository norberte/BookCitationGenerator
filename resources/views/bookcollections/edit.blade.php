@extends('layout.master')
@section('content')

	    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
	    <script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script type= "text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	    <script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
	    <script type="text/javascript" scr="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>

  <?php
    use App\bookcollection;
            ?>

   <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
          <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/bookcat/public/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/bookcat/public/css/style.css" />
     <noscript>
      <style>
      body{
      	background-color: rgb(255, 255, 230);
      }
      .container{
      	background-color: rgb(179, 179, 0);
      }
      .st-accordian ul{
      	position:relative;
      	background-color: rgb(255, 255, 230);
      }
      .st-accordion ul li{
          height:auto;
          display:inline;
          float:right;
          background-color: rgb(255, 255, 230);

        }
        .st-accordion ul li > a span{
          visibility:hidden;
        }
        .checkmarkbox{
        
        	position:relative;
        	display:inline;
        	margin-right:100em;
        }
     </style>
     </noscript>
     <style>
    	#box{
    	display: none;
    	width: 100%;
		}

		a:hover + #box,#box:hover{
   		 display: block;
   		 width:600px;
   		 height:600px;
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
                <img src="../../public/col.png" width =80% height=200px style="position:relative; left:10em; background:repeat-x; border-radius: 1em; opacity:0.95;margin-top:0em">
                <form method='POST' action="{{'http://localhost/bookcat/public/bookcollections/'.$id}}">
                    	{{ csrf_field() }}
                    	{{ method_field('PUT')}}
                        
                <div class="wrapper">
                 <div id="st-accordion" class="st-accordion">
                    <ul>
                    	

                    		{{-- expr --}}
                    	
                       @foreach($books as $book)
                     
            			
                       <p><input type="checkbox" name="books[]" style ="float:left; position:relative ; top:3em;left:4em; transform: scale(3);" value={{$book->id}} class= "checkmarkbox">
                        <li>
                           
                            <a href="#">{{$book->title}}<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content">

                                <!-- need to view the books here -->

                                <?php
                                //prints out all the books from the collection ID
                                
                                    
                                    echo "<p>&emsp;Author First Name: $book->authorFirstName</p>";
                                    echo "<p>&emsp;Author Last Name: $book->authorLastName</p>";
                                    echo "<p>&emsp;Code Number: $book->codeNum</p>";
                                    echo "<p>&emsp;Illustrator First Name: $book->illustratorFirstName</p>";
                                    echo "<p>&emsp;Illustrator Last Name: $book->illustratorLastName</p>";
                                    echo "<p>&emsp;Translator First Name: $book->translatorFirstName</p>";
                                    echo "<p>&emsp;Translator Last Name: $book->translatorLastName</p>";
                                    echo "<p>&emsp;Publisher: $book->publisher</p>";
                                    echo "<p>&emsp;Copyright: $book->copyright</p>";
                                    echo "<p>&emsp;ISBN: $book->isbn</p>";


                                    echo "<br>";
                                

                                    ?>

                         
                             <a href={{'http://localhost/bookcat/public/books/'.$book->id}} class="btn btn-info">View Book</a>
                             
                             
                            
                      
                          </div>
                        </li>
                        </p>
                        
                        @endforeach
                      </ul>
                      
                    </div>
                    </div>
                    <button type="submit" class="btn btn-danger " style="margin-left:70em">Delete</button>
                            </form>
                  

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