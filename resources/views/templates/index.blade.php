<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Templates</title>
</head>
<body>
<div class="container">
    <h1>All the Nerds</h1>
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>Attr</td>
            <td>AttrStyle</td>
            <td>Keyword</td>
            <td>KeywordStyle</td>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $value)
            <tr>
                <td>{{ $value->attr }}</td>
                <td>{{ $value->attrStyle }}</td>
                <td>{{ $value->keyword}}</td>
                <td>{{ $value->keywordStyle }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>