<h2>Enter Details</h2><br>

<form action="/contacts" method="POST" class="form">

    <div class="col-md-4">
        <label>Subject</label>
        <input class="form-control col" type="text" name="subject" id="subject"><br>
    </div>

    <div class="col-md-4">
        <label>Email</label>
        <input class="form-control col" type="text" name="email" id="email"><br>
    </div>

    <div class="col-md-4">
        <label>Body</label>
        <textarea class="form-control" name="body"></textarea><br>
    </div>
   

    <input class="btn btn-primary" type="submit" value="submit">
    
</form>