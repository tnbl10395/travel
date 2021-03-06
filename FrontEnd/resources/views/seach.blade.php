@extends('template.header')

@section('content')
        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">List Places In Da Nang</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->
        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">  
                <div class="row">
                <div class="col-md-3 p0 padding-top-40">
                    <div class="blog-asside-right pr0">
                        <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                            <div class="panel-heading">
                                <h3 class="panel-title">Smart search</h3>
                            </div>
                            <div class="panel-body search-widget">
                                <form action="/search" method="post" class=" form-inline">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" name="search" class="form-control" placeholder="Key word">
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select Your Location">
                                                    @if($listLocation!=null)
                                                        @foreach($listLocation as $objectLocation)
                                                        <option value="0{{$objectLocation->locationID}}">{{$objectLocation->districtName}}</option>
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
                    </div>
                </div>
                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                {{--<li class="active">--}}
                                    {{--<a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC"><i class="fa fa-sort-amount-asc"></i></a>--}}
                                {{--</li>--}}
                            </ul>
                        </div>
                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>
                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                            <!-- foreach -->
                            @if($result!=null)
                                @foreach($result as $objectPlace)
                                    <div class="col-sm-6 col-md-4 p0">
                                        <div class="box-two proerty-item" >
                                            <div class="item-thumb">
                                                <a href="/detail-place/{{$objectPlace->placeID}}" ><img src="{{$objectPlace->imageName}}"></a>
                                            </div>
                                            <div class="item-entry overflow">
                                                <h6><a href="/detail-place/{{$objectPlace->placeID}}"> {{$objectPlace->placeName}} </a></h6>
                                                <div class="dot-hr"></div>
                                                <span class="pull-left"><b> Update :</b> {{$objectPlace->updated_at}} </span>
                                                <div class="bigstars col-sm-6 col-sm-push-1">
                                                    <div class="rateit" data-rateit-value="{{$objectPlace->rating}}" data-rateit-mode="font" data-rateit-readonly="true" ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <!-- end -->
                        </div>
                    </div>
                    {{--<div class="col-md-12"> --}}
                        {{--<div class="pull-right">--}}
                            {{--<div class="pagination">--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#">Prev</a></li>--}}
                                    {{--<li><a href="#">1</a></li>--}}
                                    {{--<li><a href="#">2</a></li>--}}
                                    {{--<li><a href="#">Next</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>                --}}
                    {{--</div>--}}
                </div>  
                </div>              
            </div>
        </div>
@endsection