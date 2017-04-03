@extends('layout.master')

@section('title','Book Collections')

@section('content')
    <?php
    use App\bookcollection;
            ?>

   <link rel="shortcut icon" href="../favicon.ico"> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
          <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="/bookcat/public/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="/bookcat/public/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
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
        <h2 align="center">Search for a template</h2><br />
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Search</span>
                <input type="text" name="search_text" id="search_text" placeholder="Search by template name" class="form-control" />
            </div>
        </div>
        <br />
        <div id="result"></div>
    </div>
    <script>
        $(document).ready(function(){

            load_data();

            function load_data(query)
            {
                $.ajax({
                    url: "templateSearch.php",
                    method:"POST",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#result').html(data);
                    }
                });
            }
            $('#search_text').keyup(function(){
                var search = $(this).val();
                if(search != '')
                {
                    load_data(search);
                }
                else
                {
                    load_data();
                }
            });
        });
    </script>

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
                                    echo "<p>&emsp;Author First Name: $value->authorFirstName</p>";
                                    echo "<p>&emsp;Author Last Name: $value->authorLastName</p>";
                                    echo "<p>&emsp;Code Number: $value->codeNum</p>";
                                    echo "<p>&emsp;Illustrator First Name: $value->illustratorFirstName</p>";
                                    echo "<p>&emsp;Illustrator Last Name: $value->illustratorLastName</p>";
                                    echo "<p>&emsp;Translator First Name: $value->translatorFirstName</p>";
                                    echo "<p>&emsp;Translator Last Name: $value->translatorLastName</p>";
                                    echo "<p>&emsp;Publisher: $value->publisher</p>";
                                    echo "<p>&emsp;Copyright: $value->copyright</p>";
                                    echo "<p>&emsp;ISBN: $value->isbn</p>";


                                    echo "<br>";
                                }

                                    ?>

                         
                             <a href={{'http://localhost/bookcat/public/bookcollections/'.$collection->id}} class="btn btn-info">Edit Collection</a>
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