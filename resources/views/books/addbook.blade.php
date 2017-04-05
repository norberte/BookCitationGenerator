@extends('layout.master')
@section('content')
        <!DOCTYPE html>
<title>Add Book</title>
<style>
  th{
    text-align: center;
  }
</style>
</head>
<body style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; background-color: rgb(255, 249, 229);">
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
        <form method="POST" action="{{url('/books')}}">
          {{ csrf_field() }}
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Book Title</label>
                <input type="text" name="title"  class="form-control" >
              </div>
              <div class="col-sm-4 form-group">
                <label>Code Number</label>
                <input type="text" name="codeNum"  class="form-control"  >
              </div>
              <div class="col-sm-4 form-group">
                <label>ISBN Number</label>
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
                <input type="text" name="printDate"  class="form-control"  >
              </div>
            </div>

          </div>
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-4 form-group">
                <label>Place of Publication</label>
                <input type="text" name="placeOfPublication"  class="form-control"  >
              </div>
              <div class="col-sm-4 form-group">
                <label>Publisher</label>
                <input type="text" name="publisher"  class="form-control"  >
              </div>
              <div class="col-sm-4 form-group">
                <label>Copy Right</label>
                <input type="text" name="copyRight"  class="form-control"  >
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
                    <input type="text" name="legalDeposit"  class="form-control"  >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>ISSN Number</label>
                    <input type="text" name="issn"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Partner Companies</label>
                    <input type="text" name="partnerCompanies"  class="form-control"  >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Printer</label>
                    <input type="text" name="printer"  class="form-control"  >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Print line</label>
                    <input type="text" name="printline"  class="form-control"  >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Print Run</label>
                    <input type="text" name="printRun"  class="form-control"  >
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
                    <input type="text" name="introduction"  class="form-control"  >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Preface</label>
                    <input type="text" name="preface"  class="form-control"  >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Front Material</label>
                    <input type="text" name="frontMaterial"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Artwork Credit(s)</label>
                    <input type="text" name="artworkCredits"  class="form-control"  >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Editing Credit(s)</label>
                    <input type="text" name="editingCredits"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Layout Credit(s)</label>
                    <input type="text" name="layoutCredits"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Map Credit(s)</label>
                    <input type="text" name="mapCredits"  class="form-control"  >
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
                    <input type="text" name="productionCredits"  class="form-control">
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Translation Credit(s)</label>
                    <input type="text" name="translationCredits"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Companion Volumes</label>
                    <input type="text" name="companionVolumes"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Series</label>
                    <input type="text" name="series"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Series Editor</label>
                    <input type="text" name="seriesEditor"  class="form-control"  >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Issue</label>
                    <input type="text" name="issue"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Title Variant</label>
                    <input type="text" name="titleVariant"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Author First Name Variant</label>
                    <input type="text" name="authorFirstNameVariant"  class="form-control">
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Author First Name Variant</label>
                    <input type="text" name="authorFirstNameVariant"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Illustrator First Name Variant</label>
                    <input type="text" name="illustratorFirstNameVariant"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Illustrator Last Name Variant</label>
                    <input type="text" name="illustratorLastNameVariant"  class="form-control">
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Translator First Name Variant</label>
                    <input type="text" name="translatorLastNameVariant"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Translator Last Name Variant</label>
                    <input type="text" name="translatorLastNameVariant"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Publisher Variant</label>
                    <input type="text" name="publisherVariant"  class="form-control">
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Cover Design Credit(s)</label>
                    <input type="text" name="coverDesignCredit"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Design Credit(s)</label>
                    <input type="text" name="designCredit"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Note</label>
                    <input type="text" name="note"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Copy Number</label>
                    <input type="text" name="copyNumber"  class="form-control">
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Grade</label>
                    <input type="text" name="grade"  class="form-control" >
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Description</label>
                    <input type="text" name="description"  class="form-control">
                  </div>
                  <div class="col-sm-4 form-group">
                    <label>Association Copy</label>
                    <input type="text" name="associationCopy"  class="form-control" >
                  </div>
                </div>
              </div>

              <div class="col-sm-12">
                <div class="row">
                  <div class="col-sm-4 form-group">
                    <label>Copies Examined</label>
                    <input type="text" name="copiesExamined"  class="form-control" >
                  </div>

                </div>
              </div>

            </div>






          </div>

          <hr>

          <input class="btn btn-lg btn-primary btn-block" type="submit" value="Add Book">

        </form>
        </html>

@endsection
