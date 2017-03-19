<!DOCTYPE html>
	<html lang="en">
	<head>
	    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
	    <script type= "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script type= "text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	    <script type= "text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.1/css/select.dataTables.min.css">
	    <script type="text/javascript" scr="https://cdn.datatables.net/select/1.2.1/js/dataTables.select.min.js"></script>
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

	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    padding-top: 100px; /* Location of the box */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
	    background-color: #fefefe;
	    margin: auto;
	    padding: 20px;
	    border: 1px solid #888;
	    width: 80%;
	}

	/* The Close Button */
	.close {
	    color: #aaaaaa;
	    float: right;
	    font-size: 28px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: #000;
	    text-decoration: none;
	    cursor: pointer;
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



<script>
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
		
        var selected =[];

      	$('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            select: true,
            "ajax": "../resources/views/scripts/server_processing.php",


	
		




					//head brackets
        } );

     $('#example tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');


        } );

     $('#myBtn').on('click',function(){
     	selected = table.rows('.selected').data();

     	//for(var i =0; i<selected.length; i++){
     		//alert(selected[i]);
     	//}
					$.post('/bookcat/public/bookcollections', selected)
				})


        $('#example thead th').each( function () {
            var title = $('#example thead th').eq( $(this).index() ).text();
            $(this).html('<input type="text" placeholder="'+title+'" />' );
        } );



        // DataTable
        var table = $('#example').DataTable();

      



        // Apply the search
        table.columns('#example').eq( 0 ).each( function ( colIdx ) {
            $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
                table
                        .column( colIdx )
                        .search( this.value )
                        .draw();
            } );
        } );



				//so now use js to print all the selected books to a modal form and then when submitted
				//thi is what is posted, the php file will retrieve this array by $array=json_decode($_POST['jsondata']);
				//so what this code below will do is when the button is clicked it will trasnfer the array from this file to the php to show book collecton


		

				// Setup - add a text input to each footer cell


			 $('#example thead th').each( function () {
					 var title = $('#example thead th').eq( $(this).index() ).text();
					 $(this).html('<input type="text" placeholder="'+title+'" />' );
			 } );


			 // Apply the search
			 table.columns().eq( 0 ).each( function ( colIdx ) {
					 $( 'input', table.column( colIdx ).header() ).on( 'keyup change', function () {
							 table
											 .column( colIdx )
											 .search( this.value )
											 .draw();
					 } );
			 } );


		//thi is used to create a button for each row that shows more info when clcked
	
 
  


    } );



		// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//ths is what is going to be shown in the child row containing the child row
function format ( d ) {
    return 'Title: '+d.title+ '<br>'+
        'Author Fullname: '+d.authorLastName+ ',' + d.authorFirstName + '<br>'+
        'Illustrator Fullname' + d.illustratorLastName+ ',' + d.illustratorFirstName+ '<br />'+
        'Translator Fullname:' + d.translatorLastName + ',' + d.illustratorFirstName+ '<br>' +
        'publisher' + d.publisher + '<br />';
}

</script>
<!--
-->
<button id="myBtn">View Collection</button>
<p>random</p>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
    <button id = "collect">add Collection</button>
  </div>

</div>
	<div id = "content">
	  <table width="100%" class="display nowrap dataTable dtr-inline" id="example" role="grid" aria-describedby="example_info" style="width: 100%;" cellspacing="0">
	  <thead>
	    <tr role="row">
				<th tabindex="0" class="sorting_asc" aria-controls="example" style="width: 139px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">Book ID
	      </th>
				<th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> Book Title
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
				<th class="dt-body-right" rowspan="1" colspan="1">Book ID
	      </th>
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
