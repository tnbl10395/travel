    @extends('template.header')

@section('content')

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="{{asset('img/slide1/slider-image-2.jpg')}}" alt="GTA V"></div>
                    <div class="item"><img src="{{asset('img/slide1/slider-image-2.jpg')}}" alt="The Last of us"></div>
                    <div class="item"><img src="{{asset('img/slide1/slider-image-2.jpg')}}" alt="GTA V"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-sm-12">
                        <h2 id="test_bla">Danang - The Livable City</h2>
                        <p></p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="/search" method="post" class="form-inline">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="form-group">                                   
                                    <select id="lunchBegins" name="location" class="selectpicker" title="Select your location">
                                        {{--<option>Please select Locations</option>--}}
                                        @if($listLocation!=null)
                                            @foreach($listLocation as $objectLocation)
                                                <option value="0{{$objectLocation->locationID}}">{{$objectLocation->districtName}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="search" class="form-control" placeholder="Search your favoroute place!">
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Top Place</h2>
                        <p> </p>
                    </div>
                </div>
                <div class="row">
                    <div class="proerty-th">
                        @if($listTopPlace!=null)
                            @foreach($listTopPlace as $topPlace)
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="/detail-place/{{$topPlace->placeID}}" ><img src="{{$topPlace->imageName}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h6><a href="/detail-place/{{$topPlace->placeID}}" >{{$topPlace->placeName}}</a></h6>
                                    <div class="dot-hr"></div>
                                    <div class="bigstars col-sm-6">
                                        <div class="rateit" data-rateit-value="{{$topPlace->rating}}" data-rateit-mode="font" data-rateit-readonly="true" ></div>
                                    </div>
                                    {{--<span class="proerty-price pull-right">8 <i class="fa fa-comment-o" aria-hidden="true"></i></span>--}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
        <!--TESTIMONIALS -->
        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Our Team  </h2> 
                    </div>
                </div>

                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>"Kiên nhẫn là yếu tố quan trọng của thành công"</p>
                                        <h4><strong>Phong Lê, </strong><i>Project Manager</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight"> 
                                        <img src="{{asset('img/client-face1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>"Cuộc sống vốn không công bằng. Hảy tập quen dần với điều đó"</p>
                                        <h4><strong>Hiếu Lê, </strong><i>Frontend</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="{{asset('img/client-face2.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>"Thước đo của cuộc đời không phải thời gian mà là sự cống hiến"</p>
                                        <h4><strong>Long Trần, </strong><i>Backend</i></h4>
                                    </div>
                                    <div class="client-face">
                                        <img src="{{asset('img/client-faceLong.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection