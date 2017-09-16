<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Insert Location</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <form action="/location/insert/obj" method="POST">
            <div class="form-group">
                <input type="text" class="form-control" name="txtLocationName" placeholder="Location Name...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtPicture" placeholder="Picture...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtDescription" placeholder="Description...">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="txtMap" placeholder="Map...">
            </div>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" name="btnSubmit" class="btn btn-success" value="Submit">

        </form>
    </div>
</body>
</html>
