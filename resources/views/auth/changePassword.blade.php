
@extends('layouts.navbar')

@section('content')


    <h3 id="padding">Change Password</h3><p>&nbsp;</p>


<div class="col-sm-4 form-group" id="float_this">
<form action="http://localhost/SoftwareEngineeringCourse/public/changePassword" method="post">
    {{ csrf_field() }}
   <label>Old password:</label>
    <input type="password" class="form-control" name="oldpassword"><br>
    <label>New password:</label>
    <input type="password" class="form-control" name="newpassword1"><br>
    <label>Enter new password again:</label>
    <input type="password" class="form-control" name="newpassword2"><br><br>
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
</form>
</div>

<style>
    #padding{
        margin-left: 40px;
    }
</style>
@endsection















