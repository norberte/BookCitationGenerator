@extends('layout.masterTemplate')
@section('content')
    <form method="post" action="{{url('/templates/{tname}')}}">
        {{ csrf_field() }}
        <div class="container text-center">
            <div class="row content">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8 text-left" style="text-align:center">
                    <h1>Edit Template</h1><p>&nbsp;</p>
                </div>
                .                <div class="col-sm-12 form-group">
                    <label>Template Name</label>
                    <h1 class="form-control"> @foreach($template as $temp){{$temp->tname}}@endforeach </h1>
                    <input type="hidden" name="tname" value=@foreach($template as $temp){{$temp->tname}}@endforeach>
                    <input type="hidden" name="content" id="hiddenValue">
                </div>
                <div class="col-sm-12 form-group">
                    <label>Template Creation Text Area:</label>
                    <textarea class="form-control" rows="10" id="content">@foreach($template as $temp){{$temp->content}}@endforeach</textarea>
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
                                <table class="table table-striped" >
                                    <thead>
                                    <tr align ="left">
                                        <th><strong>Attibute Name:</strong></th>
                                        <th><strong>Input Name:</strong></th>
                                        <th><strong>Select:</strong></th>
                                    </tr>
                                    </thead>
                                    <tbody align="center">
                                    <tr align="center">
                                        <td >Author First Name</td>
                                        <td>authorFirstName</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('authorFirstName ')">Select</button> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>Author Last Name</td>
                                        <td>authorLastName</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('authorLastName ')">Select</button> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>Book Title</td>
                                        <td>title</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('title ')">Select</button> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>Code Number</td>
                                        <td>codeNumber</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('codeNumber ')">Select</button> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>ISBN number</td>
                                        <td>isbn</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('isbn ')">Select</button> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>Price</td>
                                        <td>price</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('price ')">Select</button> </td>
                                    </tr>
                                    <tr align="center">
                                        <td>Translator First Name</td>
                                        <td>translatorFirstName</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('translatorFirstName ')">Select</button> </td>


                                    </tr>
                                    <tr>
                                        <td>Translator Last Name</td>
                                        <td>translatorLastName</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('translatorLastName ')">Select</button> </td>
                                    </tr>
                                    <tr>
                                        <td>Edition</td>
                                        <td>edition</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('edition ')">Select</button> </td>
                                    </tr>
                                    <tr>
                                        <td>Illustrator First Name</td>
                                        <td>illustratorFirstName</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('illustratorFirstName ')">Select</button> </td>

                                    </tr>
                                    <tr>
                                        <td>Illustrator Last Name</td>
                                        <td>illustratorLastName</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('illustratorLastName ')">Select</button> </td>

                                    </tr>
                                    <tr>
                                        <td>Print Date</td>
                                        <td>printDate</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('printDate ')">Select</button> </td>

                                    </tr>
                                    <tr>
                                        <td>Place of Publication</td>
                                        <td>placeOfPublication</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('placeOfPublication ')">Select</button> </td>

                                    </tr>
                                    <tr>
                                        <td>Publisher</td>
                                        <td>publisher</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('publisher ')">Select</button> </td>

                                    </tr>
                                    <tr>
                                        <td>Copy Right</td>
                                        <td>copyRight</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('copyRight ')">Select</button> </td>

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
                                        <th><strong>Select:</strong></th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr align ="center">
                                        <td>Legal Deposit</td>
                                        <td>legalDeposit</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('legalDeposit ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>ISSN Number</td>
                                        <td>issn</xmp> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('issn ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Partner Companies</td>
                                        <td>partnerCompanies</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('partnerCompanies ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Printer</td>
                                        <td>printer</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('printer ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Print Line/td>
                                        <td>printLine</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('printLine ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Print Run</td>
                                        <td>printRun</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('printRun ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Foreword</td>
                                        <td>foreword</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('foreword ')">Select</button> </td>

                                    </tr>


                                    <tr align ="center">
                                        <td>Introduction</td>
                                        <td>introduction</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('introduction ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Preface</td>
                                        <td>preface</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('preface ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Front Material</td>
                                        <td>frontMaterial</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('frontMaterial ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Artwork Credit(s)</td>
                                        <td>artworkCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('artworkCredits ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Editing Credit(s)</td>
                                        <td>editingCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('editingCredits ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Layout Credit(s)</td>
                                        <td>layoutCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('layoutCredits ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Map Credit(s)</td>
                                        <td>mapCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('mapCredits ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Photo Credit(s)</td>
                                        <td>photoCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('photoCredits ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Production Credit(s)</td>
                                        <td>productionCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('productionCredits ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Translation Credit(s)</td>
                                        <td>translationCredits</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('translationCredits ')">Select</button> </td>

                                    </tr>
                                    <tr align ="center">
                                        <td>Cover Design Credit(s)</td>
                                        <td>coverDesignCredit</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('coverDesignCredit ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Design Credit(s)</td>
                                        <td>designCredit</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('designCredit ')">Select</button> </td>

                                    </tr>
                                    <tr align ="center">
                                        <td>Companion Volumes</td>
                                        <td>companionVolumes</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('companionVolumes ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Series</td>
                                        <td>series</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('series ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Series Editor</td>
                                        <td>SeriesEditor</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('SeriesEditor ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Issue</td>
                                        <td>issue</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('issue ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Copies Examined</td>
                                        <td>copiesExamined</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('copiesExamined ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Note</td>
                                        <td>note</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('note ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Copy Number</td>
                                        <td>copyNumber</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('copyNumber ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Grade</td>
                                        <td>grade</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('grade ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Description</td>
                                        <td>description</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('description ')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Association Copy</td>
                                        <td>associationCopy</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('associationCopy ')">Select</button> </td>

                                    </tr>
                                    <tr align ="center">
                                        <td>Title Variant</td>
                                        <td>titleVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('titleVariant ')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Author First Name Variant</td>
                                        <td>authorFirstNameVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('authorFirstNameVariant ')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Author Last Name Variant</td>
                                        <td>authorLastNameVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('authorLastNameVariant ')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Illustrator First Name Variant</td>
                                        <td>illustratorFirstNameVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('illustratorFirstNameVariant ')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Illustrator Last Name Variant</td>
                                        <td>illustratorLastNameVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('illustratorLastNameVariant ')">Select</button> </td>
                                    </tr>
                                    <tr align ="center">
                                        <td>Translator First Name Variant</td>
                                        <td>translatorFirstNameVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('translatorFirstNameVariant ')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Translator Last Name Variant</td>
                                        <td>translatorLastNameVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('translatorFirstNameVariant ')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Publisher Variant</td>
                                        <td>publisherVariant</td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('publisherVariant ')">Select</button> </td>
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
                                <table class="table table-striped" >
                                    <thead>
                                    <tr >
                                        <th><strong>Styling Name:</strong></th>
                                        <th><strong>Input tags:</strong></th>
                                        <th><strong>Start tag:</strong></th>
                                        <th><strong>End tag:</strong></th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                    <tr align ="center">
                                        <td>Bold</td>
                                        <td> <xmp><b>...</b></xmp> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('<b>')">Select</button> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('</b>')">Select</button> </td>

                                    </tr>

                                    <tr align ="center">
                                        <td>Italic</td>
                                        <td> <xmp><I>...</I></xmp> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('<i>')">Select</button> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('</i>')">Select</button> </td>
                                    </tr>

                                    <tr align ="center">
                                        <td>Underline</td>
                                        <td> <xmp><u>...</u></xmp> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('<u>')">Select</button> </td>
                                        <td><button type="button" class="btn btn-default" onclick="insertAtCaret('</u>')">Select</button> </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <!--table1start end-->
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Save changes" onclick = getContent()>
                </div>
            </div>
            <!--end of accordion-->
        </div>
    </form>
@endsection
