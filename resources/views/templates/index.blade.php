<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href = "../resources/views/layouts/navbar.css" />
    <script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type= "text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css" />

</head>
<body>
<style>
    table{
        overflow-x: scroll;
    }
    .content{
        width: 80%;
    }
    tfoot {
        display: table-header-group;
    }

    #content{
        width: 90%;
        height: 40em;
        margin-top: 10em;
        border: black 1px;
        overflow: scroll;
        margin-left: 80px;
    }
</style>
<!--
This is used to display the field of the books in the Datatable, as a way to provide searching for books by different fields link the drop down button to a different
html file that puts the "SEARCHBY field" in the first column this automatically switches the search filed to the first column
-->
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
                        <li><a href="{{url('/books/edit')}}">Edit Book</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Template <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add Template</a></li>
                        <li><a href="#">Edit Template</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Collection <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add to collecton</a></li>
                        <li><a href="#">Edit Book</a></li>
                        <li><a href="#">Export</a></li>
                        <li><a href="{{url('/changePassword')}}">Change Password</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li> <a href="{{ url('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </ul>



        </div>
    </div>
</nav>

<h1>Template Viewer</h1>




<script>


    //need to send an Ajax request to the server which will then do "DELETE FROM whatever WHERE something=somethingelse



    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "../resources/views/scripts/server_processing_templateViewer.php",

            "columnDefs": [ {
                "targets": 1,
                "data": 'view',
                "defaultContent": "<button class = 'view' style='background-color:#3C3F41; color: white; border:none; padding: 10px 24px;'>View!</button>"},
                {
                    "targets": 2,
                    "data": 'edit',
                    "defaultContent": "<button class = 'edit' style='background-color:#3C3F41; color: white; border:none; padding: 10px 24px;'>Edit!</button>"},
                {
                    "targets": 3,
                    "data": 'delete',
                    "defaultContent": "<button class = 'delete' style='background-color:#3C3F41; color: white; border:none; padding: 10px 24px;'>Delete!</button>"},
                {
                    "targets": 4,
                    "data": 'select',
                    "defaultContent": "<button class = 'select' style='background-color:#3C3F41; color: white; border:none; padding: 10px 24px;'>Select!</button>"}
            ]
        } );
        var table = $('#example').DataTable();

        //After clicking the button, it retrieves the Template Name
        $('#example tbody').on( 'click', 'button', function () {
            var data = table.row( $(this).parents('tr') ).data();
            //store the template name in a variable
            var templatename = data[0];

            //fieldname will be edit/view/select/delete
            var fieldname;


            if ( $(this).hasClass('select') ) {
                    fieldname ='delete';

                $.ajax({
                    type: "delete",
                    url: "templates/" + templatename,
                    data:{

                    },
                    success: function(data){
                        alert("Success!");
                    }
                });
                alert( "Template Name: " + templatename + " Field Name: " + fieldname);
            }
            if ( $(this).hasClass('delete') ) {
                fieldname = 'delete';
                $.ajax({
                    type: "post",
                    url: "../resources/views/scripts/templateview.php",
                    data:{
                        fieldname: fieldname,
                        templatename: templatename
                    },
                    success: function(data){
                        alert("Success!");
                    }
                });
                window.location.href = "http://localhost/bookcat/public/templates/" + templatename;
            }
            if ( $(this).hasClass('edit') ) {
                fieldname = 'edit';
                $.ajax({
                    type: "POST",
                    url: "../resources/views/scripts/templateview.php",
                    data:{
                        fieldname: fieldname,
                        templatename: templatename
                    },
                    success: function(data){
                        alert("Success!");
                    }
                });
                alert( "Template Name: " + templatename + " Field Name: " + fieldname);
            }
            if ( $(this).hasClass('view') ) {
                fieldname = 'view';
                $.ajax({
                    type: "get",
                    url: "templates/" + templatename,
                    data:{
                    },
                    success: function(data){
                        alert("Success!");
                    }
                });
                window.location.href = "http://localhost/bookcat/public/templates/" + templatename;
            }

        } );


    } );
</script>

<div id = "content">
    <table width="100%" class="display nowrap dataTable dtr-inline" id="example" role="grid" aria-describedby="example_info" style="width: 100%;" cellspacing="0">
        <thead>
        <tr role="row">
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> Template Name
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> View
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> Edit
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> Delete
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> Select
            </th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th class="dt-body-right" rowspan="1" colspan="1">
            </th>
            <th class="dt-body-right" rowspan="1" colspan="1">
            </th>
            <th class="dt-body-right" rowspan="1" colspan="1">
            </th>
            <th class="dt-body-right" rowspan="1" colspan="1">
            </th>
            <th class="dt-body-right" rowspan="1" colspan="1">
            </th>
        </tr>
        </tfoot>

    </table>

</div>
</body>
</html>
