@extends('layout.master')
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
        <h2 align="center">Search for a book</h2><br />
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon">Search</span>
                <input type="text" name="search_text" id="search_text" placeholder="Search by book title" class="form-control" />
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
                       @foreach($books as $book)
                     
            
                       <input type="checkbox" name="bookcol[]" value={{$book->id}} class="">
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
                             <form class ="form-group pull-right" action="{{'books/'.$book->id}}" method ="post">
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