@extends('layout.masterTemplate')
@section('content')
    <form method="post" action="{{url('/templates')}}">
        {{ csrf_field() }}
        <div class="container text-center">
            <div class="row content">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8 text-left" style="text-align:center">
                    <h1>Create Template</h1><p>&nbsp;</p>
                </div>
                <div class="col-sm-12 form-group">
                    <label>Template Name</label>
                    <input type="text" name="tname"  class="form-control" placeholder="MLA Basic Book Format" >
                    <input type="hidden" name="content" id="hiddenValue">
                </div>

                <div class="col-sm-12 form-group">
                    <label>Template Creation Text Area:</label>
                    <textarea class="form-control" rows="10" id="content"placeholder="authorLname, authorFname. <i>title.</i> publisher, prinitdate."></textarea>
                </div>
            </div>
            <h5>Input Guide:</h5>
            <!--accordion start-->
            <div class="container">

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Basic Fields:</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!--table1start start-->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><strong>Attibute Name:</strong></th>
                                        <th><strong>Input Name:</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Author First Name</td>
                                        <td>authorFname</td>
                                    </tr>
                                    <tr>
                                        <td>Author Last Name</td>
                                        <td>authorLname</td>
                                    </tr>
                                    <tr>
                                        <td>Book Title</td>
                                        <td>title</td>
                                    </tr>
                                    <tr>
                                        <td>Code Name</td>
                                        <td>codeName</td>
                                    </tr>
                                    <tr>
                                        <td>ISBN number</td>
                                        <td>isbn</td>
                                    </tr>
                                    <tr>
                                        <td>Price</td>
                                        <td>price</td>
                                    </tr>
                                    <tr>
                                        <td>Translator First Name</td>
                                        <td>translatorFname</td>
                                    </tr>
                                    <tr>
                                        <td>Translator Last Name</td>
                                        <td>translatorLname</td>
                                    </tr>
                                    <tr>
                                        <td>Edition</td>
                                        <td>edition</td>
                                    </tr>
                                    <tr>
                                        <td>Illustrator First Name</td>
                                        <td>illustratorFname</td>
                                    </tr>
                                    <tr>
                                        <td>Illustrator Last Name</td>
                                        <td>illustratorLname</td>
                                    </tr>
                                    <tr>
                                        <td>Print Date</td>
                                        <td>printdate</td>
                                    </tr>
                                    <tr>
                                        <td>Place of Publication</td>
                                        <td>placeofPublication</td>
                                    </tr>
                                    <tr>
                                        <td>Publisher</td>
                                        <td>publisher</td>
                                    </tr>
                                    <tr>
                                        <td>Copy Right</td>
                                        <td>copyright</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <!--table1start end-->
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Additional Fields</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!--table1start start-->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><b>Attibute Name:<b></th>
                                        <th>Input Name:</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Legal Deposit</td>
                                        <td>legaldeposit</td>
                                    </tr>

                                    <tr>
                                        <td>ISSN Number</td>
                                        <td>issn</xmp> </td>
                                    </tr>

                                    <tr>
                                        <td>Partner Companies</td>
                                        <td>partnercompanies</td>
                                    </tr>

                                    <tr>
                                        <td>Printer</td>
                                        <td>printer</td>
                                    </tr>

                                    <tr>
                                        <td>Print Line/td>
                                        <td>printline</td>
                                    </tr>

                                    <tr>
                                        <td>Print Run</td>
                                        <td>prinrun</td>
                                    </tr>

                                    <tr>
                                        <td>Foreword</td>
                                        <td>foreword</td>
                                    </tr>


                                    <tr>
                                        <td>Introduction</td>
                                        <td>introduction</td>
                                    </tr>

                                    <tr>
                                        <td>Preface</td>
                                        <td>preface</td>
                                    </tr>

                                    <tr>
                                        <td>Front Material</td>
                                        <td>frontmaterial</td>
                                    </tr>

                                    <tr>
                                        <td>Artwork Credit(s)</td>
                                        <td>artworkcredits</td>
                                    </tr>

                                    <tr>
                                        <td>Editing Credit(s)</td>
                                        <td>editingcredits</td>
                                    </tr>

                                    <tr>
                                        <td>Layout Credit(s)</td>
                                        <td>layoutcredits</td>
                                    </tr>

                                    <tr>
                                        <td>Map Credit(s)</td>
                                        <td>mapcredits</td>
                                    </tr>

                                    <tr>
                                        <td>Editing Credit(s)</td>
                                        <td>editingcredits</td>
                                    </tr>

                                    <tr>
                                        <td>Photo Credit(s)</td>
                                        <td>photocredits</td>
                                    </tr>

                                    <tr>
                                        <td>Production Credit(s)</td>
                                        <td>productioncredits</td>
                                    </tr>

                                    <tr>
                                        <td>Translation Credit(s)</td>
                                        <td>translationcredits</td>
                                    </tr>

                                    <tr>
                                        <td>Companion Volumes</td>
                                        <td>companionvolumes</td>
                                    </tr>

                                    <tr>
                                        <td>Series</td>
                                        <td>series</td>
                                    </tr>

                                    <tr>
                                        <td>Series Editor</td>
                                        <td>serieseditor</td>
                                    </tr>

                                    <tr>
                                        <td>Issue</td>
                                        <td>issue</td>
                                    </tr>

                                    <tr>
                                        <td>Copies Examined</td>
                                        <td>copiesexamined</td>
                                    </tr>

                                    <tr>
                                        <td>Note</td>
                                        <td>note</td>
                                    </tr>

                                    <tr>
                                        <td>Copy Number</td>
                                        <td>copynumber</td>
                                    </tr>

                                    <tr>
                                        <td>Grade</td>
                                        <td>grade</td>
                                    </tr>

                                    <tr>
                                        <td>Description</td>
                                        <td>description</td>
                                    </tr>

                                    <tr>
                                        <td>Association Copy</td>
                                        <td>associationcopy</td>
                                    </tr>

                                    </tbody>
                                </table>
                                <!--table1start end-->
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Styling</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!--table1start start-->
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th><strong>Attibute Name:</strong></th>
                                        <th><strong>Input Name:</strong></th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Bold</td>
                                        <td> <xmp><b>...</b></xmp> </td>
                                    </tr>

                                    <tr>
                                        <td>Italic</td>
                                        <td> <xmp><I>...</I></xmp> </td>
                                    </tr>

                                    <tr>
                                        <td>Underline</td>
                                        <td> <xmp><u>...</u></xmp> </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <!--table1start end-->
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Add Template" onclick = getContent()>
                </div>
            </div>
            <!--end of accordion-->
        </div>
    </form>
@endsection

