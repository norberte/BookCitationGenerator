<?php
// I had to place this in a separate folder because the template/{whatever} was already taken in a route.

        $lol = $_POST['search_text'];

        $percentages = '%'.$lol.'%';

 $json = App\BookCollection::where('cname', 'like', $percentages)->get();


$array = json_decode( $json, true );


//how to return an object
$users = DB::table('bookcollections')
    ->where('cname', 'like', $percentages)
    ->get()
?>

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
        <h2 align="center">Search for a book collection</h2><br />
        <div class="form-group">

            <div class="input-group">
                <span class="input-group-addon">Search</span>
                <form  action="http://localhost/bookcat/public/templates/template/search" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="search_text" id="search_text" placeholder="Search by collection name" class="form-control"/>
                    <input type="submit" name="search_template" value="submit">
                </form>


            </div>
            <form action="../../bookcollections" method="get">
                <input type ="submit" name="submit_word" value="View all books" style='background-color:#337AB7; color: white; border:none; padding: 10px 24px; float:right;' />
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
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
                @foreach($users as $user)
                    <li>
                        <a href="#">{{$user->cname}}<span class="st-arrow">Open or Close</span></a>
                        <div class="st-content">

                            <!-- need to view the books here -->

                            <?php
                            //grabs the book collection ID of the accordion
                            $collectionId = $user->id;

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


                            <form class ="form-group pull-right" action="{{'bookcollections/'.$user->id}}" method ="post">
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
