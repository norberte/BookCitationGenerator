<?php
//retrieves the templatename from Javascript
$templateName = $_POST["templatename"];
//routes to the location where the template name will get deleted from the database
header("Location: ". url('/templates/delete/'.$templateName));
exit();
