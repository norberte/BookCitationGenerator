<!-- This was just a mock page to test updating entries in the database -->

@extends('layouts/master')

@section('content')
        <h1>Edit book</h1>


        <form method="POST" action="http://127.0.0.1:8000/books/edit">
                {{ csrf_field() }}

                <div class="form-group">
                        <label for="bid">bid</label>
                        <input type="text" class="form-control" id="bid" name="bid">

                        <label for="title">title</label>
                        <input type="text" class="form-control" id="title" name="title">

                        <label for="codeNum">codeNum</label>
                        <input type="text" class="form-control" id="codeNum" name="codeNum">
                    </div>

                <button type="submit" class="btn btn-primary">Submit Change</button>
                </div>


                </div>



           </form>

@endsection