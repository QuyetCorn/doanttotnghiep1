@extends('user.master')
@section('content')

@if(Session::get('message'))
	<div class="alert alert-success" style='text-align: center;'>
 		{{ Session::get('message') }}
	</div>
@endif


    <section class="awe-section-1">
        
        <section class="section_slider_banner">
            
            <div class="container">
                
                    <div class="slider-layout-1 col-md-9 col-sm-12 col-xs-12">
                        <div class="owl-carousel" data-nav="true" data-lg-items="1" data-md-items="1" data-height="false" data-xs-items="1" data-sm-items="1" data-margin="0">
    
    
                            @foreach($slide as $sl)
                            <div class="item">
                                <a href="{{$sl->link}}">
                                    <picture>
                                        <img style="height: 585px;"class="border-radius-10" src="assetsUser/images/{{$sl->image}}" alt="slide {{$sl->id}}" />
                                    </picture>
                                </a>
                            </div>
                            @endforeach
    
    
                        </div>
                    </div>

                    @foreach($sup_slide as $ssl)
                    <div class="banner-top-layout-1 col-md-3 col-sm-12 col-xs-12 clearfix spcustom_html">
    
                        <div class="col-md-12 col-xs-4">
                            <a class="banner banner-{{$ssl->id}}" href="{{$ssl->link}}"><img class="img-responsive lazyload" src="assetsUser/images/{{$ssl->images}}" data-src="assetsUser/images/{{$ssl->image}}" alt="banner {{$ssl->id}}"></a>
                        </div>
    
                    </div>
                    @endforeach 
                    
                
            </div>
        </section>
    </section>
    

    <section class="awe-section-11">
        <h3 class="hidden">&nbsp;</h3>
        <section class="section_service_index_end no_loop">
            <div class="container">
                <div class="wrab">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ser">
                            <div class="wrap_ser">
                                <span class="font_icon"><span class="fa fa-paper-plane"></span></span>
                                <div class="content_ser">
                                    <p class="large_">FREE VẬN CHUYỂN</p>
                                    <span class="des_ser">Cho mọi đơn hàng</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ser">
                            <div class="wrap_ser">
                                <span class="font_icon"><span class="fa fa-map-marker"></span></span>
                                <div class="content_ser">
                                    <p class="large_">HOÀN TIỀN</p>
                                    <span class="des_ser">Khi sản phẩm bị lỗi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ser">
                            <div class="wrap_ser">
                                <span class="font_icon"><span class="fa fa-tag"></span></span>
                                <div class="content_ser">
                                    <p class="large_">SUPPORT 24/7</p>
                                    <span class="des_ser">Liên hệ với chúng tôi</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ser">
                            <div class="wrap_ser">
                                <span class="font_icon"><span class="fa fa-life-ring"></span></span>
                                <div class="content_ser">
                                    <p class="large_">THANH TOÁN </p>
                                    <span class="des_ser">Thanh toán nhanh gọn.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
        </section>
    </section>


    <section class="awe-section-2">
        <h3 class="hidden">&nbsp;</h3>
        <section class="section_product_loopp loop_one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dear_title">
                        <h2 class="title_head_ border_content">
                            <a href="{{route('sanphamsale')}}" title="Sản Phẩm Sale">Sản Phẩm Sale</a>
                        </h2>
                    </div>

                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap_owl_product_">
                        <div class="owl_product_ owl-carousel" data-nav="true" data-lg-items="5" data-md-items="4" data-height="false" data-xs-items="2" data-sm-items="3" data-margin="0">
  
<!-- San pham sale -->     
                        @foreach($sanphamsale as $sp)
                            @foreach($hinhanhsp as $hinhanhsp)
                                <div class="item saler_item first">
                                    <div class="owl_item_product">

                                        <div class="product-box">
                                            <div class="product-thumbnail">
                                                @if($sp->giam_gia>0)
                                                    <span class="sale_count"><span class="bf_">-
                                                {{$sp->giam_gia}}%
                                                    </span></span>
                                                @endif
    
                                                <a href="{{route('chitietsanpham',$sp->id)}}" class="image_link display_flex" data-images="anh_sp/{{$hinhanhsp->hinh_anh}}" title="{{$sp->ten_sp}}">
        
        
                                                    <img class="img-responsive lazyload" src="anh_sp/{{$hinhanhsp->hinh_anh}}" data-src="anh_sp/{{$hinhanhsp->hinh_anh}}" alt="{{$sp->ten_sp}}"/>

                                                </a>
                                                <div class="product-action-grid clearfix">
                                                    <form action="{{route('cart-add',$sp->id)}}" method="GET" class="variants form-nut-grid" enctype="multipart/form-data">
                                                        <div>
                                                            <a title="xem nhanh" href="{{route('chitietsanpham',$sp->id)}}" data-handle="{{$sp->ten_sp}}" class="button_wh_40 btn_view right-to quick-view">
                                                                <i class="fa fa-search"></i>
                                                                <span class="tooltips qv">
                                                                    <span>Xem chi tiết</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
        
                                                <div class="reviews-product-list grid_reviews">
                                                    <div class="bizweb-product-reviews-badge"></div>
                                                </div>
        
                                                <h3 class="product-name">
                                                    <a class="text2line" href="{{route('chitietsanpham',$sp->id)}}" title="{{$sp->ten_sp}}">{{$sp->ten_sp}}</a>
                                                </h3>
        
        
        
                                                <div class="price-box clearfix">
                                                    <span class="price product-price-old">
                                                        {{number_format($sp->gia,0,",",".")}} đ
                                                    </span>
                                                    <span class="price product-price">{{number_format($sp->gia*((100-$sp->giam_gia)/100),0,",",".")}} đ</span>
                                                </div>
        
        
                                                <div class="action__">
        
                                                    <form action="{{route('cart-add',$sp->id)}}" method="GET">
                                                        <div>
                                                            <input type="hidden"/>
                                                            <button class=" cart_button_style btn-cart left-to add_to_cart" title="Thêm vào giỏ hàng">
                                                                <span>
                                                                    <span class="fa fa-shopping-basket"></span>
                                                                </span>
                                                                Giỏ hàng
                                                            </button>
                                                        </div>
                                                    </form>
        
                                                </div>
                                                
        
                                            </div>
                                        </div>
    
                                        <div class="clockdiv" data-countdown="2018/09/20 15:00"></div>
                                    </div>
                                </div>
                            @endforeach
                         @endforeach 
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
    </section>
    


    <section class="awe-section-6">
        <h3 class="hidden">&nbsp;</h3>
        <link rel="preload" as="script" href="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/jquery-cycle22.js?1618737291739" />
        <script src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/jquery-cycle22.js?1618737291739" type="text/javascript"></script>
        <section class="section_product_loopp loop_two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dear_title">
                        <h2 class="title_head_ border_content">
                            <a href="{{route('sanpham')}}" title="Tất cả sản phẩm" >Tất cả sản phẩm</a>
                        </h2>
                        <!-- Nav tabs -->
                        <div class="loop_two_ctrl visible-xs">
                            <span id="loop_two_prev">&lt;</span>
                            <span id="loop_two_next">&gt;</span>
                        </div>
    
                    </div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      
                        <div role="tabpanel" class="tab-pane active" id="tab21">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap_owl_product_">
                                <div class="owl_product_ owl-carousel" data-nav="true" data-lg-items="5" data-md-items="4" data-height="false" data-xs-items="2" data-sm-items="3" data-margin="0">
                                    @foreach($sanpham as $sp)
                                        @foreach($hinhanhsp as $hinhanhsp)
                                            <div class="item saler_item first">
                                                <div class="owl_item_product">

                                                    <div class="product-box">
                                                        <div class="product-thumbnail">
                                                            @if($sp->giam_gia>0)
                                                                <span class="sale_count"><span class="bf_">-
                                                                    {{$sp->giam_gia}}%
                                                                </span></span>
                                                            @endif
                
                                                            <a href="{{route('chitietsanpham',$sp->id)}}" class="image_link display_flex" data-images="anh_sp/{{$hinhanhsp->hinh_anh}}" title="{{$sp->ten_sp}}">
                    
                    
                                                                <img class="img-responsive lazyload" src="anh_sp/{{$hinhanhsp->hinh_anh}}" data-src="anh_sp/{{$hinhanhsp->hinh_anh}}" alt="{{$sp->ten_sp}}"/>

                                                            </a>
                                                            <div class="product-action-grid clearfix">
                                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9725087" enctype="multipart/form-data">
                                                                    <div>
                                                                        <a title="xem nhanh" href="{{route('chitietsanpham',$sp->id)}}" data-handle="{{$sp->ten_sp}}" class="button_wh_40 btn_view right-to quick-view"><i class="fa fa-search"></i>
                                                                            <span class="tooltips qv"><span>Xem chi tiết</span></span>
                                                                        </a>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                    
                                                            <div class="reviews-product-list grid_reviews">
                                                                <div class="bizweb-product-reviews-badge" data-id="9725087"></div>
                                                            </div>
                    
                                                            <h3 class="product-name"><a class="text2line" href="{{route('chitietsanpham',$sp->id)}}" title="{{$sp->ten_sp}}">{{$sp->ten_sp}}</a></h3>
                    
                                                            
                                                            <div class="price-box clearfix">
                                                                @if($sp->giam_gia > 0)
                                                                    <span class="price product-price-old">
                                                                        {{number_format($sp->gia,0,",",".")}} đ
                                                                    </span>
                                                                    <span class="price product-price">{{number_format($sp->gia*((100-$sp->giam_gia)/100),0,",",".")}} đ</span>
                                                                @else
                                                                    <span class="price product-price">
                                                                        {{number_format($sp->gia,0,",",".")}} đ
                                                                    </span>
                                                                @endif
                                                            </div>
                    
                    
                                                            <div class="action__">
                    
                                                                <form action="/cart/add" method="post" class="variants form-nut-grid" data-id="product-actions-9725087" enctype="multipart/form-data">
                                                                    <div>
                    
                                                                        <input type="hidden" name="variantId" value="15530193" />
                                                                        <button class=" cart_button_style btn-cart left-to add_to_cart" title="Cho vào giỏ hàng">
                                                                            <span><span class="fa fa-shopping-basket"></span></span>
                                                                            Giỏ hàng
                                                                        </button>
                    
                                                                    </div>
                                                                </form>
                    
                                                            </div>
                    
                                                        </div>
                                                    </div>
                
                                                    <div class="clockdiv" data-countdown="2018/09/20 15:00"></div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach 
    
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </section>
    </section>
    
    
    <!-- <section class="awe-section-10">
        <h3 class="hidden">&nbsp;</h3>
        <section class="section_blog_main_index">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dear_title margin-bottom-10">
                        <h2 class="title_head_ border_content">
                            <a href="archive_news.blade.php" title="Tin tức">Tin tức</a>
                        </h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog_owl_main">
                        <div class="owl_blog_main_ owl-carousel" data-nav="false" data-dot="true" data-lg-items="3" data-md-items="3" data-height="false" data-xs-items="1" data-sm-items="2" data-margin="15">
    
    
                            <div class="item_blog_owl">
                                <article class="blog-item blog-item-grid row">
                                    <div class="wrap_blg">
                                        <div class="blog-item-thumbnail img1 col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick="window.location.href='/juno-ra-mat-bo-suu-tap-mua-le-hoi-ket-hop-cung-diem-my-lan-ngoc';">
                                            <a href="/juno-ra-mat-bo-suu-tap-mua-le-hoi-ket-hop-cung-diem-my-lan-ngoc">
    
    
                                                <img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/articles/sdvfdbfdsbfdv.jpg?v=1517332203667" style="max-width:100%;" alt="Juno ra mắt bộ sưu tập mùa lễ hội, kết hợp cùng Diễm My - Lan Ngọc">
    
                                            </a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_ar blog_large_item">
                                            <span class="blog_name"></span>
                                            <p class="calendar"><i class="fa fa-calendar-check-o"></i>05 Tháng 01 2018</p>
                                            <h3 class="blog-item-name large_name"><a class="text1line" href="/juno-ra-mat-bo-suu-tap-mua-le-hoi-ket-hop-cung-diem-my-lan-ngoc" title="Juno ra mắt bộ sưu tập mùa lễ hội, kết hợp cùng Diễm My - Lan Ngọc">Juno ra mắt bộ sưu tập mùa lễ hội, kết hợp cùng Diễm My - Lan Ngọc</a></h3>
                                            <p class="cmt">
                                                <i class="fa fa-comments" aria-hidden="true"></i>0 bình luận
                                                <a href=""><i class="fa fa-tags" aria-hidden="true"></i></a>
                                            </p>
                                            <a href="/juno-ra-mat-bo-suu-tap-mua-le-hoi-ket-hop-cung-diem-my-lan-ngoc" class="readmore"><i class="fa fa-caret-right"></i>Đọc tiếp</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
    
                            <div class="item_blog_owl">
                                <article class="blog-item blog-item-grid row">
                                    <div class="wrap_blg">
                                        <div class="blog-item-thumbnail img1 col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick="window.location.href='/dinh-cao-phong-do-anh-trai-mua-tuoi-tu-tuan-showbiz-viet-la-day';">
                                            <a href="/dinh-cao-phong-do-anh-trai-mua-tuoi-tu-tuan-showbiz-viet-la-day">
    
    
                                                <img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/articles/2.jpg?v=1517332206540" style="max-width:100%;" alt="Đỉnh cao phong độ 'anh trai mưa' tuổi tứ tuần showbiz Việt là đây!">
    
                                            </a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_ar blog_large_item">
                                            <span class="blog_name"></span>
                                            <p class="calendar"><i class="fa fa-calendar-check-o"></i>02 Tháng 01 2018</p>
                                            <h3 class="blog-item-name large_name"><a class="text1line" href="/dinh-cao-phong-do-anh-trai-mua-tuoi-tu-tuan-showbiz-viet-la-day" title="Đỉnh cao phong độ 'anh trai mưa' tuổi tứ tuần showbiz Việt là đây!">Đỉnh cao phong độ 'anh trai mưa' tuổi tứ tuần showbiz Việt là đây!</a></h3>
                                            <p class="cmt">
                                                <i class="fa fa-comments" aria-hidden="true"></i>2 bình luận
                                                <a href=""><i class="fa fa-tags" aria-hidden="true"></i></a>
                                            </p>
                                            <a href="/dinh-cao-phong-do-anh-trai-mua-tuoi-tu-tuan-showbiz-viet-la-day" class="readmore"><i class="fa fa-caret-right"></i>Đọc tiếp</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
    
                            <div class="item_blog_owl">
                                <article class="blog-item blog-item-grid row">
                                    <div class="wrap_blg">
                                        <div class="blog-item-thumbnail img1 col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick="window.location.href='/nhung-da-nu-khien-phai-may-rau-khong-the-coi-thuong';">
                                            <a href="/nhung-da-nu-khien-phai-may-rau-khong-the-coi-thuong">
    
    
                                                <img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/articles/1.jpg?v=1517332209743" style="max-width:100%;" alt="Những đả nữ khiến phái mày râu không thể coi thường">
    
                                            </a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_ar blog_large_item">
                                            <span class="blog_name"></span>
                                            <p class="calendar"><i class="fa fa-calendar-check-o"></i>02 Tháng 01 2018</p>
                                            <h3 class="blog-item-name large_name"><a class="text1line" href="/nhung-da-nu-khien-phai-may-rau-khong-the-coi-thuong" title="Những đả nữ khiến phái mày râu không thể coi thường">Những đả nữ khiến phái mày râu không thể coi thường</a></h3>
                                            <p class="cmt">
                                                <i class="fa fa-comments" aria-hidden="true"></i>0 bình luận
                                                <a href=""><i class="fa fa-tags" aria-hidden="true"></i></a>
                                            </p>
                                            <a href="/nhung-da-nu-khien-phai-may-rau-khong-the-coi-thuong" class="readmore"><i class="fa fa-caret-right"></i>Đọc tiếp</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
    
                            <div class="item_blog_owl">
                                <article class="blog-item blog-item-grid row">
                                    <div class="wrap_blg">
                                        <div class="blog-item-thumbnail img1 col-lg-12 col-md-12 col-sm-12 col-xs-12" onclick="window.location.href='/from-now-we-are-certified-web-to-basedu';">
                                            <a href="/from-now-we-are-certified-web-to-basedu">
    
    
                                                <img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/articles/3.jpg?v=1514878833690" style="max-width:100%;" alt="From Now We Are Certified Web To Basedu">
    
                                            </a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 content_ar blog_large_item">
                                            <span class="blog_name"></span>
                                            <p class="calendar"><i class="fa fa-calendar-check-o"></i>02 Tháng 01 2018</p>
                                            <h3 class="blog-item-name large_name"><a class="text1line" href="/from-now-we-are-certified-web-to-basedu" title="From Now We Are Certified Web To Basedu">From Now We Are Certified Web To Basedu</a></h3>
                                            <p class="cmt">
                                                <i class="fa fa-comments" aria-hidden="true"></i>12 bình luận
                                                <a href=""><i class="fa fa-tags" aria-hidden="true"></i></a>
                                            </p>
                                            <a href="/from-now-we-are-certified-web-to-basedu" class="readmore"><i class="fa fa-caret-right"></i>Đọc tiếp</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section> -->
    
    
    
    
  
    <section class="awe-section-9">
        <h3 class="hidden">&nbsp;</h3>
        <section class="section_brand">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 dear_title">
                        <h2 class="title_head_ border_content">
                            <a href="#" title="Thương Hiệu">Thương Hiệu</a>
                        </h2>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 wrap_owl_product_">
                        <div class="owl_product_ owl-carousel" data-nav="true" data-lg-items="6" data-md-items="5" data-height="false" data-xs-items="2" data-sm-items="3" data-margin="0">
    
    
    
    
    
                            <div class="item  ">
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_1.png?1618737291739" alt="đối tác 1" /></a>
    
    
    
    
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_2.png?1618737291739" alt="đối tác 2" /></a>
    
                            </div>
    
    
    
    
    
                            <div class="item  ">
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_3.png?1618737291739" alt="đối tác 3" /></a>
    
    
    
    
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_4.png?1618737291739" alt="đối tác 4" /></a>
    
                            </div>
    
    
    
    
    
                            <div class="item  ">
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_5.png?1618737291739" alt="đối tác 5" /></a>
    
    
    
    
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_6.png?1618737291739" alt="đối tác 6" /></a>
    
                            </div>
    
    
    
    
    
                            <div class="item  ">
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_7.png?1618737291739" alt="đối tác 7" /></a>
    
    
    
    
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_8.png?1618737291739" alt="đối tác 8" /></a>
    
                            </div>
    
    
    
    
    
                            <div class="item  ">
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_9.png?1618737291739" alt="đối tác 9" /></a>
    
    
    
    
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_10.png?1618737291739" alt="đối tác 10" /></a>
    
                            </div>
    
    
    
    
    
                            <div class="item  ">
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_11.png?1618737291739" alt="đối tác 11" /></a>
    
    
    
    
    
                                <a href="#"><img class="img-responsive lazyload" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-src="//bizweb.dktcdn.net/100/286/794/themes/637857/assets/image_brand_12.png?1618737291739" alt="đối tác 12" /></a>
    
                            </div>
    
    
    
    
    
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
    </section>


    @endsection