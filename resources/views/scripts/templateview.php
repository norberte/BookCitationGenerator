<?php

include 'C:\xampp\htdocs\bookcat\app\Http\Controllers\TemplateController.php';

    //retrieves the template edit/select/view/delete from javascript
    $delete = $_POST["fieldname"];

    //retrieves the templatename
    $templatename = $_POST["templatename"];


if ($delete == 'delete'){
    destroy($templatename);
}




