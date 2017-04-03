@extends('layout.master')
@section('content')
<?php
    echo "<p style='color:blue; font-size: 2em;'>Collection name: $collection->cname</p>";
?>
	<br>
	<br>
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

@endsection