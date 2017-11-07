@extends('admin.template.app')
@section('title')
    <title>Home Admin page</title>
@endsection
@section('content')
<div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Managements</a>
            </li>
            <li class="breadcrumb-item">
                <a href="/admin/location-index">Location</a>
            </li>
            <li class="breadcrumb-item active">Edit Locations</li>
        </ol>
@if($location!=null)
    @foreach($location as $objectLocation)
            <form id="formupdateLocation" method="post" action="/admin/location-edit/0{{$objectLocation->locationID}}" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                    <h4 class="modal-tittle">UPDATE LOCATION</h4>
                </div>
                <div class="modal-body" style="margin: 10px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h7 style="font-size:16px; margin-top:5px;"><b>Thành Phố</b></h7>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <select class="form-control" id="selectCity" name="cityID">
                                            @if($listCity!=null)
                                                @foreach($listCity as $objectCity)
                                                    <option value="0{{$objectCity->cityID}}">{{$objectCity->cityName}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="control-label col-sm-4">
                                    <h7 style="margin-left:20px; font-size:16px; margin-top:5px;"><b>Quận/Huyện</b></h7>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input type="hidden" id="getDistrict" value="{{$objectLocation->districtID}}">
                                        <select class="form-control" id="selectDistrict" name="districtID">
                                            @if($listDistrict!=null)
                                                @foreach($listDistrict as $objectDistrict)
                                                    <option value="0{{$objectDistrict->districtID}}">{{$objectDistrict->districtName}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="control-label col-sm-2">
                            <h7 style="font-size:16px;"><b>Description</b></h7>
                        </div>
                        <div class="col-sm-10">
                            <textarea rows="5" class="form-control" name="description" id="description">{{$objectLocation->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="updateLocation"><b>Upload Picture</b></label>
                    </div>
                    <div class="row" style="margin-left:5px;">
                        <input type="file" name="picture" id="addLocationFile" class="form-control col-sm-5">
                        <img id="picture" src="{{$objectLocation->picture}}" style="height: 150px;" class="col-sm-6">
                        <input type="hidden" name="oldPicture" id="picture" value="{{$objectLocation->picture}}">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnupdateLocation" class="btn btn-success btnUpdate" value='Update'>
                </div>
            </form>
    @endforeach
@endif
</div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {

            //set val of district
            var valDistrict = $('#getDistrict').val();
            $('#selectDistrict').val(valDistrict);

            $('#addLocationFile').change(function () {
                readURL(this);
            });
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#picture').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
    </script>
@endsection