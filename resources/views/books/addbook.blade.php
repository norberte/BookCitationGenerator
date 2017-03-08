<!DOCTYPE html>
<html lang="en">

<head>
 <title>Add Book</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="stylesheet.css">
 <style>
 th{
 text-align: center;
 }
 </style>
</head>
<body style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif;">

  <div class="container text-center">
   <div class="row content">
    <div class="col-sm-2">
    </div>

     <div class="col-sm-8 text-left" style="text-align:center">
       <h1>Add Book</h1><p>&nbsp;</p>


       <div class="col-sm-8 text-left" style="text-align:left">
         <h3>BASIC FIELDS</h3><p>&nbsp;</p>
       </div>


  <div class="row">
    <form method="POST" action="http://localhost/bookcat/public/books">
      {{ csrf_field() }}
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-4 form-group">
            <label>Book Title</label>
            <input type="text" name="title"  class="form-control" >
          </div>
          <div class="col-sm-4 form-group">
            <label>Code number</label>
            <input type="text" name="codeNum"  class="form-control"  >
          </div>
          <div class="col-sm-4 form-group">
            <label>isbn</label>
            <input type="text" name="isbn"  class="form-control" >
          </div>
    </div>
  </div>

  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 form-group">
        <label>Author First Name</label>
        <input type="text" name="authorFirstName"  class="form-control"  >
      </div>
      <div class="col-sm-4 form-group">
        <label>Author Last Name</label>
        <input type="text" name="authorLastName"  class="form-control"  >
      </div>
      <div class="col-sm-4 form-group">
        <label>price</label>
        <input type="text" name="price"  class="form-control" >
      </div>
  </div>
  </div>

  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 form-group">
        <label>Translator First Name</label>
        <input type="text" name="translatorFirstName"  class="form-control" >
      </div>
      <div class="col-sm-4 form-group">
        <label>Translator Last Name</label>
        <input type="text" name="translatorLastName"  class="form-control"  >
      </div>
      <div class="col-sm-4 form-group">
        <label>Edition</label>
        <input type="text" name="edition"  class="form-control" >
      </div>
  </div>
  </div>

  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 form-group">
        <label>Illustrator First Name</label>
        <input type="text" name="illustratorFirstName"  class="form-control" >
      </div>
      <div class="col-sm-4 form-group">
        <label>Illustrator Last Name</label>
        <input type="text" name="illustratorLastName"  class="form-control"  >
      </div>
      <div class="col-sm-4 form-group">
        <label>Print Date</label>
        <input type="text" name="printdate"  class="form-control"  >
      </div>
  </div>

  </div>
  <div class="col-sm-12">
    <div class="row">
      <div class="col-sm-4 form-group">
        <label>Place of Publication</label>
        <input type="text" name="placeofpublication"  class="form-control"  >
      </div>
      <div class="col-sm-4 form-group">
        <label>Publisher</label>
        <input type="text" name="publisher"  class="form-control"  >
      </div>
      <div class="col-sm-4 form-group">
        <label>Copy Right</label>
        <input type="text" name="copyright"  class="form-control"  >
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
            <input type="text" name="legaldeposit"  class="form-control"  >
          </div>
          <div class="col-sm-4 form-group">
            <label>ISSN Number</label>
            <input type="text" name="issn"  class="form-control" >
          </div>
          <div class="col-sm-4 form-group">
            <label>Partner Companies</label>
            <input type="text" name="partnercompanies"  class="form-control"  >
          </div>
      </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Printer</label>
          <input type="text" name="Printer"  class="form-control"  >
        </div>
        <div class="col-sm-4 form-group">
          <label>Print line</label>
          <input type="text" name="Printline"  class="form-control"  >
        </div>
        <div class="col-sm-4 form-group">
          <label>Print Run</label>
          <input type="text" name="Printrun"  class="form-control"  >
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Foreword</label>
          <input type="text" name="foreword"  class="form-control"  >
        </div>
        <div class="col-sm-4 form-group">
          <label>Introduction</label>
          <input type="text" name="Introduction"  class="form-control"  >
        </div>
        <div class="col-sm-4 form-group">
          <label>Preface</label>
          <input type="text" name="Preface"  class="form-control"  >
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Front Material</label>
          <input type="text" name="Frontmaterial"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Artwork Credit(s)</label>
          <input type="text" name="Artworkcredits"  class="form-control"  >
        </div>
        <div class="col-sm-4 form-group">
          <label>Editing Credit(s)</label>
          <input type="text" name="EditingCredits"  class="form-control" >
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>layout Credit(s)</label>
          <input type="text" name="layoutCredits"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Map Credit(s)</label>
          <input type="text" name="MapCredits"  class="form-control" value =" " >
        </div>
        <div class="col-sm-4 form-group">
          <label>Photo Credit(s)</label>
          <input type="text" name="PhotoCredits"  class="form-control"  >
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Production Credit(s)</label>
          <input type="text" name="ProductionCredits"  class="form-control">
        </div>
        <div class="col-sm-4 form-group">
          <label>Translation Credit(s)</label>
          <input type="text" name="TranslationCredits"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Companion Volumes</label>
          <input type="text" name="CompanionVolumes"  class="form-control" >
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Series</label>
          <input type="text" name="Series"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Series Editor</label>
          <input type="text" name="SeriesEditor"  class="form-control"  >
        </div>
        <div class="col-sm-4 form-group">
          <label>Issue</label>
          <input type="text" name="Issue"  class="form-control" >
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Copies Examined</label>
          <input type="text" name="CopiesExamined"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Note</label>
          <input type="text" name="Note"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Copy Number</label>
          <input type="text" name="CopyNumber"  class="form-control">
        </div>
    </div>
    </div>

    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-4 form-group">
          <label>Grade</label>
          <input type="text" name="Grade"  class="form-control" >
        </div>
        <div class="col-sm-4 form-group">
          <label>Description</label>
          <input type="text" name="Description"  class="form-control">
        </div>
        <div class="col-sm-4 form-group">
          <label>Association Copy</label>
          <input type="text" name="AssociationCopy"  class="form-control" >
        </div>
    </div>
    </div>



  </div>






</div>

<hr>

<input class="btn btn-lg btn-primary btn-block" type="submit" value="Add Book">

</form>
</body>
</html>
