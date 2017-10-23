@extends('template.header')
@section('content')
        <div class="content-area blog-page padding-top-40" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                 
                <div class="row">
                    <div class="blog-lst col-md-12 pl0">
                        <section id="id-100" class="post single">

                            <div class="post-header single">
                                <div class="">
                                    <h2 class="wow fadeInLeft animated">ASIA PARK</h2>
                                    <div class="title-line wow fadeInRight animated"></div>
                                </div>
                                <br>
                                <div class="row wow fadeInRight animated">
                                    <div class="col-sm-6">
                                        <p class="author-category">
                                            Rating: 
                                            <span class="rateit" data-rateit-mode="font" style="margin-left: 40px;font-size:30px;"></span>
                                        </p>
                                    </div>
                                    <div class="col-sm-6 right" >
                                        <p class="date-comments">
                                            <a href="single.html"><i class="fa fa-calendar-o"></i> Sep 20, 2017</a>
                                            <a href="single.html"><i class="fa fa-comment-o"></i> 8 Comments</a>
                                        </p>
                                    </div>
                                </div>
                            </div> 
                            <br>
                            <div>
                                <div class="single-property-content prp-style-2">
                                <div class="row">
                                    <div class="light-slide-item">            
                                        <div class="clearfix">

                                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                <li data-thumb="{{asset('img/property-1/property1.jpg')}}"> 

                                                    <img src="{{asset('img/property-1/property1.jpg')}}" />
                                                </li>
                                                <li data-thumb="{{asset('img/property-1/property2.jpg')}}"> 
                                                    <img src="{{asset('img/property-1/property3.jpg')}}" />
                                                </li>
                                                <li data-thumb="{{asset('img/property-1/property3.jpg')}}"> 
                                                    <img src="{{asset('img/property-1/property3.jpg')}}" />
                                                </li>
                                                <li data-thumb="{{asset('img/property-1/property4.jpg')}}"> 
                                                    <img src="{{asset('img/property-1/property4.jpg')}}" />
                                                </li>                                         
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                            </div>
                            <div id="post-content" class="post-body single wow fadeInLeft animated">
                                <p>
                                    Asia Park bao gồm ba khu vực chính: công viên giải trí ngoài trời hiện đại, công viên văn hóa với các công trình kiến trúc và nghệ thuật thu nhỏ mang tính biểu trưng của 10 quốc gia châu Á, và khu Sun Wheel - nơi giao thoa giữa nét hiện đại và truyền thống.
                            Công viên văn hóa tại Asia Park mở ra một không gian phương Đông kỳ thú qua từng nét văn hóa đa dạng, các công trình kiến trúc lịch sử và những hoạt động nghệ thuật, ẩm thực độc đáo của 10 quốc gia Châu Á: Nhật Bản, Indonesia, Singapore, Hàn Quốc, Ấn Độ, Nepal, Thái Lan, Campuchia, Trung Quốc và Việt Nam.<br>
                            <br>

                            Bên cạnh đó, hàng loạt công trình tuyệt tác như Cổng Thành, Tháp Đồng hồ, Sun Wheel, Thuyền rồng, Tượng Phật… cũng là những điểm đến không thể bỏ qua tại Khu trung tâm của Asia Park. Tại đây, vòng quay Sun Wheel với độ cao ấn tượng 115m, thuộc top 5 vòng quay lớn nhất thế giới, được ví như một biểu tượng mới của thành phố Đà Nẵng.<br>
                            <br>
                            Không chỉ có các trò chơi và công trình kiến trúc, Asia Park còn là điểm đến của những hoạt động văn hóa sôi nổi như biểu diễn nghệ thuật, làm thủ công, trò chơi dân gian, cùng các lễ hội văn hóa đặc sắc.<br>
                            <br>

                            Hiện tại vé vào cổng của khu vui chơi giải trí Sunwheel là 100.000 đồng :<br><br>

                            - Miễn phí trẻ em cao dưới 1m.<br>
                            <br>
                            - Giá vé trên đã bao gồm tham quan công viên, đi vòng quay Sun Wheel và vui chơi không giới hạn tại khu vui chơi giải trí ngoài trời.<br><br>
                            - Quý khách vui chơi tại khu vui chơi FEC, nằm tại tầng trệt Sun Wheel có thể mua vé cho mỗi trò chơi.<br><br>
                                <p>
                                    <img src="{{asset('img/blog10.jpg')}}" class="img-responsive" alt="Example blog post alt">
                                </p>

                                <h2>Header Level 2</h2>
                                <ol>
                                    <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                                    <li>Aliquam tincidunt mauris eu risus.</li>
                                </ol>

                                <blockquote>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada
                                        tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                                    </p>
                                </blockquote>

                                <h3>Please vote now</h3>


                                <p class="author-category">
                                    Rating: 
                                    <div class="rateit" id="rateit6" data-rateit-mode="font" data-rateit-min="0">
                                    </div>
                                    <div>
                                        <span id="value6"></span>
                                        <span id="hover6"></span>
                                    </div>
                                     
                                    
                                   <!-- <div class="rateit" data-rateit-mode="font" style="margin-left: 40px;font-size:30px;"></div>
 -->
                                </p>
                            </div>
                            
                        </section> 
                        <section id="comments" class="comments wow fadeInRight animated"> 
                            <h4 class="text-uppercase wow fadeInLeft animated">3 comments</h4>
                            <div class="row comment">
                                <div class="col-sm-3 col-md-2 text-center-xs">
                                    <p>
                                        <img src="{{asset('img/client-face1.png')}}" class="img-responsive img-circle" alt="">
                                    </p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <h5 class="text-uppercase">Julie Alma</h5>
                                    <p class="posted"><i class="fa fa-clock-o"></i> September 23, 2011 at 12:00 am</p>
                                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.
                                        Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                    <div class="col-sm-6"> 
                                        <div class="col-sm-4">
                                            <span class="col-sm-1">5</span>
                                            <a href="#"><i class="fa fa-thumbs-up"></i> Like</a>
                                        </div> 
                                        <div class="col-sm-4">
                                             <span class="col-sm-1">9</span>
                                           <a href="#"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                        </div>         
                                           
                                           
                                    </div>
                                    
                                </div>
                            </div>
                           
                        </section>         
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
                    speed: 500,
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