<!DOCTYPE html>
    <head>
        <title>Travel | Home page</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="{{asset('css/normalize.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css',true)}}">
        <link rel="stylesheet" href="{{ asset('css/fontello.css',true)}}">
        <link href="{{asset('fonts/icon-7-stroke/css/pe-icon-7-stroke.css',true)}}" rel="stylesheet">
        <link href="{{asset('fonts/icon-7-stroke/css/helper.css',true)}}" rel="stylesheet">
        <link href="{{asset('css/animate.css',true)}}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/icheck.min_all.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/price-range.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/owl.carousel.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/owl.transitions.css',true)}}">
        <link rel="stylesheet" href="{{asset("css/style.css",true)}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/lightslider.min.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/editor.css',true)}}">
        <link rel="stylesheet" href="{{asset('css/rateit.css',true)}}">
    </head>
    <body>
          <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><p>TRAVEL DA NANG</p></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                 @if (!Session::has('user'))
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.location.href='/register'" data-wow-delay="0.45s">Login</button>
                 @elseif (Session::has('user'))
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location.href='/profile/{{Session::get('user.token')}}'" data-wow-delay="0.45s">{{Session::get('user.username')}}</button>
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location.href='/logout'" data-wow-delay="0.45s">Logout</button>
                    @endif
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a href="/" class="">Home</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="/locations">Location</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="/place">Place</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End of nav bar -->

        @yield('content')
        
        <!-- Footer area-->
        <div class="footer-area">

            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>About us </h4>
                                <div class="footer-title-line"></div>

                                <p>TRAVEL DA NANG</p></a>
                                <p><i class="fa fa-copyright"></i> Copyright By Da Nang HLP Team</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i> 54 Nguyen Luong Bang</li>
                                    <li><i class="pe-7s-mail strong"> </i> hieule@gmail.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +1 206 054 975</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Quick links </h4>
                                <div class="footer-title-line"></div>
                                <ul class="footer-menu">
                                    <li><a href="https://tourism.danang.vn/en/">Tourism_DaNang</a></li> 
                                    <li><a href="http://www.dulichdanang.biz.vn/">Khánh Hưng Travel</a>  </li> 
                                    <li><a href="https://travel.com.vn/du-lich-da-nang.aspx">VietTravel</a></li> 
                                    <li><a href="http://safitour.com/">safitour</a></li>
                                    <li><a href="https://www.instagram.com/danang_fantasticity/">danang_fantasticity</a></li>                                     
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Stay in touch</h4>
                                <div class="footer-title-line"></div>
                                <p>Đà Nẵng là một thành phố tuyệt đẹp và văn minh - Một thành phố trẻ rất năng động và phát triển từng ngày, các dịch vụ du lịch Đà Nẵng và hạ tầng du lịch Đà Nẵng phát triển mạnh mẽ đang thu hút khách du lịch đến ngày một đông hơn</p>

                                {{--<form>--}}
                                    {{--<div class="input-group">--}}
                                        {{--<input class="form-control" type="text" placeholder="E-mail ... ">--}}
                                        {{--<span class="input-group-btn">--}}
                                            {{--<button class="btn btn-primary subscribe" type="button"><i class="pe-7s-paper-plane pe-2x"></i></button>--}}
                                        {{--</span>--}}
                                    {{--</div>--}}
                                {{--</form> --}}

                                {{--<div class="social pull-right"> --}}
                                    {{--<ul>--}}
                                        {{--<li><a class="wow fadeInUp animated" href="https://www.facebook.com/groups/1941871702741858/"><i class="fa fa-twitter"></i></a></li>--}}
                                        {{--<li><a class="wow fadeInUp animated" href="https://www.facebook.com/groups/1941871702741858/" data-wow-delay="0.2s"><i class="fa fa-facebook"></i></a></li>--}}
                                        {{--<li><a class="wow fadeInUp animated" href="https://www.facebook.com/groups/1941871702741858/" data-wow-delay="0.3s"><i class="fa fa-google-plus"></i></a></li>--}}
                                        {{--<li><a class="wow fadeInUp animated" href="https://www.facebook.com/groups/1941871702741858/" data-wow-delay="0.4s"><i class="fa fa-instagram"></i></a></li>--}}
                                        {{--<li><a class="wow fadeInUp animated" href="https://www.facebook.com/groups/1941871702741858/" data-wow-delay="0.6s"><i class="fa fa-dribbble"></i></a></li>--}}
                                    {{--</ul> --}}
                                {{--</div>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-copy text-center">
                <div class="container">
                    <div class="row">
                        <div class="pull-left">
                            <span> (C) <a href="">Team</a> , All rights reserved 2017  </span>
                        </div> 
                        <div class="bottom-menu pull-right"> 
                            <ul> 
                                <li><a class="wow fadeInUp animated" href="/" data-wow-delay="0.2s">Home</a></li>
                                <li><a class="wow fadeInUp animated" href="/locations" data-wow-delay="0.3s">Location</a></li>
                                <li><a class="wow fadeInUp animated" href="/place" data-wow-delay="0.2s">Place</a></li>
                                {{--<li><a class="wow fadeInUp animated" href="#" data-wow-delay="0.2s">Login</a></li>--}}
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>

        </div>
{{--        <script src="{{asset('http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js')}}"></script>--}}
        <script src="{{asset('js/modernizr-2.6.2.min.js',true)}}"></script>
        <script src="{{asset('js/jquery-1.10.2.min.js',true)}}"></script>
        <script src="{{asset('js/bootstrap.min.js',true)}}"></script>
        <script src="{{asset('js/bootstrap-select.min.js',true)}}"></script>
        <script src="{{asset('js/bootstrap-hover-dropdown.js',true)}}"></script>
        <script src="{{asset('js/jquery.validate.min.js',true)}}"></script>
        <script src="{{asset('js/jquery.rateit.min.js',true)}}"></script>
        <script src="{{asset('js/easypiechart.min.js',true)}}"></script>
        <script src="{{asset('js/jquery.easypiechart.min.js',true)}}"></script>
        <script src="{{asset('js/jqueryValidate.js',true)}}"></script>
        <script src="{{asset('js/owl.carousel.min.js',true)}}"></script>
        <script src="{{asset('js/wow.js',true)}}"></script>
        <script src="{{asset('js/icheck.min.js',true)}}"></script>
        <script src="{{asset('js/price-range.js',true)}}"></script>
        <script src="{{asset('js/main.js',true)}}"></script>
        <script src="{{asset('js/editor.js',true)}}"></script>
        <script src="{{asset('js/jquery.rateit.js',true)}}"></script>
        <script type="text/javascript" src="{{asset('js/lightslider.min.js',true)}}"></script>
        @yield('script')
    </body>
</html>