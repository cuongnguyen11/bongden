@extends('frontend.layouts.apps')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('css/detail.css') }}?ver=3">

<link rel="stylesheet" type="text/css" href="{{ asset('css/details1.css') }}">


<?php 

    $comment = App\Models\rate::where('product_id', $data->id)->Where('active', 1)->OrderBy('id', 'desc')->get();

    $count_comment = $comment->count();
   
    function countStar($star, $count_comment = 0, $product_id)
    {

        $count = App\Models\rate::where('star', $star)->Where('active', 1)->where('product_id', $product_id)->get()->count();

        if($count_comment===0){

            $percent = 0;
        }
        else{
             $percent = ($count/$count_comment)*100;
        }

       

        $result = ['percent'=>$percent, 'rate'=>$count];

        return $result;
    }

    $comment = $comment->take(10);
    $now = Carbon\Carbon::now();
    Carbon\Carbon::setLocale('vi');
?>

<style>
    
    #rate_add_form{
        width: 100%;
        margin: 0;
    }
    #rate_add_form .rating_area{
        width: 100%;
    }
    .auto-height{
        height: auto !important;
    }

    table td span{
        padding: 7px;
    }

    .fancybox-title-over{
        width: auto !important;
    }

    .characteristic table{
        width: 100% !important;
    }


    @media only screen and (min-width: 600px) {
        .mobile{
            display: none;
        }
        #rates_rate .toprt{
            height: auto !important;
        }
        .mobile-add-cart{
            display: none;
        }

    }

     @media only screen and (max-width: 600px) {
        .desktop{
            display: none;
        }

         .wrap-magiczoom{
            position: static;
            
        }
        .mobile-add-cart{
           
            position: fixed;
            bottom: 1%;
            padding: 10px 0;
            background: #ddd;

        }
    }



</style>

<div class="main_wrapper ">
    <div class=" container_main_wrapper">
        <div class="main-area main-area-1col main-area-full">
            <div class="breadcrumbs breadcrumb_detail">
                <div class="container">
                    <div class="breadcrumbs_wrapper" itemscope="" itemtype="http://schema.org/WebPage">
                        <ul class="breadcrumb" itemscope="itemscope" itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"> <a title="Máy chiếu mini KAW" href="{{ route('homeFe') }}" itemprop="item"> <span itemprop="name">Trang chủ</span>
                                    <meta content="1" itemprop="position">
                                </a> </li> @if(!empty($groupLink)) <li class="breadcrumb__item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem"> <a title="Máy chiếu mini" href="{{ route('details', $groupLink??'') }}" itemprop="item"> <span itemprop="name">{{ @$groupName }}</span>
                                    <meta content="2" itemprop="position">
                                </a> </li> @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="product" itemscope="" itemtype="https://schema.org/Product">
                    <meta itemprop="url" content="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM">
                    <div class="product_name_share cls">
                        <div class="product_name cls">
                            <div class="title-name">
                                <h1 itemprop="name">{{ $data->Name }} </h1>
                            </div>
                            <div class="title-rate"> <span class="rate rate_head" itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating"> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                        </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                        </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                        </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                        </svg> </span> <span class="star-on star"> <svg aria-hidden="true" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-star fa-w-18">
                                            <path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" class=""></path>
                                        </svg> </span> <span itemprop="ratingValue" class="hide">5</span> <span itemprop="bestRating" class="hide">5</span> <a href="#prodetails_tab3" title="Đánh giá sản phẩm này" class=""> <span itemprop="ratingCount">{{  $count_comment }}</span> đánh giá / 5 lượt mua </a> </span> </div>
                        </div>
                        
                    </div>
                    <div class="clear"></div>
                    <div class="detail_main cls">
                        <div class="detail_main_top cls">
                            <div class="frame_left frame_left_animate">
                                <div class="wrap-magiczoom">
                                    <div class="frame_img">
                                        <div class="frame_img_inner">
                                           
                                            <div class="magic_zoom_area">
                                                <a id="Zoomer" href="javascript:void(0)" data-image="{{ asset($data->Image) }}" class="MagicZoomPlus" title="">
                                                <img onclick="gotoGallery(1,0,0);" src="{{ asset($data->Image) }}">
                                                </a>
                                            </div>

                                            <div id="sync1_wrapper">
                                                <div id="sync1" class="owl-carousel owl-theme owl-hidden owl-loaded">
                                                    <div class="owl-stage-outer owl-height" style="height: 0px;">
                                                        <div class="owl-stage" style="width: 700px; transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s;">

                                                            <div class="owl-item active" style="width: 100px; margin-right: 0px;">
                                                                <div class="item">
                                                                    <a href="javascript:void(0)" id="images/products/2023/06/28/original/k95003_1687943471.jpg" rel="image_large1" class="selected cboxElement cb-image-link" title="{{ $data->Name }}">
                                                                    <img onclick="gotoGallery(1,0,0);" src="{{ asset($data->Image) }}" longdesc="{{ asset($data->Image) }}" alt="{{ $data->Name }}" itemprop="image">
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="owl-item" style="width: 100px; margin-right: 0px;">
                                                                <div class="item">
                                                                    <a href="javascript:void(0)" class=" cboxElement cb-image-link " rel="image_large1" title="{{ $data->Name }}">
                                                                    <img onclick="gotoGallery(1,0,0);" src="{{ asset($data->Image) }}" longdesc="{{ asset($data->Image) }}" alt="{{ $data->Name }}" class="image0" itemprop="image">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="owl-controls">
                                                        <div class="owl-nav">
                                                            <div class="owl-prev" style="display: none;">‹</div>
                                                            <div class="owl-next" style="display: none;">›</div>
                                                        </div>
                                                        <div class="owl-dots" style="">
                                                            <div class="owl-dot active"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                            <div class="owl-dot"><span></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbs">
                                        <div id="sync2" class="owl-carousel owl-theme owl-loaded">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="width: 602px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">

                                                    <div class="owl-item current active" style="width: 84px; margin-right: 2px;">
                                                        <div class="item">
                                                            <a href="javascript:void(0)" id="{Ơ" rel="image_large" class="selected" title="{{ $data->Name }}">
                                                            <img src="{{ asset($data->Image) }}" longdesc="{{ asset($data->Image) }}" alt="{{ $data->Name }}" itemprop="image">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <?php 

                                                        $images_products = App\Models\image::where('product_id', $data->id)->select('image')->get();
                                                    ?>
                                                    @if(!empty($images_products) && $images_products->count()>0)
                                                    @foreach($images_products as $image)
                                                    <div class="owl-item active" style="width: 84px; margin-right: 2px;">
                                                        
                                                        <div class="item">
                                                            <a href="{{ asset($image->image) }}" data_color_thump="" class="color_thump_item" data-order="1">
                                                            <img src="{{ asset($image->image) }}" longdesc="{{ asset($image->image) }}" alt="{{ $data->Name }}" class="image0" itemprop="image">
                                                            </a>
                                                        </div>
                                                       
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    

                                                </div>
                                            </div>
                                            <div class="owl-controls">
                                                <div class="owl-nav">
                                                    <div class="owl-prev" style="display: none;">‹</div>
                                                    <div class="owl-next" style="display: none;">›</div>
                                                </div>
                                                <div class="owl-dots" style="display: block;">
                                                    <div class="owl-dot active"><span></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide_FT"></div>
                                </div>


                                <div class="product_base mobile">
                                    <meta itemprop="brand" content="KAW">
                                    <div class="price cls " itemprop="offers" itemscope="" itemtype="https://schema.org/AggregateOffer">
                                        <link itemprop="availability" href="https://schema.org/InStock">
                                        <div class="price_current " id="price" content="3449000"> {{ str_replace(',' ,'.', number_format($data->Price)) }}₫ </div>
                                        <meta itemprop="lowPrice" content="3449000">
                                        <meta itemprop="highPrice" content="3449000">
                                        <meta itemprop="itemOffered" name="itemOffered" content="10">
                                        <meta itemprop="offerCount" name="offerCount" content="999">
                                        <meta itemprop="priceCurrency" content="VND"> <!-- <div class="price_old"> <span class="price_old_nb" id="price_old" content="4800000"> 4.800.000₫</span> </div> <span class="unit_data"> / Chiếc</span> -->
                                        <div class="in_stock"> <i></i>Còn hàng </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="end-product-base-top"></div>
                                    <div>
                                        <meta itemprop="mpn" content="5231">
                                        <meta itemprop="sku" content="5231">
                                    </div>
                                    <div class="_attributes"> </div>
                                    <div class="detail_button product_detail_bt cls">
                                        <div class="gift_summary"> </div>

                                        <!-- <div class="wrap-btm-buy cls"> <a href="javascript:void(0)" onclick="addToCart({{ $data->id }})">
                                            <div type="submit" class="btn-buy-222 fl" id="buy-now-222"> <span> Mua ngay </span> </div>
                                            </a> <a href="javascript:void(0)" onclick="addCartFast({{ $data->id }})" class="btn-dathang" data-toggle="modal">
                                                <font>Thêm vào giỏ hàng </font>
                                            </a> 
                                        </div> -->

                                        <div class="clear"></div>
                                    </div> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="ajax_buy_product"> <input type="hidden" name="product_id" value="5231"> <input type="hidden" name="Itemid" value="10">
                                    
                                    <div class="time-word"> Gọi đặt mua: <a title="Gọi đặt mua" href="tel:0867935899">0867935899</a> </div> <!--    TAGS        --> <input type="hidden" name="record_alias" id="record_alias" value="may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc"> <input type="hidden" name="record_id" id="record_id" value="5231"> <input type="hidden" name="table_name" id="table_name" value="may_chieu">
                                </div>
                                
                                <div class="product_tab_content" id="tabs"> {!! $data->Detail !!} </div>
                                <div class="rate-comment-plugin">
                                    <div class="tab-title cls">
                                        <div class="cat-title-main" id="prodetails_tab30"> <span>Đánh giá <span title="tt_main_color">sản phẩm</span></span> </div>
                                    </div>
                                    <div id="prodetails_tab3" class="prodetails_tab">
                                        <div class="tab_content_right">
                                           
                                            <div class="full-screen-mobile"></div>
                                            <div id="rates_rate" class="rates_rate_product">
                                                <div class="rates">
                                                    <div class="tab_label"><span>Có <strong>{{ $count_comment }}</strong> đánh giá</span> <strong>về {{ $data->Name }}</strong> </div>
                                                    <div class="toprt">
                                                        <div class="crt">
                                                            <div class="rcrt">

                                                                @for($i=5; $i>=1; $i--)
                                                                <div class="r"> 
                                                                    <span class="t">{{ $i }}<i></i></span>

                                                                    <div class="bgb">
                                                                        <div class="bgb-in" style="width: {{ countStar($i, $count_comment, $data->id)['percent']  }}%"></div>
                                                                    </div> 
                                                                    <span class="n" onclick="" data-buy="2"><strong>{{ countStar($i, $count_comment, $data->id)['rate'] }}</strong> đánh giá</span>
                                                                </div>
                                                                @endfor
                                                                
                                                            </div>
                                                            <div class="bcrt"> <a href="javascript:void(0)" class="show-rate-click">Gửi đánh giá của bạn</a> </div>
                                                        </div>
                                                        <div class="clr"></div>
                                                        <form action="javascript:void(0);" method="post" name="rate_add_form" id="rate_add_form" class="form_rate hide_form cls" onsubmit="javascript: submit_rate();return false;">
                                                            <div class="rating_area cls"> <span class="label_form">Chọn đánh giá của bạn</span> <span id="ratings" class="cls"> <i class="icon_v1 star_on" id="rate_1" value="1"></i> <i class="icon_v1 star_on" id="rate_2" value="2"></i> <i class="icon_v1 star_on" id="rate_3" value="3"></i> <i class="icon_v1 star_on" id="rate_4" value="4"></i> <i class="icon_v1 star_on" id="rate_5" value="5"></i> <input type="hidden" name="rating_disable" id="rating_disable" value="0"> <input type="hidden" name="rating_value" id="rating_value" value="5"> <!-- end RATING   --> </span> <span class="rsStar">Tuyệt vời quá</span> </div>
                                                            <div class="wraper_form_rate hide">
                                                                <div class="_textarea"> <textarea name="content" id="rate_content" placeholder="Nhập đánh giá về sản phẩm" required></textarea>
                                                                    <div class="extCt hide"> <span class="ckt"></span> </div>
                                                                    <div class="clear"></div>
                                                                    <div id="feedsImageBase"></div>
                                                                    
                                                                </div> <!-- <input type="button" class="btn-rate-mb" value="Gửi bình luận">   -->
                                                                <div class="wrap_rate cls">
                                                                    <div class="wrap_loginpost">
                                                                        <aside class="_right">
                                                                            <div> <input class="txt_input" required="" name="name" type="text" placeholder="Họ tên (bắt buộc)" id="rate_name" autocomplete="off" value=""> </div>
                                                                            <div> <input class="txt_input" name="email" type="email" placeholder="Email (bắt buộc)" id="rate_email" value=""> </div>
                                                                            <div class="wrap_submit mbl">
                                                                                <div class="pull-right clearfix"> <input type="submit" class="_btn_rate" value="Gửi đánh giá"> </div>
                                                                            </div>
                                                                        </aside>
                                                                    </div>
                                                                </div>
                                                                <div class="MsgRt"></div> <input type="hidden" value="rates" name="module"> <input type="hidden" value="rates" name="view"> <input type="hidden" value="products" name="type" id="_rate_type"> <input type="hidden" value="5231" name="record_id" id="record_id"> <input type="hidden" value="products" name="_rate_module" id="_rate_module"> <input type="hidden" value="product" name="_rate_view" id="_rate_view"> <input type="hidden" value="save_rate" name="task"> <input type="hidden" value="5231" name="record_id" id="_rate_record_id"> <input type="hidden" value="YWRkfDFwdTUyNWVvbjZzNTljam1oYnQ5bzFwNTRv" id="_session_upload"> <input type="hidden" value="L21heS1jaGlldS1taW5pL21heS1jaGlldS1taW5pLWFuZHJvaWQtd2lmaS10aG9uZy1taW5oLWthdy1rcDk1MC1jYW4tY2hpbmgtNC1nb2MtcDUyMzEuaHRtbD9mYmNsaWQ9SXdBUjJwSVZzNFVRNTB1TjM2UXpmVmpWdnZ4bHQxVl9rNDZCM1VMQUczZHlzVGlETV9Odzh2Qm9kWm1vTQ==" name="return" id="_rate_return"> <input type="hidden" name="linkurlall" id="linkurlall" value="https://maychieuminikaw.com/may-chieu-mini/may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc-p5231.html?fbclid=IwAR2pIVs4UQ50uN36QzfVjVvvxlt1V_k46B3ULAG3dysTiDM_Nw8vBodZmoM"> <input type="hidden" value="/index.php?module=rates&amp;view=rates&amp;type=products&amp;task=save_rate&amp;raw=1" name="return" id="link_reply_rate">
                                                            </div>
                                                        </form>
                                                    </div>


                                                    
                                                   
                                                    @if(!empty($comment) && $comment->count()>0)
                                                    <div class="rate-show-cmt">

                                                        @foreach($comment as $comments)
                                                        <div class="cls">
                                                            <div class="_contents">
                                                                <div class="_item  rep_75082 _level_0 _sub_0">
                                                                    <article itemprop="review" itemscope="" itemtype="http://schema.org/Review">
                                                                        <p class="clearfix cls" itemscope="" itemprop="author" itemtype="http://schema.org/Person"><span class="_name" itemprop="name">{{ $comments->name }}</span>
                                                                            <label class="sttB"><i class="iconcom-checkbuy"></i>Đã mua tại voisentam.com</label>
                                                                        </p>
                                                                        <div class="wrap_rate">
                                                                            <p class="_content " itemprop="description"><span><i class="iconcom-txtstar"></i><i class="iconcom-txtstar"></i><i class="iconcom-txtstar"></i><i class="iconcom-txtstar"></i><i class="iconcom-txtstar"></i></span>{!!  $comments->content  !!}</p>
                                                                            <div class="_control ">
                                                                                <a class="button_reply1" id="button_reply_75082" href="javascript:void(0)">Thảo luận</a>
                                                                                <span class="dot"> • </span>


                                                                                <time itemprop="datePublished">{{ $comments->created_at->diffForHumans($now)  }}</time>
                                                                            </div>

                                                                          
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        @endforeach
                                                        
                                                    </div>
                                                     @endif
                                                        <style type="text/css">
                                                            
                                                            .center {
                                                                text-align: center;
                                                                font-family: monospace;
                                                            }

                                                            .pagination {
                                                                display: inline-block;
                                                            }

                                                            .pagination a {
                                                                color: #000000;
                                                                float: left;
                                                                padding: 8px 16px;
                                                                text-decoration: none;
                                                                transition: background-color .5s;
                                                                border: 1px solid #DDD;
                                                                margin: 0 4px;
                                                                font-size: 20px;
                                                            }

                                                            .pagination a.active {
                                                                background-color: #0096FF;
                                                                color: #FFFFFF;
                                                                border: 1px solid #0096FF;
                                                            }

                                                            .pagination a:hover:not(.active) {
                                                                background-color: #DDD;
                                                            }
                                                        </style>

                                                        @if($count_comment>10)
                                                        <?php 

                                                            $page_limit = $count_comment/10>4?4:$count_comment/10;
                                                        ?>
                                                        <div class="center">
                                                            <div class="pagination rate-comment">


                                                                @for($i=1; $i<=$page_limit; $i++)

                                                                <a href="javascript:void(0)"  class="{{ $i===1?'active':''  }}" id="rate-cmt{{ $i }}" onclick="rateCommentPage({{ $i }})">{{ $i }}</a>
                                                                @endfor
                                                                
                                                            </div>
                                                        </div>
                                                        @endif
                                                       

                                                    

                                                </div>
                                              

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="frame_center">
                                <div class="product_base desktop">
                                    <meta itemprop="brand" content="KAW">
                                    <div class="price cls " itemprop="offers" itemscope="" itemtype="https://schema.org/AggregateOffer">
                                        <link itemprop="availability" href="https://schema.org/InStock">
                                        <div class="price_current " id="price" content="3449000"> {{ str_replace(',' ,'.', number_format($data->Price)) }}₫ </div>
                                        <meta itemprop="lowPrice" content="3449000">
                                        <meta itemprop="highPrice" content="3449000">
                                        <meta itemprop="itemOffered" name="itemOffered" content="10">
                                        <meta itemprop="offerCount" name="offerCount" content="999">
                                        <meta itemprop="priceCurrency" content="VND"> <!-- <div class="price_old"> <span class="price_old_nb" id="price_old" content="4800000"> 4.800.000₫</span> </div> <span class="unit_data"> / Chiếc</span> -->
                                        <div class="in_stock"> <i></i>Còn hàng </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="end-product-base-top"></div>
                                    <div>
                                        <meta itemprop="mpn" content="5231">
                                        <meta itemprop="sku" content="5231">
                                    </div>
                                    <div class="_attributes"> </div>
                                    <div class="detail_button product_detail_bt cls">
                                        <div class="gift_summary"> </div>
                                        <div class="wrap-btm-buy cls"> <a href="javascript:void(0)" onclick="addToCart({{ $data->id }})">
                                                <div type="submit" class="btn-buy-222 fl" id="buy-now-222"> <span> Mua ngay </span> </div>
                                            </a> <a href="javascript:void(0)" onclick="addCartFast({{ $data->id }})" class="btn-dathang" data-toggle="modal">
                                                <font>Thêm vào giỏ hàng </font>
                                            </a> </div>
                                        <div class="clear"></div>
                                    </div> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="ajax_buy_product"> <input type="hidden" name="product_id" value="5231"> <input type="hidden" name="Itemid" value="10">
                                    <div class="buy_fast">
                                        <div class="title_buy_fast_bold">Đặt hàng nhanh</div>
                                        <div class="title_buy_fast">Để lại số điện thoại, chúng tôi sẽ gọi lại ngay </div>
                                        <div class="clear"></div>
                                        <div class="cls"> <input type="tel" required="" value="" placeholder="Nhập số điện thoại" id="telephone_buy_fast" name="telephone_buy_fast" class="keyword input-text"> <button type="submit" class="button-buy-fast button" onclick="addCallPhone({{ $data->id }})">Gửi</button> </div> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="buy_fast_save"> <input type="hidden" name="id" value="5231"> <input type="hidden" name="Itemid" value="10"> <input type="hidden" value="L21heS1jaGlldS1taW5pL21heS1jaGlldS1taW5pLWFuZHJvaWQtd2lmaS10aG9uZy1taW5oLWthdy1rcDk1MC1jYW4tY2hpbmgtNC1nb2MtcDUyMzEuaHRtbD9mYmNsaWQ9SXdBUjJwSVZzNFVRNTB1TjM2UXpmVmpWdnZ4bHQxVl9rNDZCM1VMQUczZHlzVGlETV9Odzh2Qm9kWm1vTQ==" name="return">
                                    </div>
                                    <div class="time-word"> Gọi đặt mua: <a title="Gọi đặt mua" href="tel:0867935899">0867935899</a> </div> <!--    TAGS        --> <input type="hidden" name="record_alias" id="record_alias" value="may-chieu-mini-android-wifi-thong-minh-kaw-kp950-can-chinh-4-goc"> <input type="hidden" name="record_id" id="record_id" value="5231"> <input type="hidden" name="table_name" id="table_name" value="may_chieu">
                                </div>


                                <div class="default_characteristic_pc">
                                    <div class="tab_content_right">
                                        <div class="characteristic">
                                            <h2 class="tab-title"> <span>Thông tin sản phẩm</span> </h2> 
                                            {!! $data->Specifications !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="popup_chose_other_compatables hide">
                            <div class="popup_chose_other_compatables_inner">
                                <div class="close_popup_chose_other_compatables">x</div>
                            </div>
                        </div> <!--  -->
                        <!-- Không có phụ kiện khuyến mãi nào đối với sản phẩm này -->
                        <div class="detail_main_bot">
                            <div class="cls">
                                <div class="frame_b_l ">
                                    <!-- Modal HTML -->
                                    <div id="modal_buy_now" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <div class="modal-title"><span>Đặt hàng ngay - thông tin đặt hàng</span></div>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" name="eshopcart_info" method="post" id="eshopcart_info">
                                                        <div class="row cls">
                                                            <div class=" col-modal-l">
                                                                <div class="media-box">
                                                                    <div class="pull-left">
                                                                        <div class="media-img "> <img class="img-responsive lazy after-lazy" alt="Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc" itemprop="image" src="https://maychieuminikaw.com/images/products/2023/06/28/resized/k95003_1687943471.jpg" style="opacity: 1; display: none;" srcset="https://maychieuminikaw.com/images/products/2023/06/28/resized/k95003_1687943471.jpg.webp"> </div>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h2>Máy chiếu mini Android Wifi thông minh KAW KP950 cân chỉnh 4 góc</h2>
                                                                        <div> <strong>Số lượng</strong> <input class="quantity_modal" type="text" name="quantity" value="1" id="quantity_modal"> </div>
                                                                        <div class="price_modal"> 3.449.000₫ </div>
                                                                        <div class="price_modal_new"></div>
                                                                    </div>
                                                                    <div class="clear"></div>
                                                                </div>
                                                            </div>
                                                            <div class=" col-modal-r">
                                                                <div class="input_text_wrap"> <input type="text" name="sender_name" id="sender_name" placeholder="Họ và tên" value="" class="input_text"> </div>
                                                                <div class="input_text_wrap"> <input type="text" required="" name="sender_telephone" id="sender_telephone" placeholder="Điện thoại (10 số)" value="" class="input_text"> </div>
                                                                <div class="input_text_wrap"> <input type="text" name="sender_address" id="sender_address" placeholder="Địa chỉ" value="" class="input_text"> </div> <select class="input_text" name="city_receiver">
                                                                    <option value="0" data-price="0" data-type="species">Tỉnh/TP nhận hàng</option>
                                                                    <option value="Hà Nội">Hà Nội</option>
                                                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                                                    <option value="Đà Nẵng">Đà Nẵng</option>
                                                                    <option value="Hải Phòng">Hải Phòng</option>
                                                                    <option value="Bình Dương">Bình Dương</option>
                                                                    <option value="Khánh Hòa">Khánh Hòa</option>
                                                                    <option value="Tuyên Quang">Tuyên Quang</option>
                                                                    <option value="Điện Biên">Điện Biên</option>
                                                                    <option value="Lai Châu">Lai Châu</option>
                                                                    <option value="Sơn La">Sơn La</option>
                                                                    <option value="Hà Giang">Hà Giang</option>
                                                                    <option value="Yên Bái">Yên Bái</option>
                                                                    <option value="Hòa Bình">Hòa Bình</option>
                                                                    <option value="Thái Nguyên">Thái Nguyên</option>
                                                                    <option value="Lạng Sơn">Lạng Sơn</option>
                                                                    <option value="Quảng Ninh">Quảng Ninh</option>
                                                                    <option value="Bắc Giang">Bắc Giang</option>
                                                                    <option value="Phú Thọ">Phú Thọ</option>
                                                                    <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                                                    <option value="Bắc Ninh">Bắc Ninh</option>
                                                                    <option value="Hải Dương">Hải Dương</option>
                                                                    <option value="Hưng Yên">Hưng Yên</option>
                                                                    <option value="Thái Bình">Thái Bình</option>
                                                                    <option value="Hà Nam">Hà Nam</option>
                                                                    <option value="Nam Định">Nam Định</option>
                                                                    <option value="Ninh Bình">Ninh Bình</option>
                                                                    <option value="Thanh Hóa">Thanh Hóa</option>
                                                                    <option value="Nghệ An">Nghệ An</option>
                                                                    <option value="Hà Tĩnh">Hà Tĩnh</option>
                                                                    <option value="Quảng Bình">Quảng Bình</option>
                                                                    <option value="Quảng Trị">Quảng Trị</option>
                                                                    <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                                                    <option value="Cao Bằng">Cao Bằng</option>
                                                                    <option value="Quảng Nam">Quảng Nam</option>
                                                                    <option value="Quảng Ngãi">Quảng Ngãi</option>
                                                                    <option value="Bình Định">Bình Định</option>
                                                                    <option value="Phú Yên">Phú Yên</option>
                                                                    <option value="Lào Cai">Lào Cai</option>
                                                                    <option value="Ninh Thuận">Ninh Thuận</option>
                                                                    <option value="Bình Thuận">Bình Thuận</option>
                                                                    <option value="Kon Tum">Kon Tum</option>
                                                                    <option value="Gia Lai">Gia Lai</option>
                                                                    <option value="Đắk Lắk">Đắk Lắk</option>
                                                                    <option value="Đắk Nông">Đắk Nông</option>
                                                                    <option value="Lâm Đồng">Lâm Đồng</option>
                                                                    <option value="Bình Phước">Bình Phước</option>
                                                                    <option value="Tây Ninh">Tây Ninh</option>
                                                                    <option value="Bắc Kạn">Bắc Kạn</option>
                                                                    <option value="Đồng Nai">Đồng Nai</option>
                                                                    <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                                                    <option value="Long An">Long An</option>
                                                                    <option value="Tiền Giang">Tiền Giang</option>
                                                                    <option value="Bến Tre">Bến Tre</option>
                                                                    <option value="Trà Vinh">Trà Vinh</option>
                                                                    <option value="Vĩnh Long">Vĩnh Long</option>
                                                                    <option value="Đồng Tháp">Đồng Tháp</option>
                                                                    <option value="An Giang">An Giang</option>
                                                                    <option value="Kiên Giang">Kiên Giang</option>
                                                                    <option value="Cần Thơ">Cần Thơ</option>
                                                                    <option value="Hậu Giang">Hậu Giang</option>
                                                                    <option value="Sóc Trăng">Sóc Trăng</option>
                                                                    <option value="Bạc Liêu">Bạc Liêu</option>
                                                                    <option value="Cà Mau">Cà Mau</option>
                                                                </select> <br> <select class="input_text" name="method_receiver">
                                                                    <option value="0" data-price="0" data-type="species">Hình thức nhận hàng</option>
                                                                    <option value="shop">Thanh toán trực tiếp tại cửa hàng</option>
                                                                    <option value="cod">Thanh toán khi nhận hàng (COD)</option>
                                                                </select> <br>
                                                                <div class="input_text_wrap"> <input type="text" name="sender_codesale" id="sender_codesale" placeholder="Mã giảm giá (nếu có)" class="input_text"> </div>
                                                                <!--<input type="text" name="sender_email"  id="sender_email"  value="" class="input_text" />-->
                                                                <div class="btn_area"> <a rel="nofollow" class="btn btn-default" href="javascript: void(0)" id="submitbt"> <span>Đặt hàng</span> </a> <a rel="nofollow" class="btn reset-default" href="javascript: void(0)" id="resetbt"> <span>Nhập lại</span> </a> </div> <input type="hidden" name="code_sale" id="code_sale"> <input type="hidden" name="id" value="5231"> <input type="hidden" name="price" value="3449000"> <input type="hidden" name="price_fix" value="3449000"> <input type="hidden" name="price_old" value="4800000"> <input type="hidden" name="module" value="products"> <input type="hidden" name="view" value="cart"> <input type="hidden" name="task" value="eshopcart2_save" id="task">
                                                            </div>
                                                            <div class="clear"></div>
                                                            <div class="other_info">
                                                                <div class="check-square mt10">Nhận giao hàng trong <strong>60 phút</strong> tại <strong>TP.Hà Nội và TP.HCM</strong> </div>
                                                                <div class="check-square mt10">Giao hàng <strong>tận nơi</strong>, hài lòng thanh toán</div>
                                                                <div class="check-square mt10">Bảo hành <strong></strong></div>
                                                                <div class="mt10">Mọi thắc mắc xin vui lòng liên hệ theo số máy <strong style="color: #E31010;"> 0867935899</strong> để biết thêm chi tiết.</div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <input type="hidden" value="0" id="memory_curent"> <input type="hidden" value="0" id="usage_states_curent"> <input type="hidden" value="0" id="region_curent"> <input type="hidden" value="0" id="color_curent"> <input type="hidden" value="0" id="color_curent_old"> <input type="hidden" value="0" id="warranty_curent"> <input type="hidden" value="0" id="origin_curent"> <input type="hidden" value="0" id="species_curent"> <input type="hidden" value="0" id="price_extend"> <input type="hidden" value="3449000" id="basic_price"> <input type="hidden" value="4800000" id="basic_price_old"> <input type="hidden" value="5231" name="product_id" id="product_id">
                                </div>
                                <div class="frame_b_r">
                                    <div class="products-list-related">
                                        <div class="tab-title cls">
                                            <div class="cat-title-main" id="characteristic-label"> <span>Sản phẩm liên quan</span> </div>
                                        </div>
                                        <div class="product_grid"> 
                                            @if(isset($other_product)) 

                                            <?php 

                                            // list sản phẩm ẩn đi

                                            $list_product_cate_hide = App\Models\groupProduct::select('product_id','id')->where('active', 0)->get();

                                            $list_product_hide = [];



                                            if(!empty($list_product_cate_hide) && $list_product_cate_hide->count()>0){

                                                foreach ($list_product_cate_hide as $value) {

                                                    $ar_list = json_decode($value->product_id);

                                                    if(isset($ar_list)){
                                                         foreach ($ar_list as  $val) {

                                                            array_push($list_product_hide, $val);
                                                           
                                                        }
                                                    }

                                                }

                                            }

                                            $list_product_hide = array_unique($list_product_hide);

                                            ?>
                                            @foreach($other_product as $value) 
                                            @if($value->active==1 && $value->id != $data->id) 
                                            @if(!in_array($value->id, $list_product_hide) )
                                            <div class="item">
                                                <figure class="product_image "> <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}"> <img class="lazy after-lazy" alt="{{ $value->Name }}" src="{{ asset($value->Image) }}" data-srcset="{{ asset($value->Image) }}"> </a> </figure>
                                                <div> <a href="{{ route('details', $value->Link) }}" title="{{ $value->Name }}" class="name"> {{ $value->Name }} </a> </div>
                                                <div class="price_arae">
                                                    <div class="price_current">{{ str_replace(',' ,'.', number_format($value->Price))  }}₫</div> <!-- <div class="price_old"><span>7.000.000₫</span></div> -->
                                                </div>
                                                <div class="gift"> </div>
                                                <div class="clear"></div>
                                            </div> 
                                            @endif
                                            @endif 
                                            @endforeach 
                                            @endif 
                                        </div>
                                    </div>
                                </div>
                                <div id="prodetails_tab20" class="prodetails_tab">
                                    <div class="tab_content_right">
                                        <div class="full-screen-mobile"></div>
                                        <div class="comments">
                                            <div class="tab_label">
                                                <h3>Đánh giá <strong>về {{ @$data->Name }}</strong></h3> </span>
                                            </div>
                                            
                                            <div id="_info_comment" class="cls">
                                                <div class="_contents">
                                                    <div class="_item 1 _level_0 _sub_0">
                                                        <article itemprop="review" itemscope="" itemtype="http://schema.org/Review">
                                                            <p class="clearfix cls" itemscope="" itemprop="author" itemtype="http://schema.org/Person"><span class="_avatar">TV</span><span class="_name" itemprop="name">Quản trị viên</span><span class="_level">Quản trị viên</span></p>
                                                            <div class="_wrap">
                                                                <h4 class="_content " itemprop="description"> Xin chào quý khách. Quý khách hãy để lại bình luận, chúng tôi sẽ phản hồi sớm</h4>
                                                                <div class="_control"><a class="button_reply" href="javascript: void(0)">Trả lời</a><span class="dot">.</span><time itemprop="datePublished" content="2023-01-28 00:00" datetime="2023-01-28 00:00" title="2023-01-28 00:00">7 tháng trước</time></div>
                                                                <div class="reply_area hide">
                                                                    <form action="javascript:void(0);" method="post" name="comment_reply_form_1" id="comment_reply_form_1" class="form_comment cls" onsubmit="javascript: submit_reply(1);return false;">
                                                                        <div class="_textarea"><textarea texid="txt_content_1" id="cmt_content_1" class="cmt_content" name="content" placeholder="Viết bình luận của bạn..."></textarea></div><input type="button" class="btn-comment-mb-rep" value="Gửi bình luận">
                                                                        <div class="full-screen-mobile"></div>
                                                                        <div class="wrap_r cls">
                                                                            <div class="title-mb">Thông tin người gửi<span class="close-md-comment"><svg height="16px" viewBox="0 0 64 64" enable-background="new 0 0 64 64">
                                                                                        <g>
                                                                                            <path fill="black" d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path>
                                                                                        </g>
                                                                                    </svg></span></div>
                                                                            <div class="wrap_loginpost mbl">
                                                                                <aside class="_right"> <input required="" class="txt_input" name="name" id="cmt_name_1" type="text" placeholder="Họ tên (bắt buộc)" maxlength="50" autocomplete="off" value=""><input required="" class="txt_input" name="email" id="cmt_email_1" type="email" placeholder="Email (bắt buộc)" value=""></aside>
                                                                            </div>
                                                                            <div class="wrap_submit mbl"><input type="submit" class="_btn_comment" value="Gửi bình luận"></div>
                                                                        </div><input type="hidden" value="products" name="module" id="_cmt_module_1"><input type="hidden" value="product" name="view" id="_cmt_view_1"><input type="hidden" value="products" name="type" id="_cmt_type_1"><input type="hidden" value="save_reply" name="task"><input type="hidden" value="1" name="parent_id" id="cmt_parent_id_1"><input type="hidden" value="0" name="record_id" id="_cmt_record_id_1"><input type="hidden" value="" name="return" id="_cmt_return_1"><input type="hidden" value="/index.php?module=comments&amp;view=comments&amp;type=products&amp;task=save_reply&amp;raw=1" name="return" id="cmt_link_reply_form_1">
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </article>
                                                    </div>
                                                </div>
                                            </div>
                                            <form action="javascript:void(0);" method="post" name="comment_add_form" id="comment_add_form" class="form_comment cls" onsubmit="javascript: submit_comment();return false;">
                                                <div class="tab-title"> <span>Bình luận <span>sản phẩm</span></span> </div>
                                                <div class="_textarea"> 
                                                    <textarea name="content" id="cmt_content" placeholder="Viết bình luận của bạn..." required></textarea> 
                                                </div> 
                                                <button type="submit" class="btn-comment-mb">Gửi bình luận </button>
                                               
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div> <input type="hidden" value="5231" name="product_id" id="product_id">
                </div>
            </div>
            <script type="text/javascript">
                var product_id = '5231';
                var product_price = 3449000;
                var check_fb_viewcontent = 1;
            </script> <!-- Tiep thi lai dong adword -->
            <script type="text/javascript">
                var google_tag_params = {
                    dynx_itemid: '5231',
                    dynx_itemid2: '5231',
                    dynx_pagetype: 'offerdetail',
                    dynx_totalvalue: 3449000,
                
                };
            </script>
            <div class="wrapper_modal_alert_2"></div>
            <div class="popup-video-full">
                <div class="close" onclick="close_popup_video_full()">X</div>
                <div class="content-video">
                    <div class="video"> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>

</div>


<div class="wrap-btm-buy cls mobile-add-cart"> <a href="javascript:void(0)" onclick="addToCart({{ $data->id }})">
    <div type="submit" class="btn-buy-222 fl" id="buy-now-222"> <span> Mua ngay </span> </div>
    </a> <a href="javascript:void(0)" onclick="addCartFast({{ $data->id }})" class="btn-dathang" data-toggle="modal">
        <font>Thêm vào giỏ hàng </font>
    </a> 
</div>


@push('script') 

<script type="text/javascript">

    var tables = document.getElementsByTagName('table');
    var rows = tables[0].getElementsByTagName('tr');
    for(var i=1; i<rows.length; i +=2) {
        // alert(rows[i]);
        $(rows[i]).addClass("tr-1");
    }

    for(var i=0; i<rows.length; i +=2) {
        // alert(rows[i]);
        $(rows[i]).addClass("tr-0");
    }

    
    values = 5;
    function submit_rate() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('rate-form') }}",
            data: {
                product_id: {{ $data->id }},
                email:$('#rate_email').val(),
                name:$('#rate_name').val(),
                content:$('#rate_content').val(),
                star:values,
                   
            },
            success: function(result){
                $('#rate_email').val('');
                $('#rate_name').val('');
                $('#rate_content').val('');
              alert('Gửi thành công, xin vui lòng chờ quản trị viên kiểm duyệt!');
            }
        });
        
       
    }

    function show_rate_click_paginate() {

        $.ajax({
            type: 'GET',
            url: "{{ route('comment') }}",
            data: {
                product_id: {{ $data->id }},
               
                content:$('#cmt_content').val(),
               
            },
            success: function(result){
                $('#cmt_content').val('');
               
              alert('Gửi thành công, xin vui lòng chờ quản trị viên kiểm duyệt!');
            }
        });

    }

    function submit_comment() {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('comment') }}",
            data: {
                product_id: {{ $data->id }},
               
                content:$('#cmt_content').val(),
               
            },
            success: function(result){
                $('#cmt_content').val('');
               
              alert('Gửi thành công, xin vui lòng chờ quản trị viên kiểm duyệt!');
            }
        });


    }

    function addToCart(id) {
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('cart') }}",
            data: {
                product_id: id,
                gift_check:'',
                   
            },
            beforeSend: function() {
               
                $('.loader').show();
    
            },
            success: function(result){
    
                window.location.href = "{{ route('cart-details') }}";
            }
    
        });
           
    }
    
    function isValid(p) {
      var phoneRe = /(84|0[3|5|7|8|9])+([0-9]{8})\b/;
      var digits = p.replace(/\D/g, "");
      return phoneRe.test(digits);
    }
    
    function addCartFast(id) {
        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    
        $.ajax({
            type: 'POST',
            url: "{{ route('addcartfast') }}",
            data: {
                product_id: id,
                   
            },
            success: function(result){
    
                window.location.reload();
    
            }
        });
        
    }
    
    function addCallPhone(id){
    
        if($('#telephone_buy_fast').val()==''){
            alert('vui lòng nhập số điện thoại')
        }
        else if(!isValid($('#telephone_buy_fast').val())){
            alert('số điện thoại không đúng định dạng');
        }
        else{
            name = 'Khách đặt hàng bằng sđt';
            phone = $('#telephone_buy_fast').val();
    
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
    
            $.ajax({
                type: 'POST',
                url: "{{ route('callphone') }}",
                data: {
                    name: name,
                    phone:phone,
                    product_id:id,
                       
                },
                success: function(result){
        
                    window.location.href = result;
                    
                    
                }
            });
        }
    
    }

    let active = 0;

    $('.show-rate-click').click(function(){

        if(active ===0){

            $('#rate_add_form').removeClass('hide_form');
            $('.toprt').addClass('auto-height');
            $('.wraper_form_rate').removeClass('hide');
            $(this).text('');
            $(this).text('Đóng');
            active =1;

        }else{
            $('#rate_add_form').addClass('hide_form');
            $('.toprt').removeClass('auto-height');
            $('.wraper_form_rate').addClass('hide');
            $(this).text('');
            $(this).text('Gửi đánh giá của bạn');
            active =0;
        }

    })


    const status = ['', 'Không thích', 'Tạm được', 'Bình thường', 'Rất tốt', 'Tuyệt vời quá'];

    $('#ratings .icon_v1').click(function(){

        $('.icon_v1').removeClass('star_on');

        $('.icon_v1').removeClass('star_off');

        values = parseInt($(this).attr('value'));

        for (var i = 1; i <=value; i++) {
            $('#rate_'+i).addClass('star_on');
        }    
        for(var i = value+1; i <=5; i++){
            $('#rate_'+i).addClass('star_off');
        }

        $('.rsStar').text('');

        $('.rsStar').text(status[values]);

    })


    $(".icon_v1").mouseenter(function(){
            
        $('.icon_v1').removeClass('star_on');

        $('.icon_v1').removeClass('star_off');

        value = parseInt($(this).attr('value'));
        
        for (var i = 1; i <=value; i++) {
            $('#rate_'+i).addClass('star_on');
        }    
        for(var i = value+1; i <=5; i++){
            $('#rate_'+i).addClass('star_off');
        }

    })

    $('#ratings').mouseleave(function(){


        $('.icon_v1').removeClass('star_on');

        $('.icon_v1').removeClass('star_off');
        
        for (var i = 1; i <=values; i++) {
            $('#rate_'+i).addClass('star_on');
        }    
        for(var i = values+1; i <=5; i++){
            $('#rate_'+i).addClass('star_off');
        }
       
    });

    function rateCommentPage(id) {
        $('.rate-comment a').removeClass('active');
        $('#rate-cmt'+id).addClass('active');
        page_max  = {{  $count_comment }};
        next_page = parseInt(id)+1;
        if(next_page>=page_max){

            next_page = page_max-1;
        }
        if(id>3){

            $('.rate-comment').find('a').first().remove();

            $('.rate-comment').append('<a href="javascript:void(0)" class="" id="rate-cmt'+next_page+'" onclick="rateCommentPage('+next_page+')">'+next_page+'</a>')
        }
        $.ajax({
            type: 'GET',
            url: "{{ route('get-comment-paginate') }}",
            data: {
                page: id,
                product_id:'{{ $data->id }}'
            },
            success: function(result){
                $('.rate-show-cmt').html('');
                $('.rate-show-cmt').html(result);
            }
        });       

    }


</script> 
@endpush

@endsection