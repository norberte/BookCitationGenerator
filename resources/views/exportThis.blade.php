<h1>Export Bibliography</h1>
<?php
$body = "TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING
TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING
TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING
TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING
TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING TESTING";
?>


<form name = "toWord" action="/bookcat/public/exportThis"  method="post">
<input type ="submit" name="submit_word" value="Export to Word" style='background-color:#337AB7; color: white; border:none; padding: 10px 24px;' />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>

<style>
    #styleit{
        border-style: solid;
        border-width: 4px;
        width: 50%;
    }

</style>

<?php
if (isset($_POST['submit_word'])){
    header("Content-Type: application/vnd.msword");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("content-disposition: attachment;filename=bibliography.doc");
}

echo "<html>";
echo '<div id="styleit">';
echo "$body";
echo "<br>";
echo '</div>';
echo "</html>";
