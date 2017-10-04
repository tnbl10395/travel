@extends('template.header')

@section('content')

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">List Locations In Da Nang</h1>               
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

                        <div class="panel panel-default sidebar-menu wow fadeInRight animated">
                            
                            <div class="panel-body recent-property-widget">
                                       
                            </div>
                        </div>
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

                            <div class="items-per-page">
                                <label for="items_per_page"><b>Location per page :</b></label>
                                <div class="sel">
                                    <select id="items_per_page" name="per_page">
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="9">9</option>
                                        <option selected="selected" value="12">12</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>
                                        <option value="60">60</option>
                                    </select>
                                </div><!--/ .sel-->
                            </div><!--/ .items-per-page-->
                        </div>

                        <div class="col-xs-2 layout-switcher">
                            <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                            <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                        </div><!--/ .layout-switcher-->
                    </div>

                    <div class="col-md-12 clear"> 
                        <div id="list-type" class="proerty-th">
                            <div class="col-sm-6 col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="detail_location" ><img src="{{asset('img/demo/bap.jpg')}}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="detail_location"> Hải Châu </a></h5>
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
                                            <h5><a href="property-1.html"> Thanh Khê </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Update :</b> 18/09/2017 </span>
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
                                            <a href="property-1.html" ><img src="{{asset('img/demo/property-1.jpg')}}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Sơn Trà </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Update :</b> 17/09/2017 </span> 
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
                                            <a href="property-1.html" ><img src="{{asset('img/demo/property-3.jpg')}}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Ngũ Hành Sơn </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Update: </b> 16/09/2017 </span>
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
                                            <a href="property-1.html" ><img src="{{asset('img/demo/property-1.jpg')}}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Liên Chiểu </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Update :</b> 15/09/2017 </span>
                                            
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
                                            <h5><a href="property-1.html"> Hòa Vang </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Update :</b> 11/09 </span>
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
                                            <a href="property-1.html" ><img src="{{asset('img/demo/property-3.jpg')}}"></a>
                                        </div>

                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Trường Sa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m2 </span>
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
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            
                                            <div class="property-icon">
                                                <img src="{{asset('img/icon/picine.png')}}">|
                                                
                                                <img src="{{asset('img/icon/cars.png')}}">  
                                            </div>
                                        </div> 
                                    </div>
                                </div> 

                                
                        </div>
                    </div>
                    
                    <div class="col-md-12"> 
                        <div class="pull-right">
                            <div class="pagination">
                                <ul>
                                    <li><a href="#">Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
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