

<h1>Reset Password</h1>

<form action="http://127.0.0.1:8000/changePassword" method="post">
    {{ csrf_field() }}
    Old password:<br>
    <input type="password" name="oldpassword"><br>
    New password:<br>
    <input type="password" name="newpassword1"><br><br>
    Enter new password again:<br>
    <input type="password" name="newpassword2"><br><br>
    <input type="submit" value="Submit">
</form>

















