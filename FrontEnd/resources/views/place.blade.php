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
                        <!-- <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            
                            <div class="panel-body recent-property-widget">
                                       
                            </div>
                        </div> -->
                    </div>
                </div>

                <div class="col-md-9  pr0 padding-top-40 properties-page">
                    <div class="col-md-12 clear"> 
                        <div class="col-xs-10 page-subheader sorting pl0">
                            <ul class="sort-by-list">
                                <li class="active">
                                    <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                        Location Date <i class="fa fa-sort-amount-asc"></i>					
                                    </a>
                                </li>
                                
                            </ul><!--/ .sort-by-list-->

                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                            <!-- foreach -->
                            <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="blog" ><img src="{{asset('img/demo/bap.jpg')}}"></a>
                                    </div>

                                    <div class="item-entry overflow">
                                        <h5><a href="blog"> place 1 </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Update :</b> 20/09/2017 </span> 
                                        <div class="property-icon">
                                            <img src="{{asset('img/icon/picine.png')}}">|
                                            <img src="{{asset('img/icon/cars.png')}}">  
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="col-sm-6 col-md-4 p0">
                                <div class="box-two proerty-item">
                                    <div class="item-thumb">
                                        <a href="property-1.html" ><img src="{{asset('img/demo/property-2.jpg')}}"></a>
                                    </div>
                                    <div class="item-entry overflow">
                                        <h5><a href="property-1.html"> Place 2 </a></h5>
                                        <div class="dot-hr"></div>
                                        <span class="pull-left"><b> Update :</b> 18/09/2017 </span>
                                        <div class="property-icon">
                                            <img src="{{asset('img/icon/picine.png')}}">|
                                            <img src="{{asset('img/icon/cars.png')}}"> 
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                            <!-- end -->
                        </div>
                    </div>
                    
                    <div class="col-md-12"> 
                        <div class="pull-right">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>                
                    </div>
                </div>  
                </div>              
            </div>
        </div>
@endsection