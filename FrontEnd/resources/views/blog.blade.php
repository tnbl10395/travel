@extends('template.header')

@section('content')

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">TouristAttractions of Hai Chau</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">   
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section class="post">
                            <div class="text-center padding-b-50">
                                <h2 class="wow fadeInLeft animated">ASIA PARK</h2>
                                <div class="title-line wow fadeInRight animated"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <p class="author-category">
                                            Rating: 
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>
                                </div>
                                <div class="col-sm-6 right" >
                                    <p class="date-comments">
                                        <a href="list_topic"><i class="fa fa-calendar-o"></i> Sep 20, 2017</a>
                                        <a href="list_topic"><i class="fa fa-comment-o"></i> 20 Comments</a>
                                    </p>
                                </div>
                            </div>
                            <div class="image wow fadeInLeft animated">
                                <a href="list_topic">
                                    <img src="{{asset('img/asia-park.jpg')}}" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>
                            <p class="intro">
                            Asia Park bao gồm ba khu vực chính: công viên giải trí ngoài trời hiện đại, công viên văn hóa với các công trình kiến trúc và nghệ thuật thu nhỏ mang tính biểu trưng của 10 quốc gia châu Á, và khu Sun Wheel - nơi giao thoa giữa nét hiện đại và truyền thống.
                            
                            </p>
                            <p class="read-more">
                                <a href="list_topic" class="btn btn-default btn-border">Continue reading</a>
                            </p>
                        </section>   

                        <section class="post">
                            <div class="text-center padding-b-50">
                                <h2  class="wow fadeInLeft animated">DRAGON BRIDE</h2>
                                <div class="title-line wow fadeInRight animated"></div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                     <p class="author-category">
                                            Rating: 
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                        </p>   
                                </div>
                                <div class="col-sm-6 right" >
                                    <p class="date-comments">
                                        <a href="single.html"><i class="fa fa-calendar-o"></i> Sep 20, 2017</a>
                                        <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                                    </p>
                                </div>
                            </div>
                            <div class="image wow fadeInLeft animated">
                                <a href="single.html">
                                    <img src="{{asset('img/dragon-bridge.jpg')}}" class="img-responsive" alt="Example blog post alt">
                                </a>
                            </div>
                            <p class="intro">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                            <p class="read-more">
                                <a href="list_topic" class="btn btn-default btn-border">Continue reading</a>
                            </p>
                        </section>  
                    </div>  
                </div>

            </div>
        </div>

@endsection