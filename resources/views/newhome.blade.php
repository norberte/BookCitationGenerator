

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
	#form1 div{
		display:block;
		margin:0.3em;
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

	/* Full-width input fields */
#form1 input[type=hidden]{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: none;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

#form1 p{
	color:white;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin-right:8em;
    border: none;
    cursor: pointer;
    width: 200px;
    float:right;
}

/* Extra styles for the cancel button */
.cancelbtn1 {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn1,.signupbtn1 {float:left;width:50%}

/* Add padding to container elements */
.container1 {
    padding: 16px;
}

/* The Modal (background) */
.modal1 {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    top: 50%;
  	left: 50%;
  	width:95%;
    max-width: 800px; /* Full width */
    height:80%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,2); /* Black w/ opacity */
    padding-top: 60px;
    transform: translate(-50%, -50%);
}
}

/* Modal Content/Box */
.modal-content1 {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
.modal-overlay1{
	  z-index: 1000;

  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;

}

/* The Close Button (x) */
.close1 {
    position: absolute;
    right: 35px;
    top: 15px;
    color: red;
    font-size: 40px;
    font-weight: bold;
}

.close1:hover,
.close1:focus {
    color: blue;
    cursor: pointer;
}

/* Clear floats */
.clearfix1::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

td.details-control {
    background: url('../resources/details_open.png') no-repeat center center;
    cursor: pointer;
}
tr.details td.details-control {
    background: url('../resources/details_close.png') no-repeat center center;
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
	                        <li><a href="#">Add Template</a></li>
	                        <li><a href="#">Edit Template</a></li>


	                    </ul>
	                </li>
	                <li class="dropdown">
	                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Collection <span class="caret"></span></a>
	                    <ul class="dropdown-menu">
	                        <li><a href="{{url('/bookcollections')}}">View Collections</a></li>
            
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

	<button id="create" style='background-color:#337AB7; float: left;'>Create Collection</button>
	<button id="editbook" style='background-color:#337AB7; float: left;'>Edit</button>
	<button id="viewbook" style='background-color:#337AB7; float: left;'>View Book</button>


<script>
 function format ( d ) {
         return 'Title: '+d.title+ '<br>'+
        'Author Fullname: '+d.authorLastName+ ',' + d.authorFirstName + '<br>'+
        'Illustrator Fullname' + d.illustratorLastName+ ',' + d.illustratorFirstName+ '<br />'+
        'Translator Fullname:' + d.translatorLastName + ',' + d.illustratorFirstName+ '<br>' +
        'publisher' + d.publisher + '<br />';
    }
    $(document).ready(function() {
        // Setup - add a text input to each footer cell
		//ths is what is going to be shown in the child row containing the child row
	


        var selected =[];

      	var table = $('#example').DataTable( {
            "processing": true,
            "serverSide": true,
            select: true,
            "ajax": "../resources/views/scripts/server_processing.php"
					//head brackets
        } );


    /*javascript for my modal BY Andry*/
        // Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("create");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
    modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    modal1.style.display = "none";
}

// Get the button that sends the book to edit
var editbutton = document.getElementById("editbook");
editbutton.onclick = function() {
    var table = $('#example').DataTable();

    //retrieves the selected rows, plus more garbage
    selected = table.rows('.selected').data();

    //retrieves just the selected row and bookID.
	selection = JSON.stringify(selected[0][0]);

	//gets rid of the quotes in the bookID that got returned
   noquotes = JSON.parse(selection);


	//redirects the number to this page so it can be edited
   window.location.replace("http://localhost/bookcat/public/books/" + noquotes + "/edit");

}

// Get the button that sends the book to edit
var viewbutton = document.getElementById("viewbook");
viewbutton.onclick = function() {
    var table = $('#example').DataTable();

    //retrieves the selected rows, plus more garbage
    selected = table.rows('.selected').data();

    //retrieves just the selected row and bookID.
	selection = JSON.stringify(selected[0][0]);

	//gets rid of the quotes in the bookID that got returned
   noquotes = JSON.parse(selection);



	//redirects the number to this page so it can be viewed
   window.location.replace("http://localhost/bookcat/public/books/" + noquotes);

}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}

     $('#example tbody').on( 'click', 'tr', function () {
            $(this).toggleClass('selected');

        });

     // DataTable
        

/*I created this script to dynamically add form inputs for every selected item of the user Andry*/
     $('#create').on('click',function(){
         
     	selected = table.rows('.selected').data();
     	form = document.getElementById('form1');
     	var subbutoon = document.createElement('div');
     	subbutoon.innerHTML = '<input type="text" name="cname" placeholder ="Enter Book collection name" />';
     	form.appendChild(subbutoon);

     	for(var i =0; i<selected.length; i++){
    		var newcontent = document.createElement('div');
    		newcontent.innerHTML = '<input type="hidden" name="books[]" value ="'+parseInt(selected[i])+'"/><br>';
        	form.appendChild(newcontent);
        	var newcontent1 = document.createElement('p');
    		newcontent1.innerHTML = (selected[i]) + '<br>';
        	form.appendChild(newcontent1);
    					
     		}    
     		     var subbutoon1 = document.createElement('div');

                 subbutoon1.innerHTML='<input class="btn btn-primary pull-right" type="submit" value="Add bookcollection" name="signup">';
                 form.appendChild(subbutoon1);

 

  		
     	
               });
   

        /*------*/ 	
    //    $( "#myBtn" ).click( function() {
        
    // });

    //  	for(var i =0; i<selected.length; i++){
    //  		tid[i] = parseInt(selected[i]);
     		
    //  	}
				// 	$.post('/bookcat/public/bookcollections', tid)
				// })
			window.setTimeout(function() {
  $(".flash").fadeTo(500, 0).slideUp(500, function(){
      $(this).remove();
  	});
			}, 5000);



        $('#example thead th').each( function () {
            var title = $('#example thead th').eq( $(this).index() ).text();
            $(this).html('<input type="text" placeholder="'+title+'" />' );
        } );



       

      



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



</script>
<!--
-->
<!-- flashes message after creating new collection then fades out after 5 seconds by ANdry -->
@if (Session::has('message'))
	<div class = "alert alert-success flash">{{ Session::get('message')}}</div>
@endif


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
	    <tr id= "showchild">
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

		<!-- Trigger/Open The Modal -->




<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-overlay1">
	


    <span class="close1">&times;</span>
    <div id="formdiv">
    
    	<form action="http://localhost/bookcat/public/bookcollections"  method="POST"  id="form1" >
    	  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            
                </form>
          
   
   </div>
  </div>
  

        
	</body>
	</html>