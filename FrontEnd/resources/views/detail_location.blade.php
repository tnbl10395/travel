@extends('template.header')

@section('content')

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        @if($oneLocation[0]!=null)
                        <h1 class="page-title">Welcome {{$oneLocation[0]->districtName}} </h1>
                        @endif
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
                                    @if($oneLocation[0]!=null)
                                        <img src="{{$oneLocation[0]->picture}}" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="single-property-wrapper">
                            <div class="section">
                                <br>
                                <h4 class="s-property-title">Description</h4>
                                <div class="s-property-content">
                                    @if($oneLocation[0]!=null)
                                    <p>{{$oneLocation[0]->description}}</p>
                                    @endif
                                </div>
                            </div>
                            @if($listCategory!=null&&$listPlace!=null)
                                <h2 style="font-weight: bold;" class="s-property-title">List of Places in {{$oneLocation[0]->districtName}}</h2>
                                    @foreach($listCategory as $objectCategory)
                                        @foreach($listPlace as $objectPlace)
                                            @if($objectCategory->categoryID==$objectPlace->categoryID)
                                            <div class="col-md-12 clear">
                                                <h4 class="s-property-title">{{$objectCategory->categoryName}}</h4>
                                                <div id="list-type" class="proerty-th">
                                                    <div class="col-sm-6 col-md-4 p0">
                                                        <div class="box-two proerty-item">
                                                            <div class="item-thumb">
                                                                <a href="/detail-place/{{$objectPlace->placeID}}" ><img src="{{$objectPlace->imageName}}"></a>
                                                            </div>
                                                            <div class="item-entry overflow">
                                                                <h5><a href="/detail-place/{{$objectPlace->placeID}}"> {{$objectPlace->placeName}} </a></h5>
                                                                <div class="dot-hr"></div>
                                                                <span class="pull-left"><b> Update :</b> {{$objectPlace->updated_at}} </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            @endif
                        </div>

                            <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                                <div class="panel-body recent-property-widget">
                                </div>
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
                        </div>
                    </div>
                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                @if($oneLocation[0]!=null)
                                <iframe width="350" height="450" frameborder="0" style="border:0" src="{{$oneLocation[0]->map}}" allowfullscreen></iframe>
                                @endif
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
                                                    @if($listLocation!=null)
                                                        @foreach($listLocation as $list)
                                                        <option value="0{{$list->locationID}}">{{$list->districtName}}</option>
                                                        @endforeach
                                                    @endif
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