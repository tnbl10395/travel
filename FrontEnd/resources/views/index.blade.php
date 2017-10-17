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
                        <h2 id="test_bla">Searching Just Got So Easy</h2>
                        <p></p>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="" class="form-inline">
                                <div class="form-group">                                   
                                    <select id="lunchBegins" class="selectpicker" title="Select your location">

                                        <option>Ngũ Hành Sơn</option>
                                        <option>Liên Chiểu</option>
                                        <option>Hải Châu</option>
                                        <option>Hòa Vang</option>
                                        <option>Sơn Trà</option>
                                        <option>Thanh Khê</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="TouristAttractions">
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i>
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
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('img/demo/property-1.jpg')}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Furama Resort DN </a></h5>
                                    <div class="dot-hr"></div>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">8 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-2.html" ><img src="{{asset('img/demo/property-2.jpg')}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-2.html" >Sơn Tra Resort & Spa</a></h5>
                                    <div class="dot-hr"></div>

                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">10 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="{{asset('img/demo/property-3.jpg')}}"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-3.html" >MELIA Đa Nang </a></h5>
                                    <div class="dot-hr"></div>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">20 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('img/demo/property-4.jpg')}}"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >NOVOTEL </a></h5>
                                    <div class="dot-hr"></div>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">10 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-3.html" ><img src="{{asset('img/demo/property-2.jpg')}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-3.html" >My Quang Ech </a></h5>
                                    <div class="dot-hr"></div>
                                   <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">15 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-2.html" ><img src="{{asset('img/demo/property-4.jpg')}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-2.html" >Ba na Hill </a></h5>
                                    <div class="dot-hr"></div>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">30 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="{{asset('img/demo/property-3.jpg')}}"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="property-1.html" >Asian Park </a></h5>
                                    <div class="dot-hr"></div>

                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span class="proerty-price pull-right">9 <i class="fa fa-comment-o" aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-tree more-proerty text-center">
                                <div class="item-tree-icon">
                                    <a href="locations" ><i class="fa fa-th"></i></a>
                                    
                                </div>
                                <div class="more-entry overflow">
                                    <h5><a href="locations" >CAN'T DECIDE ? </a></h5>
                                    <h5 class="tree-sub-ttl">Show all </h5>
                                    <button class="btn border-btn more-black" value="All properties">All</button>
                                </div>
                            </div>
                        </div>

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
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
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