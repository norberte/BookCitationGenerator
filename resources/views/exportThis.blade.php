<?php
$body ="
<b>Title:</b>1984
<b>Author:</b>George Orwell
<b>Publisher:</b><i>Penguin Books</i>
<b>Random Content:</b><p>&nbsp; &nbsp; &nbsp; &nbsp; This is random. This is random. This is random. This is random. This is random. This is random. This is random. </p>
";


?>


<form name = "toWord" action="/bookcat/public/exportThis"  method="post">
<input type ="submit" name="submit_word" value="Export to Word" style='background-color:#337AB7; color: white; border:none; padding: 10px 24px;' />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<?php
if (isset($_POST['submit_word'])){
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment;filename=bibliography.doc");
}

echo "<html>";
echo "$body";
echo "</html>";
