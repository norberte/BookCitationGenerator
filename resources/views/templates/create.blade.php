<!-- app/views/nerds/create.blade.php -->
<!DOCTYPE html>
<html>
<title>My jQuery JSON Web Page</title>
<head>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript">

        JSONTest = function() {
            json =  [
                {
                    "tname" : "Template 1",
                    'position' : 1,
                    'attribute' : "title",
                    'attributeStyle' : "bold",
                    'keyword' : null,
                    'keywordStyle' : null
                },
                {
                    "tname" : "Template 1",
                    'position' : 2,
                    'attribute' : null,
                    'attributeStyle' : null,
                    'keyword' : ":",
                    'keywordStyle' : null
                }
            ];
            var resultDiv = $("#resultDivContainer");

            $.ajax({
                url: "{{url('/templates')}}",
                type: "POST",
                data: json,
                dataType: "json",
                success: function (result) {
                    switch (result) {
                        case true:
                            processResponse(result);
                            break;
                        default:
                            resultDiv.html(result);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        };

    </script>
</head>
<body>

<h1>My jQuery JSON Data Sending</h1>

<div id="resultDivContainer"></div>

<button type="button" onclick="JSONTest()">JSON</button>

</body>
</html>