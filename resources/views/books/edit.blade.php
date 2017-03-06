<!-- This was just a mock page to test updating entries in the database -->

<?php
use App\Book;



@extends('layouts/master')

@section('content')
        <h1>Edit book</h1>


        <!-- this populates the form when you try to edit a book -->

        // change the number next to bid to change which book you are going to edit
        $items = App\Book::where('bid', 2)->get();



    <form method="POST" action="http://localhost/bookcat/public/books/update">
        {{ csrf_field() }}

                <div class="form-group">
                        <label for="bid">bid</label>
                        <input type="text" class="form-control" id="bid" name="bid" value="{{$items[0]['bid']}}">

                        <label for="title">title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$items[0]['title']}}">

                        <label for="codeNum">codeNum</label>
                        <input type="text" class="form-control" id="codeNum" name="codeNum" value="{{$items[0]['codeNum']}}">
                    </div>

                <button type="submit" class="btn btn-primary">Submit Change</button>
                </div>


                </div>

           </form>



@endsection