<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Update Location</title>
</head>
<body>
<div class="container">
    <form action="/location/updated/{{$req->locationID}}" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" name="txtLocationName"
                   placeholder="Location Name..." value="{{$req->locationName}}">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="filePicture"
                   placeholder="Picture..." accept="image/*">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="oldPicture" value="{{$req->picture}}" readonly="readonly">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="txtDescription"
                   placeholder="Description..." value="{{$req->description}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="txtMap"
                   placeholder="Map..." value="{{$req->map}}">
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" name="btnSubmit" class="btn btn-success" value="Submit">

    </form>
</div>
</body>
</html>
