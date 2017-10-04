@extends('template.header')

@section('content')

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Welcome Hải Châu </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="row">
                            <div class="light-slide-item">            
                                <div class="clearfix">
                                    

                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                        
                                        <li data-thumb="{{asset('img/property-1/property2.jpg')}}"> 
                                            <img src="{{asset('img/property-1/property3.jpg')}}" />
                                        </li>
                                                                               
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="single-property-wrapper">
                            <!-- <div class="single-property-header">                                          
                                <h1 class="property-title pull-left">Villa in Coral Gables</h1>
                                
                            </div>

                            <div class="property-meta entry-meta clearfix ">    

                                <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                                    <span class="property-info-icon icon-bed">
                                        <img src="{{asset('img/icon/cars-orange.png')}}">
                                    </span>
                                    <span class="property-info-entry">
                                        <span class="property-info-label">Car garages</span>
                                        <span class="property-info-value">1</span>
                                    </span>
                                </div>

                            </div> -->
                            <!-- .property-meta -->

                            <div class="section">
                                <br>
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    <p>Là khu vực trung tâm của thành phố Đà Nẵng,nằm sát với trục giao thông Bắc Nam và của ngỏ ra vào Biển Đông. Với hệ thống hạ tầng phát triển mạnh, cùng với cảng hàng không quốc tế lớn nhất khu vực miền Trung.
                                    Đến nơi đây quý khách sẽ được chiêm ngưỡng những cây cầu nỗi tiếng nhất Đà Nẵng. Bên cạnh đó còn có thể du lịch Asia Park, là khu tổ hợp vui chơi giải trí lớn bậc nhất ở Đà Nẵng, với 3 hạng mục chính là công viên vui chơi giải trí, khu Sun Wheel (vòng quay mặt trời) và khu vui chơi trong nhà. Những trò chơi cực kỳ vui nhộn như bắn banh Sun Blaster, Soft Play, Canival Game…ở khu vui chơi giải trí trong nhà sẽ khiến bạn cảm thấy vô cùng phấn khích.

                                    </p>
                                </div>
                            </div>
                            <div class="section property-video"> 
                                <h4 class="s-property-title">Location Video</h4> 
                                <div class="video-thumb">
                                    <a class="video-popup" href="yout" title="Virtual Tour">
                                        <img src="{{asset('img/property-video.jpg')}}" class="img-responsive wp-post-image" alt="Exterior">            
                                    </a>
                                </div>
                            </div>
                            <!-- End video area  -->
                            
                            

                            <div class="section property-share"> 
                                <h4 class="s-property-title">Share width your friends </h4> 
                                <div class="roperty-social">
                                    <ul> 
                                        <li><a title="Share this on dribbble " href="#"><img src="{{asset('img/social_big/dribbble_grey.png')}}"></a></li>                                         
                                        <li><a title="Share this on facebok " href="#"><img src="{{asset('img/social_big/facebook_grey.png')}}"></a></li> 
                                        <li><a title="Share this on delicious " href="#"><img src="{{asset('img/social_big/delicious_grey.png')}}"></a></li> 
                                        <li><a title="Share this on tumblr " href="#"><img src="{{asset('img/social_big/tumblr_grey.png')}}"></a></li> 
                                        <li><a title="Share this on digg " href="#"><img src="{{asset('img/social_big/digg_grey.png')}}"></a></li> 
                                        <li><a title="Share this on twitter " href="#"><img src="{{asset('img/social_big/twitter_grey.png')}}"></a></li> 
                                        <li><a title="Share this on linkedin " href="#"><img src="{{asset('img/social_big/linkedin_grey.png')}}"></a></li>                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- End video area  -->
                            
                        </div>
                    </div>


                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <img src="{{asset('img/haichau.jpg')}}">
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Detail Location</h3>
                                </div>
                                <div class="panel-body recent-property-widget">
                                        <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="{{asset('img/demo/small-property-2.jpg')}}"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="blog">TouristAttractions </a></h6>
                                                <div class="property-icon">
                                                    <img src="{{asset('img/icon/picine.png')}}">|
                                                    <img src="{{asset('img/icon/cars.png')}}">  
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="{{asset('img/demo/small-property-1.jpg')}}"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="blog">Restaurants </a></h6>
                                                <div class="property-icon">
                                                    <img src="{{asset('img/icon/picine.png')}}">|
                                                    <img src="{{asset('img/icon/cars.png')}}">  
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="{{asset('img/demo/small-property-3.jpg')}}"></a>
                                                <span class="property-seeker">
                                                    <b class="b-1">A</b>
                                                    <b class="b-2">S</b>
                                                </span>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="blog">Hotels </a></h6>
                                                <div class="property-icon">
                                                    <img src="{{asset('img/icon/picine.png')}}">|
                                                    <img src="{{asset('img/icon/cars.png')}}">  
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>                          

                          

                           <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Smart search</h3>
                            </div>
                            <div class="panel-body search-widget">
                                <form action="" class=" form-inline"> 
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" placeholder="Key word">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">

                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your Location">

                                                    <option>Hải Châu</option>
                                                    <option>Liên Chiểu</option>
                                                    <option>Thanh Khê</option>
                                                    <option>Sơn Trà</option>
                                                    <option>Ngũ Hành Sơn</option>
                                                    <option>Hòa Vang</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset >
                                        <div class="row">
                                            <div class="col-xs-12">  
                                                <input class="button btn largesearch-btn" value="Search" type="submit">
                                            </div>  
                                        </div>
                                    </fieldset>                                     
                                </form>
                            </div>
                        </div>


                        </aside>
                    </div>
                </div>

            </div>
        </div>

        <script>
            $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>
@endsection