@extends('layout.master')

@section('title','Book Collections')

@section('content')
    <?php
    use App\bookcollection;
            ?>

   <link rel="shortcut icon" href="../favicon.ico"> 

          <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="stylesheet" type="text/css" href="/css/navbar.css" />

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
    <div class="container">
        <br />
        <h2 align="center">Search for a book collection</h2><br />
        <div class="form-group">


            <div class="form-group">

                <form  action="{{url('templates/template/search')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text"  class="form-control" name="search_text" id="search_text" placeholder="Search by collection name" class="form-control"/>
                    <span class="input-group-btn">
                    <input class="btn btn-default" type="submit" name="search_template" value="submit" style="float:right; background-color: #337AB7; color: white;">
                    </span>
                </form>
            </div>
        </div>
        <br />
        <div id="result"></div>
    </div>
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

                                <!-- need to view the books here -->

                                <?php
                                    //grabs the book collection ID of the accordion
                                    $collectionId = $collection->id;

                                    //gets all the books from the collection ID
                                    $bookId = bookcollection::find($collectionId)->books;

                                //prints out all the books from the collection ID
                                foreach ($bookId as $value){
                                    echo "<p style='color:blue; font-size: 2em;'>Title: $value->title</p>";
                                    echo "<p>&emsp;Author Last Name: $value->authorLastName</p>";

                                    echo "<br>";
                                }

                                    ?>

                         
                             <a href="{{url('/bookcollections/'.$collection->id)}}" class="btn btn-info">Edit Collection</a>



                             <form class ="form-group pull-right" action="{{url('bookcollections/'.$collection->id)}}" method ="post">
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

    <script type="text/javascript" src="/js/jquery.accordion.js"></script>
    <script type="text/javascript" src="/js/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
      
        $('#st-accordion').accordion({
          oneOpenedItem : true
        });
        
            });
        </script>
                       
            
        
       
 
@endsection