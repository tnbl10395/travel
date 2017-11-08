@extends('template.header')
@section('content')

        <p class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <p id="id-100" class="post single">
                            <div class="post-header single">
                                <div class="">
                                    @if($onePlace!=null)
                                    <h2 class="wow fadeInLeft animated" style="font-weight: bold;color: #FDC600;">{{$onePlace->placeName}}</h2>
                                    @endif
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                                <br>
                                <div class="row wow fadeInRight animated">

                                    <div class="bigstars col-sm-6">   
                                            <div class="rateit" data-rateit-value="@if($onePlace!=null){{$onePlace->rating}}@endif" data-rateit-mode="font" data-rateit-readonly="true" ></div>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            @if($onePlace!=null)
                                            <a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>   {{$onePlace->updated_at}}</a>
                                            @endif
                                            @if($count==null)
                                            <a href="javascript:void(0);"><i class="fa fa-comment-o"></i>  No Comments</a>
                                            @else
                                            <a href="javascript:void(0);"><i class="fa fa-comment-o"></i>  {{$count}} Comments</a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <br>
                            <div>
                                <div class="single-property-content prp-style-2">
                                    <div class="row">
                                        <div class="light-slide-item col-sm-8">            
                                            <div class="clearfix">
                                                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                    @if($getImage!=null)
                                                        @foreach($getImage as $image)
                                                        <li data-thumb="{{$image->imageName}}">
                                                            <img style="max-height: 500px; max-width: 1000px;" src="{{$image->imageName}}" />
                                                        </li>
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="dealer-widget col-sm-4">

                                            {{--<div id="mymap" style=" margin-left : 6px; width: 365px; height: 460px;"></div>--}}


                                            <div id="mymap" style=" margin-left : 1px; width: 375px; height: 446px;"></div>
                                            

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p id="post-content" class="post-body single wow fadeInLeft animated">
                                <p style="font-size: 17px;">
                                    @if($onePlace!=null)
                                        {{$onePlace->detail}}
                                    @endif
                                <h4>More Information</h4>
                                <ul>
                                    @if($moreInfo!=null)
                                        @foreach($moreInfo as $key => $value)
                                        <li><p>{{$key}}: {{$value}}</p></li>
                                        @endforeach
                                    @endif
                                </ul>
                                @if(Session::has('user'))
                                <h3>Please vote</h3>
                                <p class="author-category">
                                    Rating:
                                    <div class="rateit" id="rateit6" data-rateit-value="@if($rating!=null){{$rating[0]->rating}}@else{{0}}@endif" data-rateit-mode="font" data-rateit-min="0"></div>
                                @endif


                        <section id="comments" class="comments wow fadeInRight animated">
                            @if($count!=null)
                                <h4 class="text-uppercase wow fadeInLeft animated">{{$count}} comments</h4>
                            @else
                                <h4 class="text-uppercase wow fadeInLeft animated">No comments</h4>
                            @endif
                            @if($getComment!=null)
                                @foreach($getComment as $listComment)
                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src="{{$listComment->avatar}}" class="img-responsive img-circle" alt="">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">{{$listComment->fullname}}</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> {{$listComment->updated_at}}</p>
                                    <p>{{$listComment->content}}</p>
                                    <div class="col-sm-6">
                                        <div class="col-sm-4" id="divlike">
                                            <span class="like1 col-sm-1">{{$listComment->amountOfLike}}</span>
                                            <input type="hidden" id="amountLike" value="{{$listComment->amountOfLike}}">
                                            <a id="like" href="javascript:void(0);" style="color: #8B8989"><i class="fa fa-thumbs-up"></i> Like</a>
                                        </div>
                                        <div class="col-sm-4">
                                            <span class="dislike1 col-sm-1">{{$listComment->amountOfDisLike}}</span>
                                            <input type="hidden" id="amountDisLike" value="{{$listComment->amountOfDisLike}}">
                                            <a id="dislike" href="javascript:void(0);" style="color: #8B8989"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                             @endif
                        </section>
                        @if(Session::has('user'))
                        <section id="comment-form" class="add-comments">
                            <form class="" action="/comment" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" id="token" name="token" value="{{Session::get('user.token')}}">
                            <input type="hidden" id="placeID" name="placeID" value="@if($onePlace!=null){{$onePlace->placeID}}@endif">
                            <h4 class="text-uppercase wow fadeInLeft animated">Leave comment</h4>
                                <textarea name="content" class="form-control" style="height: 150px;"></textarea>
                                <br>
                                <div class="row wow fadeInLeft animated">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Post comment</button>
                                    </div>
                                </div>
                            </form>
                            <!-- </form> -->
                        </section>
                        @endif
                    {{--</div>                                 --}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
@endsection
@section('script')
<script>
            $(document).ready(function () {
                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 1500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
//                $('#txtedit').Editor();
                $("#rateit6").bind('rated', function (event, value) {
                    console.log(event);
                    var token = $('#token').val();
                    var placeID = $('#placeID').val();
                    $.ajax({
                        url: '/evaluate',
                        type: 'get',
                        data:{
                          'token' : token,
                          'placeID' : placeID,
                          'rating' : value
                        },
                        success:function (result) {
                            value.rateit = result;
                        }
                    });
                });
                var like = parseInt($('#amountLike').val());
                var dislike = parseInt($('#amountDisLike').val());
                    $('#like').on('click',function (e) {
                        ++like;
                        $('.like1').remove();
                        $('#amountLike').before('<span class="like1 col-sm-1">'+like+'</span>');
                        $('#like').css('color','BLUE');
                        --dislike;
                        $('.dislike1').remove();
                        $('#amountDisLike').before('<span class="dislike1 col-sm-1">'+dislike+'</span>');
                        $('#dislike').css('color','BLACK');

                    });
                    $('#dislike').on('click',function (e) {
                        ++dislike;
                        $('.dislike1').remove();
                        $('#amountDisLike').before('<span class="dislike1 col-sm-1">'+dislike+'</span>');
                        $('#dislike').css('color','BLUE');
                        --like;
                        $('.like1').remove();
                        $('#amountLike').before('<span class="like1 col-sm-1">'+like+'</span>');
                        $('#like').css('color','BLACK');
                    });
            });
</script>
<script async defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0dZtFV8duB7TVyioYcv31LUH5nJdaGJ4"></script>
<script type="text/javascript">

    function initMap() {
        var map, infoWindow;

//        map = new google.maps.Map(document.getElementById('mymap'), {
//            center: {lat: 16.062, lng: 108.152},
//            zoom: 13,
//            mapTypeId: google.maps.MapTypeId.ROADMAP
//        });
        infoWindow = new google.maps.InfoWindow;

        //get location destination
        var locations = <?php print_r(json_encode($address)) ?>;
        var way = locations[0].waypoint;
        var dlat = (way.split(",",2))[0];
        var dlng = (way.split(",",2))[1];

        var pointB = new google.maps.LatLng(dlat,dlng );

        // Try HTML5 geolocation.

        if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
        pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
        };

        // infoWindow.setPosition(pos);
        // infoWindow.setContent("you are here");
        // infoWindow.open(map);
        //map.setCenter(pos);



        //tao duong di

        var pointA = new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
        myOptions = {
        zoom: 13,
        center: pointA
        },
        map = new google.maps.Map(document.getElementById('mymap'), myOptions),
        // Instantiate a directions service.
        directionsService = new google.maps.DirectionsService,
        directionsDisplay = new google.maps.DirectionsRenderer({
        map: map
        });
        // markerA = new google.maps.Marker({
        // position: pointA,
        // title: "point A",
        // map: map
        // }),
        // markerB = new google.maps.Marker({
        // position: pointB,
        // title: "point B",
        // map: map
        // });

        // get route from A to B
        calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

        }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
        }	);

        } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
        }



        }



        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
        }

        //ham tinh khoang cach va hien thi map
        function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
        directionsService.route({
        origin: pointA,
        destination: pointB,
        avoidTolls: true,
        avoidHighways: false,
        travelMode: google.maps.TravelMode.DRIVING
        }, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        } else {
        window.alert('Directions request failed due to ' + status);
        }
        });

    }

    initMap();


</script>
@endsection