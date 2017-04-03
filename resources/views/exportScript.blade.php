<?php

// script that translates the page into a word document

$longString = $_POST["longstring"];



header("Content-Type: application/vnd.msword");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("content-disposition: attachment;filename=bibliography.doc");


echo "<html>";
echo '<div id="styleit">';
echo "$longString";
echo '</div>';
echo "</html>";


?>


