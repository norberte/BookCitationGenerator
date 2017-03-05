<!DOCTYPE html>
<meta charset="utf-8"  />
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/>
<link rel="stylesheet" href = "../css/search.css" />
 <script type = "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function(){
    $('#example').DataTable();
});
</script>
<script>
$(document).ready(function() {
    // Setup - add a text input to each footer cell

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
<HTML>

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
<div id = "content">


  <table width="100%" class="display nowrap dataTable dtr-inline" id="example" role="grid" aria-describedby="example_info" style="width: 100%;" cellspacing="0">
  <thead>
    <tr role="row">
      <th tabindex="0" class="sorting_asc" aria-controls="example" style="width: 139px;" aria-label="Name: activate to sort column descending" aria-sort="ascending" rowspan="1" colspan="1">Book Title
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 218px;" aria-label="Position: activate to sort column ascending" rowspan="1" colspan="1"> CodeNumber
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Author Lastname
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Author Firstname
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Illustrator Firstname
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 91px;" aria-label="Start date: activate to sort column ascending" rowspan="1" colspan="1">Illustrator surname
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Translator Firstname
      </th>
      <th tabindex="0" class="dt-body-right sorting" aria-controls="example" style="width: 78px;" aria-label="Salary: activate to sort column ascending" rowspan="1" colspan="1">Translator Surname
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Publisher
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">Copyright
      </th>
      <th tabindex="0" class="sorting" aria-controls="example" style="width: 102px;" aria-label="Office: activate to sort column ascending" rowspan="1" colspan="1">ISBN
      </th>

    </tr>
  </thead>
  <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
      </tbody/>
  <tfoot>
    <tr>
      <th class="dt-body-right" rowspan="1" colspan="1">Book Title
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">CodeNumber
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Author Lastname
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Author Firstname
      </th>
      <th rowspan="1" colspan="1">Illustrator Firstname
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Illustrator Surname
      </th>
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Translator Firstname
      </th>
      <th class="dt-body-right" rowspan="1" colspan="1">Translator Surname
      </th>
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
</HTML>
