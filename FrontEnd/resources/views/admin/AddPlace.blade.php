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
                        <div class="form-group"  >
                            <h5>Address</h5>
                            <input type="text" id = "address" class="form-control" name="address" placeholder="Address" onchange="initMap();" required>
                        </div>
                        <script async defer src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDOiNCULeeGLt_n_J6smNM_5xX7gf_YoXA&callback=initMap"></script>
                        <script async >
                            function initMap() {

                                <!-- var map = new google.maps.Map(document.getElementById('map'), { -->
                                <!-- zoom: 13, -->
                                <!-- center: {lat: -34.397, lng: 150.644} -->
                                <!-- }); -->
                                var geocoder = new google.maps.Geocoder();
                                    if(document.getElementById('address').value){

                                        geocodeAddress(geocoder);
                                    }else {

                                        return;
                                    }
                            }
                            function geocodeAddress(geocoder) {
                                var address = document.getElementById('address').value;
                                var point;
                                geocoder.geocode({'address': address}, function(results, status) {
                                    if (status === 'OK') {
                                        //point = results[0].geometry.location.lat();
                                        if(results[0]){
                                            point = (results[0].geometry.location.lat()) + ',' + (results[0].geometry.location.lng());
                                            //alert(point);
                                            document.getElementById('waypoint').value = point ;
                                        }else{
                                            alert('Can not find your address');
                                        }

                                    } else {
                                        alert('Can not find your address: ' + status);

                                    }
                                });
                            }
                        </script>
                        <div class="form-group" >
                            <input type="hidden" id="waypoint" class="form-control" name="waypoint"  placeholder="Waypoint" required >
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
                        <input type="submit" id = "submit" class="btn btn-success pull-right" name="submit" value="Submit">
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
                                 $('#waypoint').after(html);
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