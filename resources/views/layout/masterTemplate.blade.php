<!DOCTYPE html>
<html lang="en">
<head>
  <!--
Yields a specific title for a specific page that extends master By Andry 03/16/2017
-->
  <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        th{
            text-align: center;
        }
    </style>

    <script>
        function getContent(){
            document.getElementById("hiddenValue").value = document.getElementById("content").value;
        }
        function insertAtCaret(text) {
            var txtarea = document.getElementById("content");
            if (!txtarea) { return; }

            var scrollPos = txtarea.scrollTop;
            var strPos = 0;
            var br = ((txtarea.selectionStart || txtarea.selectionStart == '0') ?
                "ff" : (document.selection ? "ie" : false ) );
            if (br == "ie") {
                txtarea.focus();
                var range = document.selection.createRange();
                range.moveStart ('character', -txtarea.value.length);
                strPos = range.text.length;
            } else if (br == "ff") {
                strPos = txtarea.selectionStart;
            }

            var front = (txtarea.value).substring(0, strPos);
            var back = (txtarea.value).substring(strPos, txtarea.value.length);
            txtarea.value = front + text + back;
            strPos = strPos + text.length;
            if (br == "ie") {
                txtarea.focus();
                var ieRange = document.selection.createRange();
                ieRange.moveStart ('character', -txtarea.value.length);
                ieRange.moveStart ('character', strPos);
                ieRange.moveEnd ('character', 0);
                ieRange.select();
            } else if (br == "ff") {
                txtarea.selectionStart = strPos;
                txtarea.selectionEnd = strPos;
                txtarea.focus();
            }

            txtarea.scrollTop = scrollPos;
        }
    </script>
</head>
<body>
<!---
navigation links
-->

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/home')}}">BooKStrap</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Book <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/books/create')}}">Add Book</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage Template <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/templates')}}">View Templates</a></li>
                        <li><a href="{{url('/templates/create')}}">Add Template</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Book Collection <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/bookcollections')}}">View Collections</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/changePassword')}}">Change Password</a></li>
                        <li><a href="{{ url('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-in"></span>
                                Logout
                            </a></li>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </li>
            </ul>



        </div>
    </div>
</nav>


<div class="container">
    <!--
    pastes a specific sections code here. I am breaking the code up so it is easier to maintain and manage.  By Andry 03/16/2017
    -->
    @section('content')
    @show

</div>


</body>
</html>