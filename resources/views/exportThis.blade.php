<h1>Export Bibliography</h1>


<form name = "toWord" action="/bookcat/public/exportThis"  method="post">
    <input type ="submit" name="submit_word" value="Export to Word" style='background-color:#337AB7; color: white; border:none; padding: 10px 24px;' />
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="longstring" value="{{$longString}}">
</form>

<a href="{{url('/home')}}"  style='background-color:#337AB7; color: white; border:none; padding: 10px 24px; position:relative; bottom: 2.7em; left: 40em;'>Home</a>

<style>
    #styleit{
        border-style: solid;
        border-width: 4px;
        width: 50%;
    }

</style>

<?php



echo "<html>";
echo '<div id="styleit">';
echo "$longString";
echo '</div>';
echo "</html>";
