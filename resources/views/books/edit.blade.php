
        <!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Book</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href = "../resources/views/layouts/navbar.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<?php
// this ignores the empty values in the form
error_reporting(E_ERROR | E_PARSE);
// gets the string of the URL
$url = $_SERVER['REQUEST_URI'];
// URL splits up between /'s. Then I grab the second to last one, which is our book ID.
$urlExplode = explode('/',$url);
$bookID = $urlExplode[count($urlExplode)-2];
$json = App\Book::where('id', $bookID)->get();
// the book to change
// retrieves the row from database from requested bid
$json = App\Book::where('id', $bookID)->get();
// turns the JSON file into a string
$items = json_decode($json[0]['bookAttr'], true);
?>

<body style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; background-color: rgb(255, 249, 229)" >

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}">BooKStrap</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Book <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/books/create')}}">Add Book</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Template <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/templates')}}">View Templates</a></li>
                        <li><a href="{{url('/templates/create')}}">Add Template</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Collection <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/bookcollections')}}">View Collections</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/changePassword')}}">Change Password</a></li>
                        <li><a href="{{ url('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>
                                Logout
                            </a></li>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
            </ul>



        </div>
    </div>
</nav>

<!--
<div class="col-sm-8" id="push" style="text-align:center">
       <h1>Title: {{$book->title}}</h1><p>&nbsp;</p>
</div>
<div class="col-md-2 col-md-offset-4">

<div id="wrapper">
  <div id="steps">
    <form id="formElem" name="formElem" action="/bookcat/public/books/{{$del}}/update" method="post">
    {{ csrf_field() }}
@foreach($book as $key =>$value)
    <fieldset class="step">
      <legend>{{$key}}</legend>
        <p>
          <label for='{{$key}}'>{{$key}}</label>
          <input id="{{$key}}" name='{{$key}}' value ="{{$value}}" />
        </p>

      </fieldset>
      @endforeach
        <fieldset class="step">
          <legend>Confirmation</legend>
           <p>
            <input id="Confirmation" type="submit" value="Save">
          <p>

        </fieldset>

      </form>
    </div>
    <div id="navigation1" style="display:none;">
      <ul>
      @foreach($book as $key =>$value)
    <li class="selected">
      <a href="#">{{$key}}</a>
      </li>
      @endforeach
        <li class ="selected">
         <a href ="#">Confirmation</a>
        </li>
      </ul>
    </div>

  </div>
  </div>
  -->

<div class="container text-center">
    <div class="row content">
        <div class="col-sm-2">
        </div>

        <div class="col-sm-8 text-left" style="text-align:center">
            <h1>Edit Book: {{$items['title']}}</h1><p>&nbsp;</p>


            <div class="col-sm-8 text-left" style="text-align:left">
                <h3>BASIC FIELDS</h3><p>&nbsp;</p>
            </div>


            <div class="row">
                <!-- DEL NEEDS TO BE THE BOOK ID THAT IS GETTING EDITED -->
                <form method="POST" action="{{url('/books/'.$bookID.'/update')}}">
                    {{ csrf_field() }}
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <input type="hidden" name="id" id="hidethis" class="form-control" value ="{{$bookID}}">
                                <label>Book Title</label>
                                <input type="text" name="title"  class="form-control" value ="{{$items['title']}}">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Code Number</label>
                                <input type="text" name="codeNum"  class="form-control" value ="{{$items['codeNum']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>ISBN Number</label>
                                <input type="text" name="isbn"  class="form-control"value ="{{$items['isbn']}}" >
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Author First Name</label>
                                <input type="text" name="authorFirstName"  class="form-control" value ="{{$items['authorFirstName']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Author Last Name</label>
                                <input type="text" name="authorLastName"  class="form-control" value ="{{$items['authorLastName']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>price</label>
                                <input type="text" name="price"  class="form-control" value ="{{$items['price']}}" >
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Translator First Name</label>
                                <input type="text" name="translatorFirstName"  class="form-control"value ="{{$items['translatorFirstName']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Translator Last Name</label>
                                <input type="text" name="translatorLastName"  class="form-control" value ="{{$items['translatorLastName']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Edition</label>
                                <input type="text" name="edition"  class="form-control" value ="{{$items['edition']}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Illustrator First Name</label>
                                <input type="text" name="illustratorFirstName"  class="form-control" value ="{{$items['illustratorFirstName']}}">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Illustrator Last Name</label>
                                <input type="text" name="illustratorLastName"  class="form-control" value ="{{$items['illustratorLastName']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Print Date</label>
                                <input type="text" name="printDate"  class="form-control" value ="{{$items['printDate']}}" >
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label>Place of Publication</label>
                                <input type="text" name="placeOfPublication"  class="form-control" value ="{{$items['placeOfPublication']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Publisher</label>
                                <input type="text" name="publisher"  class="form-control" value ="{{$items['publisher']}}" >
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Copy Right</label>
                                <input type="text" name="copyRight"  class="form-control" value ="{{$items['copyRight']}}" >
                            </div>
                        </div>

                        <hr>

                        <div class="col-sm-8 text-left" style="text-align:left">
                            <h3>ADDITIONAL FIELDS</h3><p>&nbsp;</p>
                        </div>


                        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Additional fields</button>




                        <div id="demo" class="collapse">

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Legal Deposit</label>
                                        <input type="text" name="legalDeposit"  class="form-control" value ="{{$items['legalDeposit']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>ISSN Number</label>
                                        <input type="text" name="issn"  class="form-control"value ="{{$items['issn']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Partner Companies</label>
                                        <input type="text" name="partnerCompanies"  class="form-control" value ="{{$items['partnerCompanies']}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Printer</label>
                                        <input type="text" name="printer"  class="form-control" value ="{{$items['printer']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Print line</label>
                                        <input type="text" name="printline"  class="form-control" value ="{{$items['printline']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Print Run</label>
                                        <input type="text" name="printrun"  class="form-control" value ="{{$items['printrun']}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Foreword</label>
                                        <input type="text" name="foreword"  class="form-control" value ="{{$items['foreword']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Introduction</label>
                                        <input type="text" name="introduction"  class="form-control" value ="{{$items['introduction']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Preface</label>
                                        <input type="text" name="preface"  class="form-control"value ="{{$items['preface']}}"  >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Front Material</label>
                                        <input type="text" name="frontmaterial"  class="form-control"value ="{{$items['frontmaterial']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Artwork Credit(s)</label>
                                        <input type="text" name="artworkCredits"  class="form-control" value ="{{$items['artworkCredits']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Editing Credit(s)</label>
                                        <input type="text" name="editingCredits"  class="form-control" value ="{{$items['editingCredits']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Layout Credit(s)</label>
                                        <input type="text" name="layoutCredits"  class="form-control" value ="{{$items['layoutCredits']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Map Credit(s)</label>
                                        <input type="text" name="mapCredits"  class="form-control" value ="{{$items['mapCredits']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Photo Credit(s)</label>
                                        <input type="text" name="photoCredits"  class="form-control" value ="{{$items['photoCredits']}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Production Credit(s)</label>
                                        <input type="text" name="productionCredits"  class="form-control" value ="{{$items['productionCredits']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Translation Credit(s)</label>
                                        <input type="text" name="translationCredits"  class="form-control" value ="{{$items['translationCredits']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Companion Volumes</label>
                                        <input type="text" name="companionVolumes"  class="form-control" value ="{{$items['companionVolumes']}}" >
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Series</label>
                                        <input type="text" name="series"  class="form-control" value ="{{$items['series']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Series Editor</label>
                                        <input type="text" name="seriesEditor"  class="form-control"value ="{{$items['seriesEditor']}}"  >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Issue</label>
                                        <input type="text" name="issue"  class="form-control" value ="{{$items['issue']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Title Variant</label>
                                        <input type="titleVariant" name="series"  class="form-control" value ="{{$items['titleVariant']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Author First Name Variant</label>
                                        <input type="text" name="authorFirstNameVariant"  class="form-control"value ="{{$items['authorFirstNameVariant']}}"  >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Author Last Name Variant</label>
                                        <input type="text" name="authorLastNameVariant"  class="form-control" value ="{{$items['authorLastNameVariant']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Illustrator First Name Variant</label>
                                        <input type="titleVariant" name="illustratorFirstNameVariant"  class="form-control" value ="{{$items['illustratorFirstNameVariant']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Illustrator Last Name Variant</label>
                                        <input type="text" name="illustratorLastNameVariant"  class="form-control"value ="{{$items['illustratorLastNameVariant']}}"  >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Translator First Name Variant</label>
                                        <input type="text" name="translatorFirstNameVariant"  class="form-control" value ="{{$items['translatorFirstNameVariant']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Translator Last Name Variant</label>
                                        <input type="titleVariant" name="translatorFirstNameVariant"  class="form-control" value ="{{$items['translatorFirstNameVariant']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Publisher Variant</label>
                                        <input type="text" name="publisherVariant"  class="form-control"value ="{{$items['publisherVariant']}}"  >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Cover Design Credit(s)</label>
                                        <input type="text" name="coverDesignCredit"  class="form-control" value ="{{$items['coverDesignCredit']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Design Credit(s)</label>
                                        <input type="text" name="designCredit"  class="form-control" value ="{{$items['designCredit ']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Note</label>
                                        <input type="text" name="note"  class="form-control" value ="{{$items['note']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Copy Number</label>
                                        <input type="text" name="copyNumber"  class="form-control" value ="{{$items['copyNumber']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Grade</label>
                                        <input type="text" name="grade"  class="form-control"value ="{{$items['grade']}}" >
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Description</label>
                                        <input type="text" name="description"  class="form-control" value ="{{$items['description']}}">
                                    </div>
                                    <div class="col-sm-4 form-group">
                                        <label>Association Copy</label>
                                        <input type="text" name="associationCopy"  class="form-control" value ="{{$items['associationCopy']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 form-group">
                                        <label>Copies Examined</label>
                                        <input type="text" name="copiesExamined"  class="form-control"value ="{{$items['copiesExamined']}}" >
                                    </div>

                                </div>
                            </div>


                        </div>




                    </div>

                    <hr>

                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Edit Book">

                </form>




                </form>

</body>
</html>
