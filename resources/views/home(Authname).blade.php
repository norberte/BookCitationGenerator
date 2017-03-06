<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href = "../resources/views/navbar.css" />
    <script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type= "text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    <script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
            <a class="navbar-brand" href="#">BooKStrap</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Book <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add Book</a></li>
                        <li><a href="#">Edit Book</a></li>

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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Colletion <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add to collecton</a></a></li>
                        <li><a href="#">Edit Book</a></li>
                        <li><a href="#">Export</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Log Out</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            "ajax": "../resources/views/scripts/server_processing.php"
        } );
        $('#example thead th').each( function () {
            var title = $('#example thead th').eq( $(this).index() ).text();
            $(this).html('<input type="text" placeholder="'+title+'" />' );
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

<div id = "content">
  <table width="100%" class="display nowrap dataTable dtr-inline" id="example" role="grid" aria-describedby="example_info" style="width: 100%;" cellspacing="0">
  <thead>
    <tr role="row">
      <th tabindex="0" class="sorting_asc" aria-controls="example" style="width: 139px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">Book Title
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> Code Number
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Author Last Name
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Author First Name
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Illustrator Last Name
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 91px;" aria-label="Start date: activate to sort column ascending" rowspan="1" colspan="1">Illustrator First Name
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Translator Last Name
      </th>
      <th tabindex="0" class="dt-body-right sorting" aria-controls="example" style="width: 78px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Translator First Name
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Publisher
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Copyright
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">ISBN
      </th>
    </tr>
  </thead>
  <tfoot>
    <tr>
      <th class="dt-body-right" rowspan="1" colspan="1">Book Title
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Code Number
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Author Last Name
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Author First Name
      </th>
      <th rowspan="1" colspan="1">Illustrator Last Name
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Illustrator First Name
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Translator Last Name
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Translator First Name
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Publisher
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Copyright
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">ISBN
      </th>
    </tr>
  </tfoot>

</table>

</div>
</body>
</html>
