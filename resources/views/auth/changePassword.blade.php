@extends('layout.master')
@section('content')


<div class="col-sm-4 form-group center" id="float_this">
    <h3 id="padding">Change Password</h3><p>&nbsp;</p>
<form action="http://localhost/bookcat/public/changePassword" method="post">
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
    .center{
        margin-left: 25%;

    }
</style>
@endsection















