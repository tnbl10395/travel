@extends('template.header')
@section('content')
        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                 
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section id="id-100" class="post single">

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
                                            <div class="rateit" data-rateit-value="0.5" data-rateit-mode="font" data-rateit-readonly="true" ></div>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            @if($onePlace!=null)
                                            <a href="javascript:void(0);"><i class="fa fa-calendar-o"></i>   {{$onePlace->updated_at}}</a>
                                            @endif
                                            @if($count==null)
                                            <a href=""><i class="fa fa-comment-o"></i>  No Comments</a>
                                            @else
                                            <a href=""><i class="fa fa-comment-o"></i>  {{$count}} Comments</a>
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
                                           
                                            <iframe width="350" height="450" frameborder="0" style="border:0" src="" allowfullscreen></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="post-content" class="post-body single wow fadeInLeft animated">
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
                                    <div class="rateit" id="rateit6" data-rateit-mode="font" data-rateit-min="0">
                                    </div>
                                    <div>
                                        <span id="value6"></span>
                                        <span id="hover6"></span>
                                    </div>
                                </p>
                                @endif
                            </div>
                            
                        </section> 
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
                                        <img src="{{$listComment->avatar}}}" class="img-responsive img-circle" alt="">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">{{$listComment->fullname}}</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> {{$listComment->updated_at}}</p>
                                    <p>{{$listComment->content}}</p>
                                    <div class="col-sm-6"> 
                                        <div class="col-sm-4">
                                            <span class="like1 col-sm-1">{{$listComment->amountOfLike}}</span>
                                            <a id="like" href="javascript:void(0);" style="color: #8B8989"><i class="fa fa-thumbs-up"></i> Like</a>    
                                        </div> 
                                        <div class="col-sm-4">
                                             <span class="dislike1 col-sm-1">{{$listComment->amountOfDisLike}}</span>
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
                            <h4 class="text-uppercase wow fadeInLeft animated">Leave comment</h4>
                                <textarea placeholder="What do you think ?" id="txtedit"></textarea>
                                <br>


                                <div class="row wow fadeInLeft animated">
                                    <div class="col-sm-12 text-right">
                                        <button class="btn btn-primary"><i class="fa fa-comment-o"></i> Post comment</button>
                                    </div>
                                </div>
                            <!-- </form> -->
                        </section>
                        @endif

                    </div>                                 
                </div>

            </div>

        </div>

        
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
                $('#txtedit').Editor();
                $("#rateit6").bind('rated', function (event, value) {
                $('#value6').text('You\'ve rated it: ' + value); 
                alert('You\'ve rated it: ' + value);
                });

                
                $("#rateit6").bind('over', function (event, value) {
                $('#hover6').text(); });
                value.rateit('readonly', true);               
                
             //     $.ajax({
             //         url: 'ekjjhh.php', //your server side script
             //         data: { id: productID, value: value }, //our data
             //         type: 'POST',
             //         success: function (data) {
             //             $('#response').append('<li>' + data + '</li>');
         
             //         },
             //         error: function (jxhr, msg, err) {
             //             $('#response').append('<li style="color:red">' + msg + '</li>');
             //         }
             //     });
             // });
                // $('#ratings').rating(function(vote, event){
                    
                //     $.ajax({
                //         method:'post',
                //         url:'#',

                //        data: {vote: vote};  
                //     }).done(function(infor){
                //         $('.infor').html("Your vote:<b>"+infor+"</b>")
                //     })
                    
                // });
                 
            });
</script>

@endsection