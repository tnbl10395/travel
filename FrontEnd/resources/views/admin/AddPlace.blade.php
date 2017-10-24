@extends('admin.template.app')
@section('title')
    <title>Place - Admin page</title>
@endsection
@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Managements</a>
            </li>
            <li class="breadcrumb-item active">Place</li>
        </ol>
        <div class="card mb-3">
            <div class="card-body">
                <div class="table-responsive">
                    @if(Session::has('message'))
                        <div class="alert alert-success">Place is added successfully!</div>
                    @endif
                    <form method="post" action="/admin/place-added" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group">
                            <h5 for="location">Location</h5>
                            <select name="location" class="form-control" id="location">
                                @if($listLocation!=null)
                                    @foreach($listLocation as $objectLocation)
                                        <option value="0{{$objectLocation->locationID}}">{{$objectLocation->districtName}}</option>
                                    @endforeach
                                 @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <h5 for="category">Category</h5>
                            <select name="category" class="form-control" id="category" required>
                                @if($listCategory!=null)
                                    <option></option>
                                    @foreach($listCategory as $objectCategory)
                                        <option value="{{$objectCategory->categoryID}}%{{$objectCategory->categoryName}}">{{$objectCategory->categoryName}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group">
                            <h5>Place Name</h5>
                            <input type="text" class="form-control" name="placeName" placeholder="Place Name" required>
                        </div>
                        <div class="form-group">
                            <h5>Address</h5>
                            <input type="text" class="form-control" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group" id="point">
                            <h5>Map</h5>
                            <input type="text" class="form-control" name="map" placeholder="Map" required>
                        </div>
                        <div class="form-group">
                            <h5>Description</h5>
                            <input type="text" class="form-control" name="description" placeholder="Description" required>
                        </div>
                        <div class="form-group">
                            <h5>Detail</h5>
                            <textarea style="height: 250px;" class="form-control" name="detail" required></textarea>
                        </div>
                        <div class="form-group">
                            <h5>Picture</h5>
                            <input type="file" name="picture1" class="form-control" required>
                            <input type="file" name="picture2" class="form-control" required>
                            <input type="file" name="picture3" class="form-control" required>
                            <input type="file" name="picture4" class="form-control" required>
                        </div>
                        <input type="submit" class="btn btn-success pull-right" name="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
           $('#category').change(function () {
              var val = $('#category').val();
              $('.inputsPlus').remove();
              if(val!==null){
                  $.ajax({
                     url: '/admin/place-get/'+val,
                     type: 'get',
                      success:function (result) {
//                         console.log(result);
                          result.splice(0,1);
                          $.each(result, function (key,item) {
                              console.log(item);
                             var html  = '';
                                 html += '<div class="form-group inputsPlus" id="inputPlus">';
                                 html += '<h5>';
                                 html += item;
                                 html += '</h5>';
                                 html += '<input type="text" class="form-control" name="'+item+'" placeholder="'+item+'">';
                                 html += '</div>';
                                 $('#point').after(html);
                          });
                      }
                  });
              }
           });
        });
    </script>
@endsection
{{--<div class="form-group">--}}
    {{--input plus--}}
    {{--<h5></h5>--}}
    {{--<input type="text" class="form-control" name="" placeholder="">--}}
{{--</div>--}}