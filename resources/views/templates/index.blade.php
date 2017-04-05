<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
    <script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type= "text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.semanticui.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/popup.css" />


</head>

<body style="background-color: rgb(255, 249, 229)">

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
<h1 style="text-align: center";>Template Viewer</h1>

<script>


    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example').DataTable( {
            //search only works if serverside is set to false....Not sure if we will run into
            // any more problems because of this, but if we do changing it back to true should be a start
            "processing": true,
            "serverSide": false,
            "ajax": "/server_processing_templateViewer.php",
            "columnDefs": [ {
                "targets": 1,
                "data": 'view',
                "defaultContent": '<button class = "view" style="background-color:#337AB7; color: white; border:none; padding: 10px 24px;">View template</button>'},
                {
                    "targets": 2,
                    "data": 'edit',
                    "defaultContent": "<button class = 'edit' style='background-color:#337AB7; color: white; border:none; padding: 10px 24px;'>Edit template</button>"},
                {

                    "targets": 3,
                    "data": 'delete',
                    "defaultContent": "<button class = 'delete' style='background-color:#337AB7; color: white; border:none; padding: 10px 24px;'>Delete template</button>"},
                {
                    "targets": 4,
                    "data": 'select',
                    "defaultContent": "<button class = 'select' style='background-color:#337AB7; color: white; border:none; padding: 10px 24px;'>Apply template</button>"}
            ]

        } );


        //After clicking the button, it retrieves the Template Name
        $('#example tbody').on( 'click', 'button', function () {
            var data = table.row( $(this).parents('tr') ).data();
            //store the template name in a variable
            var templatename = data[0];


            if ( $(this).hasClass('select') ) {
                window.location.href = "/templates/apply/" + templatename;
            }

            if ( $(this).hasClass('delete') ) {
                $.ajax({
                    type: "POST",
                    url: "../resources/views/scripts/templateview.blade.php",
                    data:{
                        templatename: templatename

                    },
                    success: function(data){
                        alert("Success!");
                    }
                });
                alert("Template Name: '" + templatename + "' has been deleted");
                location.reload();
            }
            if ( $(this).hasClass('edit') ) {
                $.ajax({
                    type: "get",
                    url: "/templates/" + templatename + "/edit",
                    data:{
                        //templatename: templatename
                    },
                    success: function(data){
                        alert("Success!");
                    }
                });
                window.location.href = "/templates/" + templatename + "/edit";
            }
            if ( $(this).hasClass('view') ) {
                $.ajax({
                    type: "get",
                    url: "templates/" + templatename,
                    data:{
                    }
                });
                window.location.href = "/templates/" + templatename;
            }
        } );

        // DataTable
        var table = $('#example').DataTable();
        // Apply the search
        table.columns().eq( 0 ).each( function ( colIdx ) {
            $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
                table
                    .column( colIdx )
                    .search( this.value )
                    .draw();
            } );
        } );

    } );
</script>

<div id="content">
<fieldset style="padding:2em" >
    <table width="100%" class="display nowrap dataTable dtr-inline ui celled table" id="example" role="grid" aria-describedby="example_info" style="width: 100%;" cellspacing="0">
        <thead>
        <tr role="row">
            <th tabindex="0" class="sorting_asc" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" aria-sort="ascending" rowspan="1" colspan="1">Template Name
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">View
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Edit
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Delete
            </th>
            <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1">Apply
            </th>
        </tr>
        </thead>
        <tfoot>
        </tfoot>

    </table>
</fieldset>
</div>

</body>
</html>
