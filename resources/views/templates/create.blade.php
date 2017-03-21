<!-- app/views/nerds/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Add Template</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Helvetica, Arial;
        }
        section {
            padding-bottom: 2em;
            border-bottom: 5px dashed black;
        }
        .fakeInput {
            border:1px solid lightgrey;
            border-radius: 6px;
            margin-bottom: 1em;
            padding: .5em;
        }
        .tag {
            background: white;
            border:1px solid darkgrey;
            display: inline-block;
            padding:.25em .5em;
            font-size: 1em;
        }

        .dragging {
            opacity: .4;
        }

        .token {
            padding:5px;
            border: solid;
            border-width:1px;
            border-color:lightgrey;
            border-radius:4px;
            margin-top:80px;
            line-height: 200%;
        }

        .placeholder {
            background: lightblue;
        }

        .popover {
            display:none;
            position: absolute;
            border: 1px solid lightgrey;
            width: 100%;
            top: 100%;
        }

        .at-ing .popover {
            display: block;
        }

        .popover .tag {
            display: block;
            width: 100%;
            border-width: 0;
            text-align: left;
        }

        .popover .tag + .tag {
            border-top-width: 1px;
        }

        .popover .tag.active,
        .popover .tag:hover {
            background: lightblue;
        }

        .fakeInputWrap {
            position: relative;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<section class="type2add">
    <h1>Type the @ Symbol to Add a Book Attribute</h1>
    <div class="fakeInputWrap">
        <div class="fakeInput" contenteditable="true"></div>
        <div class="popover">
            <button class="tag"><data></data></button>
            <button class="tag"><data>Author First Name</data></button>
            <button class="tag"><data>Author Last Name</data></button>
            <button class="tag"><data>Title</data></button>
            <button class="tag"><data>Code Number</data></button>
            <button class="tag"><data>Publisher</data></button>
            <button class="tag"><data>Illustrator First Name</data></button>
            <button class="tag"><data>Illustrator Last Name</data></button>


            <div class="tag" draggable="true"><i>Start Italics</i></div>
            <div class="tag" draggable="true"><i>End Italics</i></div>
            <div class="tag" draggable="true"><b>Start Bold</b></div>
            <div class="tag" draggable="true"><b>End Bold</b></div>
            <div class="tag" draggable="true"><u>Start Underline</u></div>
            <div class="tag" draggable="true"><u>End Underline</u></div>


        </div>
    </div>
</section>
<section class="dnd" style="visibility:hidden;">
    <h1>Drag and Drop</h1>
    <div class="fakeInput" contenteditable="true"></div>
    <div class="tag" draggable="true"></div>
    <div class="tag" draggable="true"></div>
    <div class="tag" draggable="true"></div>
    <div class="tag" draggable="true"></div>
    <div class="tag" draggable="true">D</div>
</section>
<!--Use regex to grab everything inside the fakeInput Class-->
<!--Data tags on everything but italics/bold/underline-->
<!--Regex<span>(.|\n)*?<\/span>-->
<script>
    function getContent(){
        console.log("I assign a value to the hidden input! ");
        document.getElementById("hiddenValue").value = "Content String works!";
    }

    function handleDragStart(e) {
        this.classList.add('dragging');
        e.dataTransfer.setData('text/plain', this.innerText);
    }

    function handleDrop(e) {
        // this / e.target is current target element.
        if (e.stopPropagation) {
            e.stopPropagation(); // stops the browser from redirecting.
        }

        // See the section on the DataTransfer object.
        e.preventDefault();
        var data = e.dataTransfer.getData("text");
        var token = document.createElement('span');
        token.setAttribute('contenteditable', false);
        token.classList.add('token');
        token.innerText = data;
        e.target.appendChild(token);
        e.target.innerHTML += '&nbsp;';
        e.dataTransfer.clearData();
        return false;
    }

    function handleDragEnd(e) {
        // this/e.target is the source node.

        [].forEach.call(dndTags, function (tag) {
            tag.classList.remove('dragging');
        });
        dndInput.classList.remove('over');
    }

    function handleDragEnter(e) {
        // this / e.target is the current hover target.
        this.classList.add('over');
    }

    function handleDragLeave(e) {
        this.classList.remove('over');  // this / e.target is previous target element.
    }

    var dndTags = document.querySelectorAll('.dnd .tag');
    [].forEach.call(dndTags, function(tag) {
        tag.addEventListener('dragstart', handleDragStart, false);
        tag.addEventListener('dragend', handleDragEnd, false);
    });

    var dndInput = document.querySelector('.dnd .fakeInput');
    dndInput.addEventListener('dragenter', handleDragEnter, false);
    dndInput.addEventListener('drop', handleDrop, false);
    dndInput.addEventListener('dragleave', handleDragLeave, false);


    /* Click to add */
    function handleClick(e, theInput){
        var token = document.createElement('span');
        token.setAttribute('contenteditable', false);
        token.classList.add('token');
        token.innerText = this.innerText;
        theInput.appendChild(token);
        theInput.innerHTML += '';
        //theInput.innerHTML += '&nbsp;';
        return false;
    }

    var tags = document.querySelectorAll('.click2add .tag');
    [].forEach.call(tags, function(tag) {
        tag.addEventListener('click', function(e) { handleClick.call(this, e, click2addInput); } , false);
    });

    var click2addInput = document.querySelector('.click2add .fakeInput');

    /* type to add */
    function handlePress(e){
        if (e.shiftKey && e.which === 64) {
            // open autocomplete
            type2addInput.parentElement.classList.add('at-ing');
            type2addInput.isAting = true;
        }
        if(type2addInput.isAting) {
            type2addTags[0].classList.add('active');
        }
    }

    var type2addInput = document.querySelector('.type2add .fakeInput');
    var type2addPopover = document.querySelector('.type2add .popover');
    type2addInput.addEventListener('keypress', handlePress, false);
    type2addInput.isAting=false;

    var type2addTags = document.querySelectorAll('.type2add .tag');
    [].forEach.call(type2addTags, function(tag) {
        tag.addEventListener('click', function(e) {
            handleClick.call(this, e, type2addInput);
            type2addInput.parentElement.classList.remove('at-ing');
            type2addInput.innerHTML = type2addInput.innerHTML.replace('@','');
        } , false);
    });
</script>

<div class ="container">
    <form method="post" action="{{url('/templates')}}">
        {{ csrf_field() }}
        <div class="col-sm-6 form-group">
            <label>Template Name</label>
            <input type="text" name="tname"  class="form-control">
            <input type="hidden" name="content" id="hiddenValue">
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Add Template" onclick="getContent()">
    </form>
</div>

</body>
</html>
