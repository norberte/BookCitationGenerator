

    <h3 id="padding">Add HTML String</h3><p>&nbsp;</p>


    <div class="col-sm-4 form-group" id="float_this">
        <form action="http://localhost/bookcat/public/output" method="post">
            {{ csrf_field() }}
            <label>Enter String:</label>
            <textarea name="title" class="form-control"> </textarea><br>

            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">
        </form>
    </div>

    <style>
        #padding{
            margin-left: 40px;
        }
    </style>


