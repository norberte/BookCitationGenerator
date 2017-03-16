<!-- app/views/nerds/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Template</title>

</head>
<body>
<div class="container">
<p>Mock front end</p>
    <form id="mainForm" method="POST" action="http://localhost/bookcat/public/templates">
        <input name="template[0][attr]" value="john" />
        <input name="template[0][attrStyle]" value="smith" />
        <input name="template[0][keyword]" value="jane" />
        <input name="template[0][keywordStyle]" value="jones" />
    </form>


    <input type='hidden' name='input_name' value="<?php echo htmlentities(serialize($array_name)); ?>" />

    $passed_array = unserialize($_POST['input_name']);
</div>
</body>
</html>