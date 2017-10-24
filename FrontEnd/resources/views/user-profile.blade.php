@extends('template.header')

@section('content')
        <!-- property area -->
        <div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 profiel-container">
                        @if(Session::has('message'))
                        <div class="alert alert-success">Updated completely!</div>
                        @endif
                            @foreach($profile as $getProfile)
                        <form action="/upProfile/@if($getProfile[0]!=null){{$getProfile[0]->userID}}@endif" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            {{--<input type="hidden" name="_method" value="PUT">--}}
                            <input type="hidden" name="token" value="{{Session::get('user.token')}}">
                            <input type="hidden" name="oldPicture" value="@if($getProfile[0]!=null){{$getProfile[0]->avatar}}@endif">
                            <div class="profiel-header">
                                <h3>
                                    <b>BUILD</b> YOUR PROFILE <br>
                                    <small>This information will let us know more about you.</small>
                                </h3>
                                <hr>
                            </div>

                            <div class="clear">
                                <div class="col-sm-3 col-sm-offset-1">
                                    <div class="picture-container">
                                        <div class="picture">
                                            <img src="@if($getProfile[0]->avatar!=null){{$getProfile[0]->avatar}}@else{{asset('img/avatar.png')}}@endif" class="picture-src" id="wizardPicturePreview" title=""/>
                                            <input type="file" id="wizard-picture" name="picture" accept="image/*">
                                        </div>
                                        <h6>Choose Picture</h6>
                                    </div>
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    {{--<div class="form-group">--}}
                                        {{--<label>First Name <small>(required)</small></label>--}}
                                        {{--<input name="firstname" type="text" class="form-control" placeholder="Hiếu">--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input name="fullname" type="text" class="form-control" value="@if($getProfile[0]!=null){{$getProfile[0]->fullname}}@endif" placeholder="Full name">
                                    </div> 
                                    <div class="form-group">
                                        <label>Age</label>
                                        <input name="age" type="text" class="form-control" value="@if($getProfile[0]!=null){{$getProfile[0]->age}}@endif" placeholder="Age">
                                    </div> 
                                    {{--<div class="form-group">--}}
                                        {{--<label>Address</label>--}}
                                        {{--<input name="address" type="text" class="form-control" value="" placeholder="Phone">--}}
                                    {{--</div>--}}
                                    <label>Rating:</label>
                                    <label>@if($getProfile[0]!=null){{$getProfile[0]->rating}}@endif</label>
                                    <input type="hidden" name="rating" value="@if($getProfile[0]!=null){{$getProfile[0]->rating}}@endif">
                                </div>
                                <div class="col-sm-3 padding-top-25">
                                    {{--<div class="form-group">--}}
                                        {{--<label>Password <small>(required)</small></label>--}}
                                        {{--<input name="Password" type="password" class="form-control">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label>Confirm password : <small>(required)</small></label>--}}
                                        {{--<input type="password" class="form-control">--}}
                                    {{--</div>--}}
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input type="text" class="form-control" name="phone" value="@if($getProfile[0]!=null){{$getProfile[0]->phone}}@endif" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Address </label>
                                        <input type="text" class="form-control" name="address" value="@if($getProfile[0]!=null){{$getProfile[0]->address}}@endif" placeholder="Address">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-9 col-sm-offset-1">
                                <br>
                                <input type='submit' class='btn btn-finish btn-primary pull-right' name='Submit' value='submit' />
                            </div>
                            <br>
                    </form>
                @endforeach
                </div>
            </div><!-- end row -->

        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#wizard-picture').change(function () {
                var val = $('#wizard-picture').val();
                if(val!==null){
                    console.log(val);
                    $('#wizardPicturePreview').attr('src',val);
                }
            })
        })
    </script>
@endsection