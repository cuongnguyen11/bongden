<!DOCTYPE html>
<!--[if IE 9 ]><html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]><html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="vi" class="loading-site no-js">
<!--<![endif]-->
<!-- Mirrored from tlclighting.com.vn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 26 Aug 2023 03:56:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<?php 
    $meta_data = DB::table('contact')->get()->last();
    $contact = DB::table('feedback')->get()->last();
?>

@include('frontend.include.header', ['meta_data'=>$meta_data])

<style type="text/css">
    .mobile-add-cart{
        width: 100%;
    }
</style>

<body data-rsssl=1 class="home page-template page-template-page-blank page-template-page-blank-php page page-id-5433 theme-flatsome woocommerce-no-js mega-menu-primary mega-menu-primary-mobile header-shadow lightbox"><a class="skip-link screen-reader-text" href="#main">Skip to content</a>
    <div id="wrapper">
        <header id="header" class="header has-sticky sticky-jump">
            <div class="header-wrapper">
                <div id="masthead" class="header-main ">
                    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                        <div id="logo" class="flex-col logo"> <a href="{{ route('homeFe')  }}" title="kaw.vn - Chuyên cung cấp máy chiếu và các thiết bị máy chiếu cao cấp." rel="home">

                                @if(!empty($meta_data->logo))
                                <img  src="{{ asset($meta_data->logo) }}" class="header_logo header-logo" alt="" /><img width="297" height="87" src="{{ asset($meta_data->logo) }}" class="header-logo-dark" alt="" />

                                @else
                                <img  src="wp-content/uploads/2023/02/logo-chuan-TLC-06.jpg" class="header_logo header-logo" alt="" /><img width="297" height="87" src="wp-content/uploads/2023/02/logo-chuan-TLC-06.jpg" class="header-logo-dark" alt="" />
                                @endif

                            </a> </div>
                        <div class="flex-col show-for-medium flex-left">
                            <ul class="mobile-nav nav nav-left ">
                                <li class="nav-icon has-icon"> <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false"> <i class="icon-menu"></i> </a> </li>
                            </ul>
                        </div>
                        <div class="flex-col hide-for-medium flex-left flex-grow">
                            <ul class="header-nav header-nav-main nav nav-left  nav-divided nav-uppercase">
                                <li class="header-search-form search-form html relative has-icon">
                                    <div class="header-search-form-wrapper">
                                        <div class="searchform-wrapper ux-search-box relative is-normal">
                                            <form role="search" method="get" class="searchform" action="{{ route('search-product-frontend') }}">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow"> <label class="screen-reader-text" for="woocommerce-product-search-field-0">Tìm kiếm:</label> <input type="search" id="kws" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="key" /> 
                                                        <input type="hidden" name="post_type" value="product" /> </div>
                                                    <div class="flex-col"> <button type="submit" value="Tìm kiếm" class="ux-search-submit  button icon mb-0"> <i class="icon-search"></i> </button> </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"> </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="flex-col hide-for-medium flex-right">
                            <ul class="header-nav header-nav-main nav nav-right  nav-divided nav-uppercase">
                                <li class="html custom html_topbar_right">


                                    <div class="top01">
                                        <div class="top011" style=" display: inline-block; ">  
                                            <div class="shopcart">
                                                <div class="shopcart_simples block_content">
                                                    <a class="buy_icon" href="{{ route('cart-details') }}" title="Giỏ hàng" rel="nofollow">
                                                        <svg width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <circle cx="181.333" cy="437.333" r="53.333"></circle>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <path
                                                                        d="M509.867,89.6c-2.133-2.133-4.267-4.267-8.533-4.267H96L85.333,29.867c-2.133-4.267-6.4-8.533-10.667-8.533h-64    C4.267,21.333,0,25.6,0,32s4.267,10.667,10.667,10.667h55.467l51.2,260.267c8.533,34.133,38.4,59.733,74.667,59.733h245.333    c6.4,0,10.667-4.267,10.667-10.667c0-6.4-4.267-10.667-10.667-10.667H192c-17.067,0-34.133-8.533-42.667-23.467L460.8,275.2    c4.267,0,8.533-4.267,8.533-8.533L512,96C512,96,512,91.733,509.867,89.6z"
                                                                    ></path>
                                                                </g>
                                                            </g>
                                                            <g>
                                                                <g>
                                                                    <circle cx="394.667" cy="437.333" r="53.333"></circle>
                                                                </g>
                                                            </g>
                                                        </svg>

                                                        <?php

                                                            $cart = Gloudemans\Shoppingcart\Facades\Cart::content();

                                                            $number_cart = count($cart);

                                                        ?>
                                                        <span class="text-c">Giỏ hàng</span>
                                                        <!-- <span class="text-mn"> </span> -->
                                                        <span class="quality">{{ $number_cart }}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="top012" style=" display: inline-block;    margin-left: 10px; "> 
                                            <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="https://tlclighting.com.vn/wp-content/uploads/2021/12/icon-02.svg" style="width: 35px;height: 35px;border-radius: 50%;background: #00427e;padding: 7px;position: relative;z-index: 1;    display: inline-block;" alt="tlclighting"> <a style="font-family: Montserrat, sans-serif!important; border: solid 2px #00427e; border-radius: 15px; padding: 5px 15px 5px 25px; margin-left: -20px; color: #fd0b0b; font-weight: 600; position: relative; z-index: 0; " href="tel:18006192"> 0867935899<a></div>
                                    </div>


                                </li>
                            </ul>
                        </div>
                        <div class="flex-col show-for-medium flex-right">
                            <ul class="mobile-nav nav nav-right ">
                                <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children"> <a href="#" aria-label="Tìm kiếm" class="is-small"><i class="icon-search"></i></a>
                                    <ul class="nav-dropdown nav-dropdown-bold">
                                        <li class="header-search-form search-form html relative has-icon">
                                            <div class="header-search-form-wrapper">
                                                <div class="searchform-wrapper ux-search-box relative is-normal">
                                                    <form role="search" method="get" class="searchform" action="{{ route('search-product-frontend') }}">
                                                        <div class="flex-row relative">
                                                            <div class="flex-col flex-grow"> <label class="screen-reader-text" for="woocommerce-product-search-field-1">Tìm kiếm:</label> <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" /> <input type="hidden" name="post_type" value="product" /></div>
                                                            <div class="flex-col"> <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button secondary button icon mb-0"> <i class="icon-search"></i> </button></div>
                                                        </div>
                                                        <div class="live-search-results text-left z-top"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
                    <div class="flex-row container">
                        <div class="flex-col hide-for-medium flex-left">
                            <ul class="nav header-nav header-bottom-nav nav-left  nav-divided nav-uppercase">
                                <div id="mega-menu-wrap-primary" class="mega-menu-wrap">
                                    <div class="mega-menu-toggle">
                                        <div class="mega-toggle-blocks-left"></div>
                                        <div class="mega-toggle-blocks-center"></div>
                                        <div class="mega-toggle-blocks-right">
                                            <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0' id='mega-toggle-block-0'><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false"> <span class="mega-toggle-animated-box"> <span class="mega-toggle-animated-inner"></span> </span> </button></div>
                                        </div>
                                    </div>
                                    <ul id="mega-menu-primary" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                                        <li class='mega-menu-item mega-menu-item-type-custom mega-align-bottom-left mega-menu-flyout mega-menu-item-5437' id='mega-menu-item-5437'>
                                            <a href="/" class="mega-menu-link" aria-haspopup="true" aria-expanded="false" tabindex="0">Trang chủ<span class="mega-indicator" tabindex="0" role="button" ></span></a>
                                        </li>    

                                        <?php 
                                            $menu = App\Models\groupProduct::where('level', 0)->where('active', 1)->get();
                                        ?>

                                        @if(!empty($menu) && $menu->count()>0)

                                        @foreach($menu as $val)

                                        @if($val->id != 7)

                                        <?php 
                                                
                                            $parent_menu = App\Models\groupProduct::where('parent_id', $val->id)->select('name', 'link')->where('active', 1)->get();
                                        ?>    
                                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom  {{ !empty($parent_menu) && $parent_menu->count()>0?'mega-menu-item-has-children':''  }}  mega-align-bottom-left mega-menu-flyout mega-menu-item-5437' id='mega-menu-item-5437'>

                                            <a href="{{ route('details', $val->link) }}" class="mega-menu-link" aria-haspopup="true" aria-expanded="false" tabindex="0">{{ $val->name }}<span class="mega-indicator" tabindex="0" role="button" aria-label="Giới thiệu submenu"></span></a>
                                            <ul class="mega-sub-menu">


                                                

                                                @if(!empty($parent_menu)  && $parent_menu->count()>0)
                                                @foreach($parent_menu as $value) 
                                                
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-5439'><a class="mega-menu-link" href="{{ route('details', $value->link) }}">{{ $value->name }}</a></li>

                                                @endforeach
                                                @endif
                                                
                                            </ul>

                                        </li>
                                        @endif
                                        @endforeach
                                        @endif                                        
                                    </ul>
                                </div>
                            </ul>
                        </div>
                        <div class="flex-col hide-for-medium flex-right flex-grow">
                            <ul class="nav header-nav header-bottom-nav nav-right  nav-divided nav-uppercase"></ul>
                        </div>
                    </div>
                </div>
                <div class="header-bg-container fill">
                    <div class="header-bg-image fill"></div>
                    <div class="header-bg-color fill"></div>
                </div>
            </div>
        </header>



        @yield('content')

        <?php 

            $info_cpn = DB::table('info_company')->get()->last();
        ?>
    
        <footer id="footer" class="footer-wrapper">
            <div class="footer-widgets footer footer-1">
                <div class="row large-columns-3 mb-0">
                    <div id="text-5" class="col pb-0 widget widget_text">
                        <div class="textwidget">
                            <p><span style="font-size: 120%;"><strong>{{ @$info_cpn->name_cpn  }} </strong></span></p>
                            <table style="width: 100%; border-collapse: collapse; border-style: hidden;" border="0" cellspacing="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 40px;"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMCIgaGVpZ2h0PSIyMCIgdmlld0JveD0iMCAwIDIwIDIwIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="size-full wp-image-7374 alignleft" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/12/home-icon-min.png" alt="" width="20" height="20" /></td>
                                        <td style="width: auto;"><strong>Trụ sở chính: </strong>{!! @$info_cpn->address_cpn !!}</td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div id="text-4" class="col pb-0 widget widget_text">
                        <div class="textwidget">
                            <p><span style="font-size: 120%;"><strong>CHÍNH SÁCH :</strong></span></p>
                            <ul>
                                <?php
                                    $posts  = App\Models\post::where('category', 5)->get();
                                ?>
                                @if( !empty($posts) && $posts->count()>0)
                                @foreach($posts as $value)
                                <li><span style="font-size: 100%;"><a href="{{ route('details', $value->link) }}">{{ $value->title }}</a></span></li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div id="text-3" class="col pb-0 widget widget_text">
                        <div class="textwidget">
                            <p><strong style="margin-bottom: -10px; display: block; font-size: 120%; color: #fff;">LIÊN KẾT VỚI CHÚNG TÔI:</strong></p>
                            <div style="margin-top: 10px; display: inline-block;"><span style="font-size: 90%; color: #fff;">
                                <a href="javascript:void(0)">

                                    <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMyIgaGVpZ2h0PSIzNCIgdmlld0JveD0iMCAwIDMzIDM0Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="size-full wp-image-6454 alignleft" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-53.png" alt="tlclighting" width="33" height="34" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-53.png 33w, https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-53-31x31.png 31w" data-sizes="(max-width: 33px) 100vw, 33px" />
                                </a> 

                                <a href="javascript:void(0)">
                                    <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMyIgaGVpZ2h0PSIzNCIgdmlld0JveD0iMCAwIDMzIDM0Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="size-full wp-image-6455 alignleft" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-54.png" alt="tlclighting" width="33" height="34" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-54.png 33w, https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-54-31x31.png 31w" data-sizes="(max-width: 33px) 100vw, 33px" /></a>
                                    <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMyIgaGVpZ2h0PSIzNCIgdmlld0JveD0iMCAwIDMzIDM0Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="size-full wp-image-6456 alignleft" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-55.png" alt="tlclighting" width="33" height="34" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-55.png 33w, https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-55-31x31.png 31w" data-sizes="(max-width: 33px) 100vw, 33px" /> 
                                    <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMyIgaGVpZ2h0PSIzNCIgdmlld0JveD0iMCAwIDMzIDM0Ij48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" class="size-full wp-image-6457 alignleft" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-56.png" alt="tlclighting" width="33" height="34" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-56.png 33w, https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-56-31x31.png 31w" data-sizes="(max-width: 33px) 100vw, 33px" /></span>
                            </div>
                            <!-- <div class="fanpagefb" style="margin-top: 10px; display: inline-block; width: 100%;"><a href="#" target="_blank" rel="noopener noreferrer">
                                <img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzNTAiIGhlaWdodD0iMTkyIiB2aWV3Qm94PSIwIDAgMzUwIDE5MiI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iI2NmZDRkYiIvPjwvc3ZnPg==" class="aligncenter wp-image-9074 size-full" data-src="https://tlclighting.com.vn/wp-content/uploads/2022/01/footer.png" alt="footer-facebook" width="350" height="192" data-srcset="https://tlclighting.com.vn/wp-content/uploads/2022/01/footer.png 350w, https://tlclighting.com.vn/wp-content/uploads/2022/01/footer-300x165.png 300w, https://tlclighting.com.vn/wp-content/uploads/2022/01/footer-31x17.png 31w" data-sizes="(max-width: 350px) 100vw, 350px" /></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute-footer dark medium-text-center text-center">
                <div class="container clearfix">
                    <div class="footer-secondary pull-right">
                        <div class="payment-icons inline-block">
                            <div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
                                    <path d="M10.781 7.688c-0.251-1.283-1.219-1.688-2.344-1.688h-8.376l-0.061 0.405c5.749 1.469 10.469 4.595 12.595 10.501l-1.813-9.219zM13.125 19.688l-0.531-2.781c-1.096-2.907-3.752-5.594-6.752-6.813l4.219 15.939h5.469l8.157-20.032h-5.501l-5.062 13.688zM27.72 26.061l3.248-20.061h-5.187l-3.251 20.061h5.189zM41.875 5.656c-5.125 0-8.717 2.72-8.749 6.624-0.032 2.877 2.563 4.469 4.531 5.439 2.032 0.968 2.688 1.624 2.688 2.499 0 1.344-1.624 1.939-3.093 1.939-2.093 0-3.219-0.251-4.875-1.032l-0.688-0.344-0.719 4.499c1.219 0.563 3.437 1.064 5.781 1.064 5.437 0.032 8.97-2.688 9.032-6.843 0-2.282-1.405-4-4.376-5.439-1.811-0.904-2.904-1.563-2.904-2.499 0-0.843 0.936-1.72 2.968-1.72 1.688-0.029 2.936 0.314 3.875 0.752l0.469 0.248 0.717-4.344c-1.032-0.406-2.656-0.844-4.656-0.844zM55.813 6c-1.251 0-2.189 0.376-2.72 1.688l-7.688 18.374h5.437c0.877-2.467 1.096-3 1.096-3 0.592 0 5.875 0 6.624 0 0 0 0.157 0.688 0.624 3h4.813l-4.187-20.061h-4zM53.405 18.938c0 0 0.437-1.157 2.064-5.594-0.032 0.032 0.437-1.157 0.688-1.907l0.374 1.72c0.968 4.781 1.189 5.781 1.189 5.781-0.813 0-3.283 0-4.315 0z"></path>
                                </svg></div>
                            <div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
                                    <path d="M35.255 12.078h-2.396c-0.229 0-0.444 0.114-0.572 0.303l-3.306 4.868-1.4-4.678c-0.088-0.292-0.358-0.493-0.663-0.493h-2.355c-0.284 0-0.485 0.28-0.393 0.548l2.638 7.745-2.481 3.501c-0.195 0.275 0.002 0.655 0.339 0.655h2.394c0.227 0 0.439-0.111 0.569-0.297l7.968-11.501c0.191-0.275-0.006-0.652-0.341-0.652zM19.237 16.718c-0.23 1.362-1.311 2.276-2.691 2.276-0.691 0-1.245-0.223-1.601-0.644-0.353-0.417-0.485-1.012-0.374-1.674 0.214-1.35 1.313-2.294 2.671-2.294 0.677 0 1.227 0.225 1.589 0.65 0.365 0.428 0.509 1.027 0.404 1.686zM22.559 12.078h-2.384c-0.204 0-0.378 0.148-0.41 0.351l-0.104 0.666-0.166-0.241c-0.517-0.749-1.667-1-2.817-1-2.634 0-4.883 1.996-5.321 4.796-0.228 1.396 0.095 2.731 0.888 3.662 0.727 0.856 1.765 1.212 3.002 1.212 2.123 0 3.3-1.363 3.3-1.363l-0.106 0.662c-0.040 0.252 0.155 0.479 0.41 0.479h2.147c0.341 0 0.63-0.247 0.684-0.584l1.289-8.161c0.040-0.251-0.155-0.479-0.41-0.479zM8.254 12.135c-0.272 1.787-1.636 1.787-2.957 1.787h-0.751l0.527-3.336c0.031-0.202 0.205-0.35 0.41-0.35h0.345c0.899 0 1.747 0 2.185 0.511 0.262 0.307 0.341 0.761 0.242 1.388zM7.68 7.473h-4.979c-0.341 0-0.63 0.248-0.684 0.584l-2.013 12.765c-0.040 0.252 0.155 0.479 0.41 0.479h2.378c0.34 0 0.63-0.248 0.683-0.584l0.543-3.444c0.053-0.337 0.343-0.584 0.683-0.584h1.575c3.279 0 5.172-1.587 5.666-4.732 0.223-1.375 0.009-2.456-0.635-3.212-0.707-0.832-1.962-1.272-3.628-1.272zM60.876 7.823l-2.043 12.998c-0.040 0.252 0.155 0.479 0.41 0.479h2.055c0.34 0 0.63-0.248 0.683-0.584l2.015-12.765c0.040-0.252-0.155-0.479-0.41-0.479h-2.299c-0.205 0.001-0.379 0.148-0.41 0.351zM54.744 16.718c-0.23 1.362-1.311 2.276-2.691 2.276-0.691 0-1.245-0.223-1.601-0.644-0.353-0.417-0.485-1.012-0.374-1.674 0.214-1.35 1.313-2.294 2.671-2.294 0.677 0 1.227 0.225 1.589 0.65 0.365 0.428 0.509 1.027 0.404 1.686zM58.066 12.078h-2.384c-0.204 0-0.378 0.148-0.41 0.351l-0.104 0.666-0.167-0.241c-0.516-0.749-1.667-1-2.816-1-2.634 0-4.883 1.996-5.321 4.796-0.228 1.396 0.095 2.731 0.888 3.662 0.727 0.856 1.765 1.212 3.002 1.212 2.123 0 3.3-1.363 3.3-1.363l-0.106 0.662c-0.040 0.252 0.155 0.479 0.41 0.479h2.147c0.341 0 0.63-0.247 0.684-0.584l1.289-8.161c0.040-0.252-0.156-0.479-0.41-0.479zM43.761 12.135c-0.272 1.787-1.636 1.787-2.957 1.787h-0.751l0.527-3.336c0.031-0.202 0.205-0.35 0.41-0.35h0.345c0.899 0 1.747 0 2.185 0.511 0.261 0.307 0.34 0.761 0.241 1.388zM43.187 7.473h-4.979c-0.341 0-0.63 0.248-0.684 0.584l-2.013 12.765c-0.040 0.252 0.156 0.479 0.41 0.479h2.554c0.238 0 0.441-0.173 0.478-0.408l0.572-3.619c0.053-0.337 0.343-0.584 0.683-0.584h1.575c3.279 0 5.172-1.587 5.666-4.732 0.223-1.375 0.009-2.456-0.635-3.212-0.707-0.832-1.962-1.272-3.627-1.272z"></path>
                                </svg></div>
                            <div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
                                    <path d="M7.114 14.656c-1.375-0.5-2.125-0.906-2.125-1.531 0-0.531 0.437-0.812 1.188-0.812 1.437 0 2.875 0.531 3.875 1.031l0.563-3.5c-0.781-0.375-2.406-1-4.656-1-1.594 0-2.906 0.406-3.844 1.188-1 0.812-1.5 2-1.5 3.406 0 2.563 1.563 3.688 4.125 4.594 1.625 0.594 2.188 1 2.188 1.656 0 0.625-0.531 0.969-1.5 0.969-1.188 0-3.156-0.594-4.437-1.343l-0.563 3.531c1.094 0.625 3.125 1.281 5.25 1.281 1.688 0 3.063-0.406 4.031-1.157 1.063-0.843 1.594-2.062 1.594-3.656-0.001-2.625-1.595-3.719-4.188-4.657zM21.114 9.125h-3v-4.219l-4.031 0.656-0.563 3.563-1.437 0.25-0.531 3.219h1.937v6.844c0 1.781 0.469 3 1.375 3.75 0.781 0.625 1.907 0.938 3.469 0.938 1.219 0 1.937-0.219 2.468-0.344v-3.688c-0.282 0.063-0.938 0.22-1.375 0.22-0.906 0-1.313-0.5-1.313-1.563v-6.156h2.406l0.595-3.469zM30.396 9.031c-0.313-0.062-0.594-0.093-0.876-0.093-1.312 0-2.374 0.687-2.781 1.937l-0.313-1.75h-4.093v14.719h4.687v-9.563c0.594-0.719 1.437-0.968 2.563-0.968 0.25 0 0.5 0 0.812 0.062v-4.344zM33.895 2.719c-1.375 0-2.468 1.094-2.468 2.469s1.094 2.5 2.468 2.5 2.469-1.124 2.469-2.5-1.094-2.469-2.469-2.469zM36.239 23.844v-14.719h-4.687v14.719h4.687zM49.583 10.468c-0.843-1.094-2-1.625-3.469-1.625-1.343 0-2.531 0.563-3.656 1.75l-0.25-1.469h-4.125v20.155l4.688-0.781v-4.719c0.719 0.219 1.469 0.344 2.125 0.344 1.157 0 2.876-0.313 4.188-1.75 1.281-1.375 1.907-3.5 1.907-6.313 0-2.499-0.469-4.405-1.407-5.593zM45.677 19.532c-0.375 0.687-0.969 1.094-1.625 1.094-0.468 0-0.906-0.093-1.281-0.281v-7c0.812-0.844 1.531-0.938 1.781-0.938 1.188 0 1.781 1.313 1.781 3.812 0.001 1.437-0.219 2.531-0.656 3.313zM62.927 10.843c-1.032-1.312-2.563-2-4.501-2-4 0-6.468 2.938-6.468 7.688 0 2.625 0.656 4.625 1.968 5.875 1.157 1.157 2.844 1.719 5.032 1.719 2 0 3.844-0.469 5-1.251l-0.501-3.219c-1.157 0.625-2.5 0.969-4 0.969-0.906 0-1.532-0.188-1.969-0.594-0.5-0.406-0.781-1.094-0.875-2.062h7.75c0.031-0.219 0.062-1.281 0.062-1.625 0.001-2.344-0.5-4.188-1.499-5.5zM56.583 15.094c0.125-2.093 0.687-3.062 1.75-3.062s1.625 1 1.687 3.062h-3.437z"></path>
                                </svg></div>
                            <div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
                                    <path d="M42.667-0c-4.099 0-7.836 1.543-10.667 4.077-2.831-2.534-6.568-4.077-10.667-4.077-8.836 0-16 7.163-16 16s7.164 16 16 16c4.099 0 7.835-1.543 10.667-4.077 2.831 2.534 6.568 4.077 10.667 4.077 8.837 0 16-7.163 16-16s-7.163-16-16-16zM11.934 19.828l0.924-5.809-2.112 5.809h-1.188v-5.809l-1.056 5.809h-1.584l1.32-7.657h2.376v4.753l1.716-4.753h2.508l-1.32 7.657h-1.585zM19.327 18.244c-0.088 0.528-0.178 0.924-0.264 1.188v0.396h-1.32v-0.66c-0.353 0.528-0.924 0.792-1.716 0.792-0.442 0-0.792-0.132-1.056-0.396-0.264-0.351-0.396-0.792-0.396-1.32 0-0.792 0.218-1.364 0.66-1.716 0.614-0.44 1.364-0.66 2.244-0.66h0.66v-0.396c0-0.351-0.353-0.528-1.056-0.528-0.442 0-1.012 0.088-1.716 0.264 0.086-0.351 0.175-0.792 0.264-1.32 0.703-0.264 1.32-0.396 1.848-0.396 1.496 0 2.244 0.616 2.244 1.848 0 0.353-0.046 0.749-0.132 1.188-0.089 0.616-0.179 1.188-0.264 1.716zM24.079 15.076c-0.264-0.086-0.66-0.132-1.188-0.132s-0.792 0.177-0.792 0.528c0 0.177 0.044 0.31 0.132 0.396l0.528 0.264c0.792 0.442 1.188 1.012 1.188 1.716 0 1.409-0.838 2.112-2.508 2.112-0.792 0-1.366-0.044-1.716-0.132 0.086-0.351 0.175-0.836 0.264-1.452 0.703 0.177 1.188 0.264 1.452 0.264 0.614 0 0.924-0.175 0.924-0.528 0-0.175-0.046-0.308-0.132-0.396-0.178-0.175-0.396-0.308-0.66-0.396-0.792-0.351-1.188-0.924-1.188-1.716 0-1.407 0.792-2.112 2.376-2.112 0.792 0 1.32 0.045 1.584 0.132l-0.265 1.451zM27.512 15.208h-0.924c0 0.442-0.046 0.838-0.132 1.188 0 0.088-0.022 0.264-0.066 0.528-0.046 0.264-0.112 0.442-0.198 0.528v0.528c0 0.353 0.175 0.528 0.528 0.528 0.175 0 0.35-0.044 0.528-0.132l-0.264 1.452c-0.264 0.088-0.66 0.132-1.188 0.132-0.881 0-1.32-0.44-1.32-1.32 0-0.528 0.086-1.099 0.264-1.716l0.66-4.225h1.584l-0.132 0.924h0.792l-0.132 1.585zM32.66 17.32h-3.3c0 0.442 0.086 0.749 0.264 0.924 0.264 0.264 0.66 0.396 1.188 0.396s1.1-0.175 1.716-0.528l-0.264 1.584c-0.442 0.177-1.012 0.264-1.716 0.264-1.848 0-2.772-0.924-2.772-2.773 0-1.142 0.264-2.024 0.792-2.64 0.528-0.703 1.188-1.056 1.98-1.056 0.703 0 1.274 0.22 1.716 0.66 0.35 0.353 0.528 0.881 0.528 1.584 0.001 0.617-0.046 1.145-0.132 1.585zM35.3 16.132c-0.264 0.97-0.484 2.201-0.66 3.697h-1.716l0.132-0.396c0.35-2.463 0.614-4.4 0.792-5.809h1.584l-0.132 0.924c0.264-0.44 0.528-0.703 0.792-0.792 0.264-0.264 0.528-0.308 0.792-0.132-0.088 0.088-0.31 0.706-0.66 1.848-0.353-0.086-0.661 0.132-0.925 0.66zM41.241 19.697c-0.353 0.177-0.838 0.264-1.452 0.264-0.881 0-1.584-0.308-2.112-0.924-0.528-0.528-0.792-1.32-0.792-2.376 0-1.32 0.35-2.42 1.056-3.3 0.614-0.879 1.496-1.32 2.64-1.32 0.44 0 1.056 0.132 1.848 0.396l-0.264 1.584c-0.528-0.264-1.012-0.396-1.452-0.396-0.707 0-1.235 0.264-1.584 0.792-0.353 0.442-0.528 1.144-0.528 2.112 0 0.616 0.132 1.056 0.396 1.32 0.264 0.353 0.614 0.528 1.056 0.528 0.44 0 0.924-0.132 1.452-0.396l-0.264 1.717zM47.115 15.868c-0.046 0.264-0.066 0.484-0.066 0.66-0.088 0.442-0.178 1.035-0.264 1.782-0.088 0.749-0.178 1.254-0.264 1.518h-1.32v-0.66c-0.353 0.528-0.924 0.792-1.716 0.792-0.442 0-0.792-0.132-1.056-0.396-0.264-0.351-0.396-0.792-0.396-1.32 0-0.792 0.218-1.364 0.66-1.716 0.614-0.44 1.32-0.66 2.112-0.66h0.66c0.086-0.086 0.132-0.218 0.132-0.396 0-0.351-0.353-0.528-1.056-0.528-0.442 0-1.012 0.088-1.716 0.264 0-0.351 0.086-0.792 0.264-1.32 0.703-0.264 1.32-0.396 1.848-0.396 1.496 0 2.245 0.616 2.245 1.848 0.001 0.089-0.021 0.264-0.065 0.529zM49.69 16.132c-0.178 0.528-0.396 1.762-0.66 3.697h-1.716l0.132-0.396c0.35-1.935 0.614-3.872 0.792-5.809h1.584c0 0.353-0.046 0.66-0.132 0.924 0.264-0.44 0.528-0.703 0.792-0.792 0.35-0.175 0.614-0.218 0.792-0.132-0.353 0.442-0.574 1.056-0.66 1.848-0.353-0.086-0.66 0.132-0.925 0.66zM54.178 19.828l0.132-0.528c-0.353 0.442-0.838 0.66-1.452 0.66-0.707 0-1.188-0.218-1.452-0.66-0.442-0.614-0.66-1.232-0.66-1.848 0-1.142 0.308-2.067 0.924-2.773 0.44-0.703 1.056-1.056 1.848-1.056 0.528 0 1.056 0.264 1.584 0.792l0.264-2.244h1.716l-1.32 7.657h-1.585zM16.159 17.98c0 0.442 0.175 0.66 0.528 0.66 0.35 0 0.614-0.132 0.792-0.396 0.264-0.264 0.396-0.66 0.396-1.188h-0.397c-0.881 0-1.32 0.31-1.32 0.924zM31.076 15.076c-0.088 0-0.178-0.043-0.264-0.132h-0.264c-0.528 0-0.881 0.353-1.056 1.056h1.848v-0.396l-0.132-0.264c-0.001-0.086-0.047-0.175-0.133-0.264zM43.617 17.98c0 0.442 0.175 0.66 0.528 0.66 0.35 0 0.614-0.132 0.792-0.396 0.264-0.264 0.396-0.66 0.396-1.188h-0.396c-0.881 0-1.32 0.31-1.32 0.924zM53.782 15.076c-0.353 0-0.66 0.22-0.924 0.66-0.178 0.264-0.264 0.749-0.264 1.452 0 0.792 0.264 1.188 0.792 1.188 0.35 0 0.66-0.175 0.924-0.528 0.264-0.351 0.396-0.879 0.396-1.584-0.001-0.792-0.311-1.188-0.925-1.188z"></path>
                                </svg></div>
                            <div class="payment-icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 32">
                                    <path d="M13.043 8.356c-0.46 0-0.873 0.138-1.24 0.413s-0.662 0.681-0.885 1.217c-0.223 0.536-0.334 1.112-0.334 1.727 0 0.568 0.119 0.99 0.358 1.265s0.619 0.413 1.141 0.413c0.508 0 1.096-0.131 1.765-0.393v1.327c-0.693 0.262-1.389 0.393-2.089 0.393-0.884 0-1.572-0.254-2.063-0.763s-0.736-1.229-0.736-2.161c0-0.892 0.181-1.712 0.543-2.462s0.846-1.32 1.452-1.709 1.302-0.584 2.089-0.584c0.435 0 0.822 0.038 1.159 0.115s0.7 0.217 1.086 0.421l-0.616 1.276c-0.369-0.201-0.673-0.333-0.914-0.398s-0.478-0.097-0.715-0.097zM19.524 12.842h-2.47l-0.898 1.776h-1.671l3.999-7.491h1.948l0.767 7.491h-1.551l-0.125-1.776zM19.446 11.515l-0.136-1.786c-0.035-0.445-0.052-0.876-0.052-1.291v-0.184c-0.153 0.408-0.343 0.84-0.569 1.296l-0.982 1.965h1.739zM27.049 12.413c0 0.711-0.257 1.273-0.773 1.686s-1.213 0.62-2.094 0.62c-0.769 0-1.389-0.153-1.859-0.46v-1.398c0.672 0.367 1.295 0.551 1.869 0.551 0.39 0 0.694-0.072 0.914-0.217s0.329-0.343 0.329-0.595c0-0.147-0.024-0.275-0.070-0.385s-0.114-0.214-0.201-0.309c-0.087-0.095-0.303-0.269-0.648-0.52-0.481-0.337-0.818-0.67-1.013-1s-0.293-0.685-0.293-1.066c0-0.439 0.108-0.831 0.324-1.176s0.523-0.614 0.922-0.806 0.857-0.288 1.376-0.288c0.755 0 1.446 0.168 2.073 0.505l-0.569 1.189c-0.543-0.252-1.044-0.378-1.504-0.378-0.289 0-0.525 0.077-0.71 0.23s-0.276 0.355-0.276 0.607c0 0.207 0.058 0.389 0.172 0.543s0.372 0.36 0.773 0.615c0.421 0.272 0.736 0.572 0.945 0.9s0.313 0.712 0.313 1.151zM33.969 14.618h-1.597l0.7-3.22h-2.46l-0.7 3.22h-1.592l1.613-7.46h1.597l-0.632 2.924h2.459l0.632-2.924h1.592l-1.613 7.46zM46.319 9.831c0 0.963-0.172 1.824-0.517 2.585s-0.816 1.334-1.415 1.722c-0.598 0.388-1.288 0.582-2.067 0.582-0.891 0-1.587-0.251-2.086-0.753s-0.749-1.198-0.749-2.090c0-0.902 0.172-1.731 0.517-2.488s0.82-1.338 1.425-1.743c0.605-0.405 1.306-0.607 2.099-0.607 0.888 0 1.575 0.245 2.063 0.735s0.73 1.176 0.73 2.056zM43.395 8.356c-0.421 0-0.808 0.155-1.159 0.467s-0.627 0.739-0.828 1.283-0.3 1.135-0.3 1.771c0 0.5 0.116 0.877 0.348 1.133s0.558 0.383 0.979 0.383 0.805-0.148 1.151-0.444c0.346-0.296 0.617-0.714 0.812-1.255s0.292-1.148 0.292-1.822c0-0.483-0.113-0.856-0.339-1.12-0.227-0.264-0.546-0.396-0.957-0.396zM53.427 14.618h-1.786l-1.859-5.644h-0.031l-0.021 0.163c-0.111 0.735-0.227 1.391-0.344 1.97l-0.757 3.511h-1.436l1.613-7.46h1.864l1.775 5.496h0.021c0.042-0.259 0.109-0.628 0.203-1.107s0.407-1.942 0.94-4.388h1.43l-1.613 7.461zM13.296 20.185c0 0.98-0.177 1.832-0.532 2.556s-0.868 1.274-1.539 1.652c-0.672 0.379-1.464 0.568-2.376 0.568h-2.449l1.678-7.68h2.15c0.977 0 1.733 0.25 2.267 0.751s0.801 1.219 0.801 2.154zM8.925 23.615c0.536 0 1.003-0.133 1.401-0.399s0.71-0.657 0.934-1.174c0.225-0.517 0.337-1.108 0.337-1.773 0-0.54-0.131-0.95-0.394-1.232s-0.64-0.423-1.132-0.423h-0.624l-1.097 5.001h0.575zM18.64 24.96h-4.436l1.678-7.68h4.442l-0.293 1.334h-2.78l-0.364 1.686h2.59l-0.299 1.334h-2.59l-0.435 1.98h2.78l-0.293 1.345zM20.509 24.96l1.678-7.68h1.661l-1.39 6.335h2.78l-0.294 1.345h-4.436zM26.547 24.96l1.694-7.68h1.656l-1.694 7.68h-1.656zM33.021 23.389c0.282-0.774 0.481-1.27 0.597-1.487l2.346-4.623h1.716l-4.061 7.68h-1.814l-0.689-7.68h1.602l0.277 4.623c0.015 0.157 0.022 0.39 0.022 0.699-0.007 0.361-0.018 0.623-0.033 0.788h0.038zM41.678 24.96h-4.437l1.678-7.68h4.442l-0.293 1.334h-2.78l-0.364 1.686h2.59l-0.299 1.334h-2.59l-0.435 1.98h2.78l-0.293 1.345zM45.849 22.013l-0.646 2.947h-1.656l1.678-7.68h1.949c0.858 0 1.502 0.179 1.933 0.536s0.646 0.881 0.646 1.571c0 0.554-0.15 1.029-0.451 1.426s-0.733 0.692-1.298 0.885l1.417 3.263h-1.803l-1.124-2.947h-0.646zM46.137 20.689h0.424c0.474 0 0.843-0.1 1.108-0.3s0.396-0.504 0.396-0.914c0-0.287-0.086-0.502-0.258-0.646s-0.442-0.216-0.812-0.216h-0.402l-0.456 2.076zM53.712 20.39l2.031-3.11h1.857l-3.355 4.744-0.646 2.936h-1.645l0.646-2.936-1.281-4.744h1.694l0.7 3.11z"></path>
                                </svg></div>
                        </div>
                    </div>
                    
                </div>
            </div> <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle" id="top-link"><i class="icon-angle-up"></i></a>
        </footer>
    </div>
    <div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
        <div class="sidebar-menu no-scrollbar ">
            <ul class="nav nav-sidebar nav-vertical nav-uppercase">
                <li class="header-search-form search-form html relative has-icon">
                    <div class="header-search-form-wrapper">
                        <div class="searchform-wrapper ux-search-box relative is-normal">
                            <form role="search" method="get" class="searchform" action="">
                                @csrf
                                <div class="flex-row relative">
                                    <div class="flex-col flex-grow"> <label class="screen-reader-text" for="woocommerce-product-search-field-2">Tìm kiếm:</label> <input type="search" id="woocommerce-product-search-field-2" class="search-field mb-0" placeholder="Tìm kiếm&hellip;" value="" name="s" /> <input type="hidden" name="key" value="" /></div>
                                    <div class="flex-col"> <button type="submit" value="Tìm kiếm" class="ux-search-submit submit-button buttons icon mb-0"> <i class="icon-search"></i> </button></div>
                                </div>
                                <div class="live-search-results text-left z-top"></div>
                            </form>
                        </div>
                    </div>
                </li>
                <div id="mega-menu-wrap-primary_mobile" class="mega-menu-wrap">
                    <div class="mega-menu-toggle">
                        <div class="mega-toggle-blocks-left"></div>
                        <div class="mega-toggle-blocks-center"></div>
                        <div class="mega-toggle-blocks-right">
                            <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0' id='mega-toggle-block-0'><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false"> <span class="mega-toggle-animated-box"> <span class="mega-toggle-animated-inner"></span> </span> </button></div>
                        </div>
                    </div>
                    <ul id="mega-menu-primary_mobile" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="click" data-effect="slide" data-effect-speed="200" data-effect-mobile="slide" data-effect-speed-mobile="400" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-current_page_item mega-menu-item-home mega-align-bottom-left mega-menu-flyout mega-menu-item-5436' id='mega-menu-item-5436'><a class="mega-menu-link" href="{{ route('homeFe') }}" aria-current="page" tabindex="0">Trang chủ</a></li>

                        @if(!empty($menu) && $menu->count()>0)

                        @foreach($menu as $val)

                        @if($val->id != 7)
                        <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-menu-megamenu mega-align-bottom-left mega-menu-megamenu mega-menu-item-10102' id='mega-menu-item-10102'><a class="mega-menu-link" href="{{ route('details', $val->link) }}" aria-haspopup="true" aria-expanded="false" tabindex="0">{{ $val->name }}<span class="mega-indicator" tabindex="0" role="button" aria-label="SẢN PHẨM submenu"></span></a>
                            @if(!empty($parent_menu)  && $parent_menu->count()>0)
                            @foreach($parent_menu as $value) 
                            <?php 
                                                
                                $parent_menu = App\Models\groupProduct::where('parent_id', $val->id)->select('name', 'link')->get();
                            ?>  
                            <ul class="mega-sub-menu">
                                <li class='mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-menu-item-has-children mega-collapse-children mega-menu-columns-2-of-6 mega-menu-item-5438' id='mega-menu-item-5438'><a href="{{ route('details', $value->link)  }}" class="mega-menu-link">{{ $value->name }}<span class="mega-indicator" tabindex="0" role="button" aria-label="SẢN PHẨM ĐÈN LED submenu"></span></a>
                                    <ul class="mega-sub-menu">


                                        <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5443' id='mega-menu-item-5443'><a class="menu-image-title-after menu-image-not-hovered mega-menu-link" href="{{ route('details', 'den-led-tuyp-1')  }}"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMSIgaGVpZ2h0PSIzMSIgdmlld0JveD0iMCAwIDMxIDMxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" width="31" height="31" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-18.png" class="menu-image menu-image-title-after" alt="" /><span class="menu-image-title-after menu-image-title">Đèn LED Tuýp</span></a>
                                        </li>

                                        <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5442' id='mega-menu-item-5442'><a class="menu-image-title-after menu-image-not-hovered mega-menu-link" href="{{ route('details', 'den-led-am-tran-1')  }}"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMSIgaGVpZ2h0PSIzMSIgdmlld0JveD0iMCAwIDMxIDMxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" width="31" height="31" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-19.png" class="menu-image menu-image-title-after" alt="" /><span class="menu-image-title-after menu-image-title">Đèn LED âm trần</span></a></li>

                                        <li class='mega-menu-item mega-menu-item-type-taxonomy mega-menu-item-object-product_cat mega-menu-item-5452' id='mega-menu-item-5452'><a class="menu-image-title-after menu-image-not-hovered mega-menu-link" href="{{ route('details', 'den-led-op-tran-1')  }}"><img data-lazyloaded="1" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzMSIgaGVpZ2h0PSIzMSIgdmlld0JveD0iMCAwIDMxIDMxIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjY2ZkNGRiIi8+PC9zdmc+" width="31" height="31" data-src="https://tlclighting.com.vn/wp-content/uploads/2020/09/HOME-PAGE-20.png" class="menu-image menu-image-title-after" alt="" /><span class="menu-image-title-after menu-image-title">Đèn LED Ốp Trần</span></a></li>
                                        
                                    </ul>
                                </li>
                               
                            </ul>
                            @endforeach
                            @endif
                        </li>
                        @endif

                        @endforeach

                        @endif
                        
                    </ul>
                </div>
                
            </ul>
        </div>
    </div>


    <div id="button-contact-vr" class="">
        <div id="gom-all-in-one">
            <div id="contact-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle"> <a href="{{ $contact->messenger??'#' }}"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="wp-content/uploads/2022/04/messenger-icon-min.png" /> </a></div>
                </div>
            </div>
            <div id="zalo-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle"> <a target="_blank" href="{{ $contact->zalo??'#' }}"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="wp-content/plugins/button-contact-vr/img/zalo.png" /> </a></div>
                </div>
            </div>
            <div id="phone-vr" class="button-contact">
                <div class="phone-vr">
                    <div class="phone-vr-circle-fill"></div>
                    <div class="phone-vr-img-circle"> <a href="tel:{{ $contact->hotline??'#' }}"> <img data-lazyloaded="1" src="data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=" data-src="wp-content/plugins/button-contact-vr/img/phone.png" /> </a></div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .phone-bar a,#phone-vr .phone-vr-circle-fill,#phone-vr .phone-vr-img-circle,#phone-vr .phone-bar a {
                                background-color: #81d742;
                            }
                            #phone-vr .phone-vr-circle-fill {
                                opacity: 0.7;box-shadow: 0 0 0 0 #81d742;
                            }
    </style>
    <style>
        #contact-vr .phone-vr-circle-fill,#contact-vr .phone-vr-img-circle {
                        background-color: #0072ff;
                    }
                    #contact-vr .phone-vr-circle-fill {
                        opacity: 0.7;box-shadow: 0 0 0 0 #0072ff;
                    }
    </style>
    <style>
        #button-contact-vr {transform: scale(0.9);}
    </style>

    <script type="text/javascript">
        

        $(function() {
            $("#kws").autocomplete({

                minLength: 1,
                
                source: function(request, response) {
                    $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }


                    });
                    $.ajax({

                        url: "{{  route('sugest-click')}}",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            product:$('#kws').val()
                        },
                        dataType: "json",
                        success: function (data) {
                            var items = data;

                            response(items);

                            $('#ui-id-1').html();

                            $('#ui-id-1').html(data);
                        
                        }
                    });
                },
                html:true,
            });
        });



    </script>
    <script
  src="https://code.jquery.com/jquery-migrate-3.4.1.min.js"
  integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok="
  crossorigin="anonymous"></script>
    <script type="text/javascript" src="data:text/javascript;base64,JCgnLmR2bHMtc3VibWl0JykuY2xpY2soZnVuY3Rpb24oKXskKCIudHRiaDAyMyIpLmFkZENsYXNzKCJoaWRlYmgiKX0pOyQoJy5kdmxzX3Jlc3VsdF93cmFwJykuY2xpY2soZnVuY3Rpb24oKXskKCIudHRiaDAyMyIpLmFkZENsYXNzKCJoaWRlYmgyIil9KQ==" defer></script>
    <div id="login-form-popup" class="lightbox-content mfp-hide">
        <div class="woocommerce-notices-wrapper"></div>
        <div class="account-container lightbox-inner">
            <div class="account-login-inner">
                <h3 class="uppercase">Đăng nhập</h3>
                <form class="woocommerce-form woocommerce-form-login login" method="post">
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> <label for="username">Tên tài khoản hoặc địa chỉ email&nbsp;<span class="required">*</span></label> <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="" /></p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide"> <label for="password">Mật khẩu&nbsp;<span class="required">*</span></label> <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" /></p>
                    <p class="form-row"> <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme"> <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span>Ghi nhớ mật khẩu</span> </label> <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="be5d9f1b2c" /><input type="hidden" name="_wp_http_referer" value="/" /> <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="Đăng nhập">Đăng nhập</button></p>
                    <p class="woocommerce-LostPassword lost_password"> <a href="tai-khoan/lost-password/index.html">Quên mật khẩu?</a></p>
                </form>
            </div>
        </div>
    </div>
    <div class="sgpb-main-popup-data-container-7831" style="position:fixed;opacity: 0;filter: opacity(0%);transform: scale(0);">
        <div class="sg-popup-builder-content" id="sg-popup-content-wrapper-7831" data-id="7831" data-events="[{&quot;param&quot;:&quot;click&quot;,&quot;operator&quot;:&quot;defaultClickClassName&quot;,&quot;value&quot;:&quot;sg-popup-id-7831&quot;,&quot;hiddenOption&quot;:[]}]" data-options="YTo1ODp7czoyNjoic2dwYi1mbG9hdGluZy1idXR0b24tc3R5bGUiO3M6NjoiY29ybmVyIjtzOjI5OiJzZ3BiLWZsb2F0aW5nLWJ1dHRvbi1wb3NpdGlvbiI7czoxMjoiYm90dG9tLXJpZ2h0IjtzOjk6InNncGItdHlwZSI7czo0OiJodG1sIjtzOjE1OiJzZ3BiLWlzLXByZXZpZXciO3M6MToiMCI7czoxNDoic2dwYi1pcy1hY3RpdmUiO3M6NzoiY2hlY2tlZCI7czozNDoic2dwYi1iZWhhdmlvci1hZnRlci1zcGVjaWFsLWV2ZW50cyI7YToxOntpOjA7YToxOntpOjA7YTozOntzOjU6InBhcmFtIjtzOjE0OiJjb250YWN0LWZvcm0tNyI7czo4OiJvcGVyYXRvciI7czoxMDoib3Blbi1wb3B1cCI7czo1OiJ2YWx1ZSI7YToxOntpOjc4NTQ7czozNzoiS8OtY2ggaG/huqF0IGLhuqNvIGjDoG5oIHRow6BuaCBjw7RuZyI7fX19fXM6MjA6InNncGItY29udGVudC1wYWRkaW5nIjtzOjE6IjAiO3M6MTg6InNncGItcG9wdXAtei1pbmRleCI7czo0OiI5OTk5IjtzOjE3OiJzZ3BiLXBvcHVwLXRoZW1lcyI7czoxMjoic2dwYi10aGVtZS0zIjtzOjE5OiJzZ3BiLWRpc2FibGUtYm9yZGVyIjtzOjI6Im9uIjtzOjI1OiJzZ3BiLW92ZXJsYXktY3VzdG9tLWNsYXNzIjtzOjE4OiJzZ3BiLXBvcHVwLW92ZXJsYXkiO3M6MTg6InNncGItb3ZlcmxheS1jb2xvciI7czo3OiIjMDAwMDAwIjtzOjIwOiJzZ3BiLW92ZXJsYXktb3BhY2l0eSI7czo0OiIwLjY5IjtzOjI1OiJzZ3BiLWNvbnRlbnQtY3VzdG9tLWNsYXNzIjtzOjE2OiJzZy1wb3B1cC1jb250ZW50IjtzOjI2OiJzZ3BiLWJhY2tncm91bmQtaW1hZ2UtbW9kZSI7czo5OiJuby1yZXBlYXQiO3M6MTI6InNncGItZXNjLWtleSI7czoyOiJvbiI7czoyNDoic2dwYi1lbmFibGUtY2xvc2UtYnV0dG9uIjtzOjI6Im9uIjtzOjIzOiJzZ3BiLWNsb3NlLWJ1dHRvbi1kZWxheSI7czoxOiIwIjtzOjI2OiJzZ3BiLWNsb3NlLWJ1dHRvbi1wb3NpdGlvbiI7czo4OiJ0b3BSaWdodCI7czoyNDoic2dwYi1idXR0b24tcG9zaXRpb24tdG9wIjtzOjI6IjE1IjtzOjI2OiJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi1yaWdodCI7czoyOiIxNSI7czoyNzoic2dwYi1idXR0b24tcG9zaXRpb24tYm90dG9tIjtzOjE6IjAiO3M6MjU6InNncGItYnV0dG9uLXBvc2l0aW9uLWxlZnQiO3M6MDoiIjtzOjE3OiJzZ3BiLWJ1dHRvbi1pbWFnZSI7czo2MzoiaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDMvY2xvc2UucG5nIjtzOjIzOiJzZ3BiLWJ1dHRvbi1pbWFnZS13aWR0aCI7czoyOiIyNSI7czoyNDoic2dwYi1idXR0b24taW1hZ2UtaGVpZ2h0IjtzOjI6IjI1IjtzOjE3OiJzZ3BiLWJvcmRlci1jb2xvciI7czo3OiIjMDAwMDAwIjtzOjE4OiJzZ3BiLWJvcmRlci1yYWRpdXMiO3M6MToiMCI7czoyMzoic2dwYi1ib3JkZXItcmFkaXVzLXR5cGUiO3M6MToiJSI7czoxNjoic2dwYi1idXR0b24tdGV4dCI7czo1OiJDbG9zZSI7czoxODoic2dwYi1vdmVybGF5LWNsaWNrIjtzOjI6Im9uIjtzOjI1OiJzZ3BiLXBvcHVwLWRpbWVuc2lvbi1tb2RlIjtzOjEwOiJjdXN0b21Nb2RlIjtzOjEwOiJzZ3BiLXdpZHRoIjtzOjU6IjUwMHB4IjtzOjExOiJzZ3BiLWhlaWdodCI7czo1OiIzMDBweCI7czozMzoic2dwYi1yZXNwb25zaXZlLWRpbWVuc2lvbi1tZWFzdXJlIjtzOjQ6ImF1dG8iO3M6MTQ6InNncGItbWF4LXdpZHRoIjtzOjA6IiI7czoxNToic2dwYi1tYXgtaGVpZ2h0IjtzOjA6IiI7czoxNDoic2dwYi1taW4td2lkdGgiO3M6NToiMzAwcHgiO3M6MTU6InNncGItbWluLWhlaWdodCI7czo1OiIzMDBweCI7czoxOToic2dwYi1vcGVuLWFuaW1hdGlvbiI7czoyOiJvbiI7czoyNjoic2dwYi1vcGVuLWFuaW1hdGlvbi1lZmZlY3QiO3M6MTA6InNncGItcHVsc2UiO3M6MjU6InNncGItb3Blbi1hbmltYXRpb24tc3BlZWQiO3M6MzoiMC4zIjtzOjIwOiJzZ3BiLWNsb3NlLWFuaW1hdGlvbiI7czoyOiJvbiI7czoyNzoic2dwYi1jbG9zZS1hbmltYXRpb24tZWZmZWN0IjtzOjEwOiJzZ3BiLXB1bHNlIjtzOjI2OiJzZ3BiLWNsb3NlLWFuaW1hdGlvbi1zcGVlZCI7czozOiIwLjUiO3M6MTY6InNncGItcG9wdXAtZml4ZWQiO3M6Mjoib24iO3M6MjU6InNncGItcG9wdXAtZml4ZWQtcG9zaXRpb24iO3M6MToiNSI7czoyNzoic2dwYi1kaXNhYmxlLXBhZ2Utc2Nyb2xsaW5nIjtzOjI6Im9uIjtzOjI5OiJzZ3BiLWVuYWJsZS1jb250ZW50LXNjcm9sbGluZyI7czoyOiJvbiI7czoxNjoic2dwYi1wb3B1cC1vcmRlciI7czoxOiIwIjtzOjE2OiJzZ3BiLXBvcHVwLWRlbGF5IjtzOjE6IjAiO3M6Nzoic2dwYi1qcyI7czoyOiJKUyI7czo4OiJzZ3BiLWNzcyI7czozOiJDU1MiO3M6MTI6InNncGItcG9zdC1pZCI7czo0OiI3ODMxIjtzOjI1OiJzZ3BiLWVuYWJsZS1wb3B1cC1vdmVybGF5IjtzOjI6Im9uIjtzOjIyOiJzZ3BiLWJ1dHRvbi1pbWFnZS1kYXRhIjtzOjYzOiJodHRwczovL3RsY2xpZ2h0aW5nLmNvbS52bi93cC1jb250ZW50L3VwbG9hZHMvMjAyMS8wMy9jbG9zZS5wbmciO3M6MjY6InNncGItYmFja2dyb3VuZC1pbWFnZS1kYXRhIjtzOjA6IiI7czoxNDoic2dwYkNvbmRpdGlvbnMiO047fQ==">
            <div class="sgpb-popup-builder-content-7831 sgpb-popup-builder-content-html">
                <div class="sgpb-main-html-content-wrapper">
                    <p>
                    <div role="form" class="wpcf7" id="wpcf7-f7829-o1" lang="vi" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form action="https://tlclighting.com.vn/#wpcf7-f7829-o1" method="post" class="wpcf7-form init demo" novalidate="novalidate">
                            <div style="display: none;"> <input type="hidden" name="_wpcf7" value="7829" /> <input type="hidden" name="_wpcf7_version" value="5.2.2" /> <input type="hidden" name="_wpcf7_locale" value="vi" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7829-o1" /> <input type="hidden" name="_wpcf7_container_post" value="0" /> <input type="hidden" name="_wpcf7_posted_data_hash" value="" /></div>
                            <div class="khbh01 parent">
                                <div class="child">
                                    <center class="khbh0101">QUÝ KHÁCH CÓ CHẮC CHẮN</center><br />
                                    <center class="khbh0101">KÍCH HOẠT BẢO HÀNH SẢN PHẨM?</center>
                                    </p>
                                    <div class="khbh011">
                                        <div class="khbh012"> <label class="sg-popup-close">TỪ CHỐI</label></div>
                                        <div class="khbh012"> <input type="submit" value="KÍCH HOẠT BẢO HÀNH ĐIỆN TỬ" class="wpcf7-form-control wpcf7-submit" /></div>
                                    </div>
                                    <p>
                                        <center class="khbh013" style=" font-style: italic; font-size: 17px; "><span>Hotline: 1800 6192 &emsp;</span><span> &ensp; Website: tlclighting.com.vn</span></center>
                                </div>
                            </div>
                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                        </form>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sgpb-main-popup-data-container-7854" style="position:fixed;opacity: 0;filter: opacity(0%);transform: scale(0);">
        <div class="sg-popup-builder-content" id="sg-popup-content-wrapper-7854" data-id="7854" data-events="[{&quot;param&quot;:&quot;click&quot;,&quot;operator&quot;:&quot;defaultClickClassName&quot;,&quot;value&quot;:&quot;sg-popup-id-7854&quot;,&quot;hiddenOption&quot;:[]}]" data-options="YTo1ODp7czoyNjoic2dwYi1mbG9hdGluZy1idXR0b24tc3R5bGUiO3M6NjoiY29ybmVyIjtzOjI5OiJzZ3BiLWZsb2F0aW5nLWJ1dHRvbi1wb3NpdGlvbiI7czoxMjoiYm90dG9tLXJpZ2h0IjtzOjk6InNncGItdHlwZSI7czo0OiJodG1sIjtzOjE1OiJzZ3BiLWlzLXByZXZpZXciO3M6MToiMCI7czoxNDoic2dwYi1pcy1hY3RpdmUiO3M6NzoiY2hlY2tlZCI7czozNDoic2dwYi1iZWhhdmlvci1hZnRlci1zcGVjaWFsLWV2ZW50cyI7YToxOntpOjA7YToxOntpOjA7YToyOntzOjU6InBhcmFtIjtzOjE0OiJjb250YWN0LWZvcm0tNyI7czo4OiJvcGVyYXRvciI7czoxNToic2VsZWN0X2JlaGF2aW9yIjt9fX1zOjIwOiJzZ3BiLWNvbnRlbnQtcGFkZGluZyI7czoxOiIwIjtzOjE4OiJzZ3BiLXBvcHVwLXotaW5kZXgiO3M6NDoiOTk5OSI7czoxNzoic2dwYi1wb3B1cC10aGVtZXMiO3M6MTI6InNncGItdGhlbWUtMyI7czoxOToic2dwYi1kaXNhYmxlLWJvcmRlciI7czoyOiJvbiI7czoyNToic2dwYi1vdmVybGF5LWN1c3RvbS1jbGFzcyI7czoxODoic2dwYi1wb3B1cC1vdmVybGF5IjtzOjE4OiJzZ3BiLW92ZXJsYXktY29sb3IiO3M6NzoiIzAwMDAwMCI7czoyMDoic2dwYi1vdmVybGF5LW9wYWNpdHkiO3M6NDoiMC42OCI7czoyNToic2dwYi1jb250ZW50LWN1c3RvbS1jbGFzcyI7czoxNjoic2ctcG9wdXAtY29udGVudCI7czoyNjoic2dwYi1iYWNrZ3JvdW5kLWltYWdlLW1vZGUiO3M6OToibm8tcmVwZWF0IjtzOjEyOiJzZ3BiLWVzYy1rZXkiO3M6Mjoib24iO3M6MjQ6InNncGItZW5hYmxlLWNsb3NlLWJ1dHRvbiI7czoyOiJvbiI7czoyMzoic2dwYi1jbG9zZS1idXR0b24tZGVsYXkiO3M6MToiMCI7czoyNjoic2dwYi1jbG9zZS1idXR0b24tcG9zaXRpb24iO3M6ODoidG9wUmlnaHQiO3M6MjQ6InNncGItYnV0dG9uLXBvc2l0aW9uLXRvcCI7czoyOiIxNSI7czoyNjoic2dwYi1idXR0b24tcG9zaXRpb24tcmlnaHQiO3M6MjoiMTUiO3M6Mjc6InNncGItYnV0dG9uLXBvc2l0aW9uLWJvdHRvbSI7czoxOiIwIjtzOjI1OiJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi1sZWZ0IjtzOjA6IiI7czoxNzoic2dwYi1idXR0b24taW1hZ2UiO3M6NjM6Imh0dHBzOi8vdGxjbGlnaHRpbmcuY29tLnZuL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDIxLzAzL2Nsb3NlLnBuZyI7czoyMzoic2dwYi1idXR0b24taW1hZ2Utd2lkdGgiO3M6MjoiMjUiO3M6MjQ6InNncGItYnV0dG9uLWltYWdlLWhlaWdodCI7czoyOiIyNSI7czoxNzoic2dwYi1ib3JkZXItY29sb3IiO3M6NzoiIzAwMDAwMCI7czoxODoic2dwYi1ib3JkZXItcmFkaXVzIjtzOjE6IjAiO3M6MjM6InNncGItYm9yZGVyLXJhZGl1cy10eXBlIjtzOjE6IiUiO3M6MTY6InNncGItYnV0dG9uLXRleHQiO3M6NToiQ2xvc2UiO3M6MTg6InNncGItb3ZlcmxheS1jbGljayI7czoyOiJvbiI7czoyNToic2dwYi1wb3B1cC1kaW1lbnNpb24tbW9kZSI7czoxMDoiY3VzdG9tTW9kZSI7czoxMDoic2dwYi13aWR0aCI7czo1OiI1MDBweCI7czoxMToic2dwYi1oZWlnaHQiO3M6NToiMzAwcHgiO3M6MzM6InNncGItcmVzcG9uc2l2ZS1kaW1lbnNpb24tbWVhc3VyZSI7czo0OiJhdXRvIjtzOjE0OiJzZ3BiLW1heC13aWR0aCI7czowOiIiO3M6MTU6InNncGItbWF4LWhlaWdodCI7czowOiIiO3M6MTQ6InNncGItbWluLXdpZHRoIjtzOjU6IjMwMHB4IjtzOjE1OiJzZ3BiLW1pbi1oZWlnaHQiO3M6NToiMzAwcHgiO3M6MTk6InNncGItb3Blbi1hbmltYXRpb24iO3M6Mjoib24iO3M6MjY6InNncGItb3Blbi1hbmltYXRpb24tZWZmZWN0IjtzOjEwOiJzZ3BiLXB1bHNlIjtzOjI1OiJzZ3BiLW9wZW4tYW5pbWF0aW9uLXNwZWVkIjtzOjM6IjAuMyI7czoyMDoic2dwYi1jbG9zZS1hbmltYXRpb24iO3M6Mjoib24iO3M6Mjc6InNncGItY2xvc2UtYW5pbWF0aW9uLWVmZmVjdCI7czoxMDoic2dwYi1wdWxzZSI7czoyNjoic2dwYi1jbG9zZS1hbmltYXRpb24tc3BlZWQiO3M6MzoiMC41IjtzOjE2OiJzZ3BiLXBvcHVwLWZpeGVkIjtzOjI6Im9uIjtzOjI1OiJzZ3BiLXBvcHVwLWZpeGVkLXBvc2l0aW9uIjtzOjE6IjUiO3M6Mjc6InNncGItZGlzYWJsZS1wYWdlLXNjcm9sbGluZyI7czoyOiJvbiI7czoyOToic2dwYi1lbmFibGUtY29udGVudC1zY3JvbGxpbmciO3M6Mjoib24iO3M6MTY6InNncGItcG9wdXAtb3JkZXIiO3M6MToiMCI7czoxNjoic2dwYi1wb3B1cC1kZWxheSI7czoxOiIwIjtzOjc6InNncGItanMiO3M6MjoiSlMiO3M6ODoic2dwYi1jc3MiO3M6MzoiQ1NTIjtzOjEyOiJzZ3BiLXBvc3QtaWQiO3M6NDoiNzg1NCI7czoyNToic2dwYi1lbmFibGUtcG9wdXAtb3ZlcmxheSI7czoyOiJvbiI7czoyMjoic2dwYi1idXR0b24taW1hZ2UtZGF0YSI7czo2MzoiaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDMvY2xvc2UucG5nIjtzOjI2OiJzZ3BiLWJhY2tncm91bmQtaW1hZ2UtZGF0YSI7czowOiIiO3M6MTQ6InNncGJDb25kaXRpb25zIjtOO30=">
            <div class="sgpb-popup-builder-content-7854 sgpb-popup-builder-content-html">
                <div class="sgpb-main-html-content-wrapper">
                    <p>
                    <div role="form" class="wpcf7" id="wpcf7-f7853-o2" lang="vi" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form action="https://tlclighting.com.vn/#wpcf7-f7853-o2" method="post" class="wpcf7-form init" novalidate="novalidate">
                            <div style="display: none;"> <input type="hidden" name="_wpcf7" value="7853" /> <input type="hidden" name="_wpcf7_version" value="5.2.2" /> <input type="hidden" name="_wpcf7_locale" value="vi" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7853-o2" /> <input type="hidden" name="_wpcf7_container_post" value="0" /> <input type="hidden" name="_wpcf7_posted_data_hash" value="" /></div>
                            <div class="khbh01 parent thanhcong01">
                                <div class="child thanhcong02">
                                    <center><strong class="thanhcong03">KÍCH HOẠT BẢO HÀNH THÀNH CÔNG</strong></center><br /> &nbsp;<br />
                                    <center class="thanhcong04">Sản phẩm của Quý khách</center><br />
                                    <center class="thanhcong04">được bảo hành 24 tháng kể từ ngày 27.3.2021</center><br /> &nbsp;<br />
                                    <center class="khbh013" style=" font-style: italic; font-size: 17px; "><span>Hotline: 1800 6192 &emsp;</span><span> &ensp; Website: tlclighting.com.vn</span></center>
                                </div>
                            </div>
                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                        </form>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="sgpb-main-popup-data-container-7854" style="position:fixed;opacity: 0;filter: opacity(0%);transform: scale(0);">
        <div class="sg-popup-builder-content" id="sg-popup-content-wrapper-7854" data-id="7854" data-events="{&quot;param&quot;:&quot;click&quot;,&quot;value&quot;:&quot;&quot;}" data-options="YTo1ODp7czoyNjoic2dwYi1mbG9hdGluZy1idXR0b24tc3R5bGUiO3M6NjoiY29ybmVyIjtzOjI5OiJzZ3BiLWZsb2F0aW5nLWJ1dHRvbi1wb3NpdGlvbiI7czoxMjoiYm90dG9tLXJpZ2h0IjtzOjk6InNncGItdHlwZSI7czo0OiJodG1sIjtzOjE1OiJzZ3BiLWlzLXByZXZpZXciO3M6MToiMCI7czoxNDoic2dwYi1pcy1hY3RpdmUiO3M6NzoiY2hlY2tlZCI7czozNDoic2dwYi1iZWhhdmlvci1hZnRlci1zcGVjaWFsLWV2ZW50cyI7YToxOntpOjA7YToxOntpOjA7YToyOntzOjU6InBhcmFtIjtzOjE0OiJjb250YWN0LWZvcm0tNyI7czo4OiJvcGVyYXRvciI7czoxNToic2VsZWN0X2JlaGF2aW9yIjt9fX1zOjIwOiJzZ3BiLWNvbnRlbnQtcGFkZGluZyI7czoxOiIwIjtzOjE4OiJzZ3BiLXBvcHVwLXotaW5kZXgiO3M6NDoiOTk5OSI7czoxNzoic2dwYi1wb3B1cC10aGVtZXMiO3M6MTI6InNncGItdGhlbWUtMyI7czoxOToic2dwYi1kaXNhYmxlLWJvcmRlciI7czoyOiJvbiI7czoyNToic2dwYi1vdmVybGF5LWN1c3RvbS1jbGFzcyI7czoxODoic2dwYi1wb3B1cC1vdmVybGF5IjtzOjE4OiJzZ3BiLW92ZXJsYXktY29sb3IiO3M6NzoiIzAwMDAwMCI7czoyMDoic2dwYi1vdmVybGF5LW9wYWNpdHkiO3M6NDoiMC42OCI7czoyNToic2dwYi1jb250ZW50LWN1c3RvbS1jbGFzcyI7czoxNjoic2ctcG9wdXAtY29udGVudCI7czoyNjoic2dwYi1iYWNrZ3JvdW5kLWltYWdlLW1vZGUiO3M6OToibm8tcmVwZWF0IjtzOjEyOiJzZ3BiLWVzYy1rZXkiO3M6Mjoib24iO3M6MjQ6InNncGItZW5hYmxlLWNsb3NlLWJ1dHRvbiI7czoyOiJvbiI7czoyMzoic2dwYi1jbG9zZS1idXR0b24tZGVsYXkiO3M6MToiMCI7czoyNjoic2dwYi1jbG9zZS1idXR0b24tcG9zaXRpb24iO3M6ODoidG9wUmlnaHQiO3M6MjQ6InNncGItYnV0dG9uLXBvc2l0aW9uLXRvcCI7czoyOiIxNSI7czoyNjoic2dwYi1idXR0b24tcG9zaXRpb24tcmlnaHQiO3M6MjoiMTUiO3M6Mjc6InNncGItYnV0dG9uLXBvc2l0aW9uLWJvdHRvbSI7czoxOiIwIjtzOjI1OiJzZ3BiLWJ1dHRvbi1wb3NpdGlvbi1sZWZ0IjtzOjA6IiI7czoxNzoic2dwYi1idXR0b24taW1hZ2UiO3M6NjM6Imh0dHBzOi8vdGxjbGlnaHRpbmcuY29tLnZuL3dwLWNvbnRlbnQvdXBsb2Fkcy8yMDIxLzAzL2Nsb3NlLnBuZyI7czoyMzoic2dwYi1idXR0b24taW1hZ2Utd2lkdGgiO3M6MjoiMjUiO3M6MjQ6InNncGItYnV0dG9uLWltYWdlLWhlaWdodCI7czoyOiIyNSI7czoxNzoic2dwYi1ib3JkZXItY29sb3IiO3M6NzoiIzAwMDAwMCI7czoxODoic2dwYi1ib3JkZXItcmFkaXVzIjtzOjE6IjAiO3M6MjM6InNncGItYm9yZGVyLXJhZGl1cy10eXBlIjtzOjE6IiUiO3M6MTY6InNncGItYnV0dG9uLXRleHQiO3M6NToiQ2xvc2UiO3M6MTg6InNncGItb3ZlcmxheS1jbGljayI7czoyOiJvbiI7czoyNToic2dwYi1wb3B1cC1kaW1lbnNpb24tbW9kZSI7czoxMDoiY3VzdG9tTW9kZSI7czoxMDoic2dwYi13aWR0aCI7czo1OiI1MDBweCI7czoxMToic2dwYi1oZWlnaHQiO3M6NToiMzAwcHgiO3M6MzM6InNncGItcmVzcG9uc2l2ZS1kaW1lbnNpb24tbWVhc3VyZSI7czo0OiJhdXRvIjtzOjE0OiJzZ3BiLW1heC13aWR0aCI7czowOiIiO3M6MTU6InNncGItbWF4LWhlaWdodCI7czowOiIiO3M6MTQ6InNncGItbWluLXdpZHRoIjtzOjU6IjMwMHB4IjtzOjE1OiJzZ3BiLW1pbi1oZWlnaHQiO3M6NToiMzAwcHgiO3M6MTk6InNncGItb3Blbi1hbmltYXRpb24iO3M6Mjoib24iO3M6MjY6InNncGItb3Blbi1hbmltYXRpb24tZWZmZWN0IjtzOjEwOiJzZ3BiLXB1bHNlIjtzOjI1OiJzZ3BiLW9wZW4tYW5pbWF0aW9uLXNwZWVkIjtzOjM6IjAuMyI7czoyMDoic2dwYi1jbG9zZS1hbmltYXRpb24iO3M6Mjoib24iO3M6Mjc6InNncGItY2xvc2UtYW5pbWF0aW9uLWVmZmVjdCI7czoxMDoic2dwYi1wdWxzZSI7czoyNjoic2dwYi1jbG9zZS1hbmltYXRpb24tc3BlZWQiO3M6MzoiMC41IjtzOjE2OiJzZ3BiLXBvcHVwLWZpeGVkIjtzOjI6Im9uIjtzOjI1OiJzZ3BiLXBvcHVwLWZpeGVkLXBvc2l0aW9uIjtzOjE6IjUiO3M6Mjc6InNncGItZGlzYWJsZS1wYWdlLXNjcm9sbGluZyI7czoyOiJvbiI7czoyOToic2dwYi1lbmFibGUtY29udGVudC1zY3JvbGxpbmciO3M6Mjoib24iO3M6MTY6InNncGItcG9wdXAtb3JkZXIiO3M6MToiMCI7czoxNjoic2dwYi1wb3B1cC1kZWxheSI7czoxOiIwIjtzOjc6InNncGItanMiO3M6MjoiSlMiO3M6ODoic2dwYi1jc3MiO3M6MzoiQ1NTIjtzOjEyOiJzZ3BiLXBvc3QtaWQiO3M6NDoiNzg1NCI7czoyNToic2dwYi1lbmFibGUtcG9wdXAtb3ZlcmxheSI7czoyOiJvbiI7czoyMjoic2dwYi1idXR0b24taW1hZ2UtZGF0YSI7czo2MzoiaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtY29udGVudC91cGxvYWRzLzIwMjEvMDMvY2xvc2UucG5nIjtzOjI2OiJzZ3BiLWJhY2tncm91bmQtaW1hZ2UtZGF0YSI7czowOiIiO3M6MTQ6InNncGJDb25kaXRpb25zIjtOO30=">
            <div class="sgpb-popup-builder-content-7854 sgpb-popup-builder-content-html">
                <div class="sgpb-main-html-content-wrapper">
                    <p>
                    <div role="form" class="wpcf7" id="wpcf7-f7853-o3" lang="vi" dir="ltr">
                        <div class="screen-reader-response" role="alert" aria-live="polite"></div>
                        <form action="https://tlclighting.com.vn/#wpcf7-f7853-o3" method="post" class="wpcf7-form init" novalidate="novalidate">
                            <div style="display: none;"> <input type="hidden" name="_wpcf7" value="7853" /> <input type="hidden" name="_wpcf7_version" value="5.2.2" /> <input type="hidden" name="_wpcf7_locale" value="vi" /> <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7853-o3" /> <input type="hidden" name="_wpcf7_container_post" value="0" /> <input type="hidden" name="_wpcf7_posted_data_hash" value="" /></div>
                            <div class="khbh01 parent thanhcong01">
                                <div class="child thanhcong02">
                                    <center><strong class="thanhcong03">KÍCH HOẠT BẢO HÀNH THÀNH CÔNG</strong></center><br /> &nbsp;<br />
                                    <center class="thanhcong04">Sản phẩm của Quý khách</center><br />
                                    <center class="thanhcong04">được bảo hành 24 tháng kể từ ngày 27.3.2021</center><br /> &nbsp;<br />
                                    <center class="khbh013" style=" font-style: italic; font-size: 17px; "><span>Hotline: 1800 6192 &emsp;</span><span> &ensp; Website: tlclighting.com.vn</span></center>
                                </div>
                            </div>
                            <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                        </form>
                    </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="data:text/javascript;base64,dmFyIGM9ZG9jdW1lbnQuYm9keS5jbGFzc05hbWU7Yz1jLnJlcGxhY2UoL3dvb2NvbW1lcmNlLW5vLWpzLywnd29vY29tbWVyY2UtanMnKTtkb2N1bWVudC5ib2R5LmNsYXNzTmFtZT1j" defer></script>
    <script type="text/javascript" src="data:text/javascript;base64,dmFyIGJVPSdodHRwczovL3RsY2xpZ2h0aW5nLmNvbS52bi93cC1jb250ZW50L3BsdWdpbnMvd3AteW91dHViZS1seXRlL2x5dGUvJzt2YXIgbU9zPW51bGw7c3R5bGU9ZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnc3R5bGUnKTtzdHlsZS50eXBlPSd0ZXh0L2Nzcyc7cnVsZXM9ZG9jdW1lbnQuY3JlYXRlVGV4dE5vZGUoIi5seXRlLXdyYXBwZXItYXVkaW8gZGl2LCAubHl0ZS13cmFwcGVyIGRpdiB7bWFyZ2luOjBweDsgb3ZlcmZsb3c6aGlkZGVuO30gLmx5dGUsLmx5TWV7cG9zaXRpb246cmVsYXRpdmU7cGFkZGluZy1ib3R0b206NTYuMjUlO2hlaWdodDowO292ZXJmbG93OmhpZGRlbjtiYWNrZ3JvdW5kLWNvbG9yOiM3Nzc7fSAuZm91cnRocmVlIC5seU1lLCAuZm91cnRocmVlIC5seXRlIHtwYWRkaW5nLWJvdHRvbTo3NSU7fSAubGlkZ2V0e21hcmdpbi1ib3R0b206NXB4O30gLmxpZGdldCAubHl0ZSwgLndpZGdldCAubHlNZSB7cGFkZGluZy1ib3R0b206MCFpbXBvcnRhbnQ7aGVpZ2h0OjEwMCUhaW1wb3J0YW50O30gLmx5dGUtd3JhcHBlci1hdWRpbyAubHl0ZXtoZWlnaHQ6MzhweCFpbXBvcnRhbnQ7b3ZlcmZsb3c6aGlkZGVuO3BhZGRpbmc6MCFpbXBvcnRhbnR9IC5seU1lIGlmcmFtZSwgLmx5dGUgaWZyYW1lLC5seXRlIC5wTHtwb3NpdGlvbjphYnNvbHV0ZSAhaW1wb3J0YW50O3RvcDowO2xlZnQ6MDt3aWR0aDoxMDAlO2hlaWdodDoxMDAlIWltcG9ydGFudDtiYWNrZ3JvdW5kOm5vLXJlcGVhdCBzY3JvbGwgY2VudGVyICMwMDA7YmFja2dyb3VuZC1zaXplOmNvdmVyO2N1cnNvcjpwb2ludGVyfSAudEN7bGVmdDowO3Bvc2l0aW9uOmFic29sdXRlO3RvcDowO3dpZHRoOjEwMCV9IC50Q3tiYWNrZ3JvdW5kLWltYWdlOmxpbmVhci1ncmFkaWVudCh0byBib3R0b20scmdiYSgwLDAsMCwwLjYpLHJnYmEoMCwwLDAsMCkpfSAudFR7Y29sb3I6I0ZGRjtmb250LWZhbWlseTpSb2JvdG8sc2Fucy1zZXJpZjtmb250LXNpemU6MTZweDtoZWlnaHQ6YXV0bzt0ZXh0LWFsaWduOmxlZnQ7cGFkZGluZzo1cHggMTBweCA1MHB4IDEwcHh9IC5wbGF5e2JhY2tncm91bmQ6bm8tcmVwZWF0IHNjcm9sbCAwIDAgdHJhbnNwYXJlbnQ7d2lkdGg6ODhweDtoZWlnaHQ6NjNweDtwb3NpdGlvbjphYnNvbHV0ZTtsZWZ0OjQzJTtsZWZ0OmNhbGMoNTAlIC0gNDRweCk7bGVmdDotd2Via2l0LWNhbGMoNTAlIC0gNDRweCk7dG9wOjM4JTt0b3A6Y2FsYyg1MCUgLSAzMXB4KTt0b3A6LXdlYmtpdC1jYWxjKDUwJSAtIDMxcHgpO30gLndpZGdldCAucGxheSB7dG9wOjMwJTt0b3A6Y2FsYyg0NSUgLSAzMXB4KTt0b3A6LXdlYmtpdC1jYWxjKDQ1JSAtIDMxcHgpO3RyYW5zZm9ybTpzY2FsZSgwLjYpOy13ZWJraXQtdHJhbnNmb3JtOnNjYWxlKDAuNik7LW1zLXRyYW5zZm9ybTpzY2FsZSgwLjYpO30gLmx5dGU6aG92ZXIgLnBsYXl7YmFja2dyb3VuZC1wb3NpdGlvbjowIC02NXB4O30gLmx5dGUtYXVkaW8gLnBMe21heC1oZWlnaHQ6MzhweCFpbXBvcnRhbnR9IC5seXRlLWF1ZGlvIGlmcmFtZXtoZWlnaHQ6NDM4cHghaW1wb3J0YW50fSAuY3RybHtiYWNrZ3JvdW5kOnJlcGVhdCBzY3JvbGwgMCAtMjIwcHggcmdiYSgwLDAsMCwwLjMpO3dpZHRoOjEwMCU7aGVpZ2h0OjQwcHg7Ym90dG9tOjBweDtsZWZ0OjA7cG9zaXRpb246YWJzb2x1dGU7fSAubHl0ZS13cmFwcGVyIC5jdHJse2Rpc3BsYXk6bm9uZX0uTGN0cmx7YmFja2dyb3VuZDpuby1yZXBlYXQgc2Nyb2xsIDAgLTEzN3B4IHRyYW5zcGFyZW50O3dpZHRoOjE1OHB4O2hlaWdodDo0MHB4O2JvdHRvbTowO2xlZnQ6MDtwb3NpdGlvbjphYnNvbHV0ZX0gLlJjdHJse2JhY2tncm91bmQ6bm8tcmVwZWF0IHNjcm9sbCAtNDJweCAtMTc5cHggdHJhbnNwYXJlbnQ7d2lkdGg6MTE3cHg7aGVpZ2h0OjQwcHg7Ym90dG9tOjA7cmlnaHQ6MDtwb3NpdGlvbjphYnNvbHV0ZTtwYWRkaW5nLXJpZ2h0OjEwcHg7fS5seXRlLWF1ZGlvIC5wbGF5e2Rpc3BsYXk6bm9uZX0ubHl0ZS1hdWRpbyAuY3RybHtiYWNrZ3JvdW5kLWNvbG9yOnJnYmEoMCwwLDAsMSl9Lmx5dGUgLmhpZGRlbntkaXNwbGF5Om5vbmV9Iik7aWYoc3R5bGUuc3R5bGVTaGVldCl7c3R5bGUuc3R5bGVTaGVldC5jc3NUZXh0PXJ1bGVzLm5vZGVWYWx1ZX1lbHNle3N0eWxlLmFwcGVuZENoaWxkKHJ1bGVzKX1kb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaGVhZCcpWzBdLmFwcGVuZENoaWxkKHN0eWxlKQ==" defer></script>
    <script data-optimized="1" type="text/javascript" src="wp-content/litespeed/js/8cb4d071e661a1b14c1f51d79013d82572e3.js?ver=603ff" defer data-deferred="1"></script>
    <script type='text/javascript' id='contact-form-7-js-extra' src="data:text/javascript;base64,dmFyIHdwY2Y3PXsiYXBpU2V0dGluZ3MiOnsicm9vdCI6Imh0dHBzOlwvXC90bGNsaWdodGluZy5jb20udm5cL3dwLWpzb25cL2NvbnRhY3QtZm9ybS03XC92MSIsIm5hbWVzcGFjZSI6ImNvbnRhY3QtZm9ybS03XC92MSJ9LCJjYWNoZWQiOiIxIn0=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/933de93cd7c4c2335085b0aa5fc6e2cee73d.js?ver=6e2ce' id='contact-form-7-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/1ee4b60f293670d844f355f6dc46c5611543.js?ver=6c561' id='eirudo-yt-responsive-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/c1f6e3e61cc73f40d09d6edeb08ac8ee64fa.js?ver=ac8ee' id='jquery-blockui-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/932fc3b98db90784e42c77532615a76d59cf.js?ver=5a76d' id='js-cookie-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='woocommerce-js-extra' src="data:text/javascript;base64,dmFyIHdvb2NvbW1lcmNlX3BhcmFtcz17ImFqYXhfdXJsIjoiXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJ3Y19hamF4X3VybCI6IlwvP3djLWFqYXg9JSVlbmRwb2ludCUlIn0=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/8b19450ade8abafe266613421794fb684518.js?ver=4fb68' id='woocommerce-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='wc-cart-fragments-js-extra' src="data:text/javascript;base64,dmFyIHdjX2NhcnRfZnJhZ21lbnRzX3BhcmFtcz17ImFqYXhfdXJsIjoiXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJ3Y19hamF4X3VybCI6IlwvP3djLWFqYXg9JSVlbmRwb2ludCUlIiwiY2FydF9oYXNoX2tleSI6IndjX2NhcnRfaGFzaF9iMzExODk2NmUzNTgxZGYyMTE1OTA3NWI2NmRjMDRhZSIsImZyYWdtZW50X25hbWUiOiJ3Y19mcmFnbWVudHNfYjMxMTg5NjZlMzU4MWRmMjExNTkwNzViNjZkYzA0YWUiLCJyZXF1ZXN0X3RpbWVvdXQiOiI1MDAwIn0=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/624d53e00ee6806a65713ca5a9abc4f6689d.js?ver=bc4f6' id='wc-cart-fragments-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/5bae506fb641cbbd2a396f3694558864b14e.js?ver=58864' id='flatsome-live-search-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/8d7c06f0bad431845a884bc14b52b055954f.js?ver=2b055' id='jquery-fancybox-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='jquery-fancybox-js-after' src="data:text/javascript;base64,dmFyIGZiX3RpbWVvdXQsZmJfb3B0cz17J292ZXJsYXlTaG93JzohMCwnaGlkZU9uT3ZlcmxheUNsaWNrJzohMCwnc2hvd0Nsb3NlQnV0dG9uJzohMCwnbWFyZ2luJzoyMCwnY2VudGVyT25TY3JvbGwnOiExLCdlbmFibGVFc2NhcGVCdXR0b24nOiEwLCdhdXRvU2NhbGUnOiEwfTtpZih0eXBlb2YgZWFzeV9mYW5jeWJveF9oYW5kbGVyPT09J3VuZGVmaW5lZCcpe3ZhciBlYXN5X2ZhbmN5Ym94X2hhbmRsZXI9ZnVuY3Rpb24oKXtqUXVlcnkoJy5ub2ZhbmN5Ym94LGEud3AtYmxvY2stZmlsZV9fYnV0dG9uLGEucGluLWl0LWJ1dHRvbixhW2hyZWYqPSJwaW50ZXJlc3QuY29tL3Bpbi9jcmVhdGUiXSxhW2hyZWYqPSJmYWNlYm9vay5jb20vc2hhcmUiXSxhW2hyZWYqPSJ0d2l0dGVyLmNvbS9zaGFyZSJdJykuYWRkQ2xhc3MoJ25vbGlnaHRib3gnKTt2YXIgZmJfSU1HX3NlbGVjdD0nYVtocmVmKj0iLmpwZyJdOm5vdCgubm9saWdodGJveCxsaS5ub2xpZ2h0Ym94PmEpLGFyZWFbaHJlZio9Ii5qcGciXTpub3QoLm5vbGlnaHRib3gpLGFbaHJlZio9Ii5qcGVnIl06bm90KC5ub2xpZ2h0Ym94LGxpLm5vbGlnaHRib3g+YSksYXJlYVtocmVmKj0iLmpwZWciXTpub3QoLm5vbGlnaHRib3gpLGFbaHJlZio9Ii5wbmciXTpub3QoLm5vbGlnaHRib3gsbGkubm9saWdodGJveD5hKSxhcmVhW2hyZWYqPSIucG5nIl06bm90KC5ub2xpZ2h0Ym94KSxhW2hyZWYqPSIud2VicCJdOm5vdCgubm9saWdodGJveCxsaS5ub2xpZ2h0Ym94PmEpLGFyZWFbaHJlZio9Ii53ZWJwIl06bm90KC5ub2xpZ2h0Ym94KSc7alF1ZXJ5KGZiX0lNR19zZWxlY3QpLmFkZENsYXNzKCdmYW5jeWJveCBpbWFnZScpO3ZhciBmYl9JTUdfc2VjdGlvbnM9alF1ZXJ5KCcuZ2FsbGVyeSwud3AtYmxvY2stZ2FsbGVyeSwudGlsZWQtZ2FsbGVyeSwud3AtYmxvY2stamV0cGFjay10aWxlZC1nYWxsZXJ5Jyk7ZmJfSU1HX3NlY3Rpb25zLmVhY2goZnVuY3Rpb24oKXtqUXVlcnkodGhpcykuZmluZChmYl9JTUdfc2VsZWN0KS5hdHRyKCdyZWwnLCdnYWxsZXJ5LScrZmJfSU1HX3NlY3Rpb25zLmluZGV4KHRoaXMpKX0pO2pRdWVyeSgnYS5mYW5jeWJveCxhcmVhLmZhbmN5Ym94LGxpLmZhbmN5Ym94IGEnKS5lYWNoKGZ1bmN0aW9uKCl7alF1ZXJ5KHRoaXMpLmZhbmN5Ym94KGpRdWVyeS5leHRlbmQoe30sZmJfb3B0cyx7J3RyYW5zaXRpb25Jbic6J2VsYXN0aWMnLCdlYXNpbmdJbic6J2Vhc2VPdXRCYWNrJywndHJhbnNpdGlvbk91dCc6J2VsYXN0aWMnLCdlYXNpbmdPdXQnOidlYXNlSW5CYWNrJywnb3BhY2l0eSc6ITEsJ2hpZGVPbkNvbnRlbnRDbGljayc6ITEsJ3RpdGxlU2hvdyc6ITAsJ3RpdGxlUG9zaXRpb24nOidvdmVyJywndGl0bGVGcm9tQWx0JzohMCwnc2hvd05hdkFycm93cyc6ITAsJ2VuYWJsZUtleWJvYXJkTmF2JzohMCwnY3ljbGljJzohMX0pKX0pfTtqUXVlcnkoJ2EuZmFuY3lib3gtY2xvc2UnKS5vbignY2xpY2snLGZ1bmN0aW9uKGUpe2UucHJldmVudERlZmF1bHQoKTtqUXVlcnkuZmFuY3lib3guY2xvc2UoKX0pfTt2YXIgZWFzeV9mYW5jeWJveF9hdXRvPWZ1bmN0aW9uKCl7c2V0VGltZW91dChmdW5jdGlvbigpe2pRdWVyeSgnI2ZhbmN5Ym94LWF1dG8nKS50cmlnZ2VyKCdjbGljaycpfSwxMDAwKX07alF1ZXJ5KGVhc3lfZmFuY3lib3hfaGFuZGxlcik7alF1ZXJ5KGRvY3VtZW50KS5vbigncG9zdC1sb2FkJyxlYXN5X2ZhbmN5Ym94X2hhbmRsZXIpO2pRdWVyeShlYXN5X2ZhbmN5Ym94X2F1dG8p" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/3ac80a1ed965a818872b393f5d6421729d69.js?ver=42172' id='jquery-easing-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/264e4f03d79bf7a9d81d52d0ffa02ba83b3c.js?ver=02ba8' id='hoverIntent-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='flatsome-js-js-extra' src="data:text/javascript;base64,dmFyIGZsYXRzb21lVmFycz17ImFqYXh1cmwiOiJodHRwczpcL1wvdGxjbGlnaHRpbmcuY29tLnZuXC93cC1hZG1pblwvYWRtaW4tYWpheC5waHAiLCJydGwiOiIiLCJzdGlja3lfaGVpZ2h0IjoiNzAiLCJsaWdodGJveCI6eyJjbG9zZV9tYXJrdXAiOiI8YnV0dG9uIHRpdGxlPVwiJXRpdGxlJVwiIHR5cGU9XCJidXR0b25cIiBjbGFzcz1cIm1mcC1jbG9zZVwiPjxzdmcgeG1sbnM9XCJodHRwOlwvXC93d3cudzMub3JnXC8yMDAwXC9zdmdcIiB3aWR0aD1cIjI4XCIgaGVpZ2h0PVwiMjhcIiB2aWV3Qm94PVwiMCAwIDI0IDI0XCIgZmlsbD1cIm5vbmVcIiBzdHJva2U9XCJjdXJyZW50Q29sb3JcIiBzdHJva2Utd2lkdGg9XCIyXCIgc3Ryb2tlLWxpbmVjYXA9XCJyb3VuZFwiIHN0cm9rZS1saW5lam9pbj1cInJvdW5kXCIgY2xhc3M9XCJmZWF0aGVyIGZlYXRoZXIteFwiPjxsaW5lIHgxPVwiMThcIiB5MT1cIjZcIiB4Mj1cIjZcIiB5Mj1cIjE4XCI+PFwvbGluZT48bGluZSB4MT1cIjZcIiB5MT1cIjZcIiB4Mj1cIjE4XCIgeTI9XCIxOFwiPjxcL2xpbmU+PFwvc3ZnPjxcL2J1dHRvbj4iLCJjbG9zZV9idG5faW5zaWRlIjohMX0sInVzZXIiOnsiY2FuX2VkaXRfcGFnZXMiOiExfSwiaTE4biI6eyJtYWluTWVudSI6Ik1haW4gTWVudSJ9LCJvcHRpb25zIjp7ImNvb2tpZV9ub3RpY2VfdmVyc2lvbiI6IjEifX0=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/8f47519d3ab8ed23ba88556dd408587b019d.js?ver=8587b' id='flatsome-js-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/8bd725e88f9ef0d570b34f75a4b3faa4e1bf.js?ver=3faa4' id='flatsome-theme-woocommerce-js-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='megamenu-js-extra' src="data:text/javascript;base64,dmFyIG1lZ2FtZW51PXsidGltZW91dCI6IjMwMCIsImludGVydmFsIjoiMTAwIn0=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/79b61049a76a7f01664031103a21543dd3ff.js?ver=1543d' id='megamenu-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/c4b590f2f8d2fba1bcd623618f486f759a8b.js?ver=86f75' id='wp-embed-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/57fce8c86919660e4ab7c01575d08d135a4a.js?ver=08d13' id='wpos-slick-jquery-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='wpls-public-js-js-extra' src="data:text/javascript;base64,dmFyIFdwbHM9eyJpc19tb2JpbGUiOiIwIiwiaXNfcnRsIjoiMCJ9" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/5093b7fce87aa9d45e39a2d21270b0011c94.js?ver=0b001' id='wpls-public-js-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='zxcvbn-async-js-extra' src="data:text/javascript;base64,dmFyIF96eGN2Ym5TZXR0aW5ncz17InNyYyI6Imh0dHBzOlwvXC90bGNsaWdodGluZy5jb20udm5cL3dwLWluY2x1ZGVzXC9qc1wvenhjdmJuLm1pbi5qcyJ9" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/7dc4bcccb72a551e8abcc8f44f4f34dbd928.js?ver=f34db' id='zxcvbn-async-js' defer data-deferred="1"></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/9adf19fb09844bb28e887c2b821f0fedb709.js?ver=f0fed' id='wp-polyfill-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='wp-polyfill-js-after' src="data:text/javascript;base64,KCdmZXRjaCcgaW4gd2luZG93KXx8ZG9jdW1lbnQud3JpdGUoJzxzY3JpcHQgc3JjPSJodHRwczovL3RsY2xpZ2h0aW5nLmNvbS52bi93cC1pbmNsdWRlcy9qcy9kaXN0L3ZlbmRvci93cC1wb2x5ZmlsbC1mZXRjaC5taW4uanMiPjwvc2NyJysnaXB0PicpOyhkb2N1bWVudC5jb250YWlucyl8fGRvY3VtZW50LndyaXRlKCc8c2NyaXB0IHNyYz0iaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtaW5jbHVkZXMvanMvZGlzdC92ZW5kb3Ivd3AtcG9seWZpbGwtbm9kZS1jb250YWlucy5taW4uanMiPjwvc2NyJysnaXB0PicpOyh3aW5kb3cuRE9NUmVjdCl8fGRvY3VtZW50LndyaXRlKCc8c2NyaXB0IHNyYz0iaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtaW5jbHVkZXMvanMvZGlzdC92ZW5kb3Ivd3AtcG9seWZpbGwtZG9tLXJlY3QubWluLmpzIj48L3NjcicrJ2lwdD4nKTsod2luZG93LlVSTCYmd2luZG93LlVSTC5wcm90b3R5cGUmJndpbmRvdy5VUkxTZWFyY2hQYXJhbXMpfHxkb2N1bWVudC53cml0ZSgnPHNjcmlwdCBzcmM9Imh0dHBzOi8vdGxjbGlnaHRpbmcuY29tLnZuL3dwLWluY2x1ZGVzL2pzL2Rpc3QvdmVuZG9yL3dwLXBvbHlmaWxsLXVybC5taW4uanMiPjwvc2NyJysnaXB0PicpOyh3aW5kb3cuRm9ybURhdGEmJndpbmRvdy5Gb3JtRGF0YS5wcm90b3R5cGUua2V5cyl8fGRvY3VtZW50LndyaXRlKCc8c2NyaXB0IHNyYz0iaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtaW5jbHVkZXMvanMvZGlzdC92ZW5kb3Ivd3AtcG9seWZpbGwtZm9ybWRhdGEubWluLmpzIj48L3NjcicrJ2lwdD4nKTsoRWxlbWVudC5wcm90b3R5cGUubWF0Y2hlcyYmRWxlbWVudC5wcm90b3R5cGUuY2xvc2VzdCl8fGRvY3VtZW50LndyaXRlKCc8c2NyaXB0IHNyYz0iaHR0cHM6Ly90bGNsaWdodGluZy5jb20udm4vd3AtaW5jbHVkZXMvanMvZGlzdC92ZW5kb3Ivd3AtcG9seWZpbGwtZWxlbWVudC1jbG9zZXN0Lm1pbi5qcyI+PC9zY3InKydpcHQ+Jyk=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/1795da7212c5dfefa6dfee13f1befe72d5a4.js?ver=efe72' id='wp-i18n-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='password-strength-meter-js-extra' src="data:text/javascript;base64,dmFyIHB3c0wxMG49eyJ1bmtub3duIjoiTVx1MWVhZHQga2hcdTFlYTl1IG1cdTFlYTFuaCBraFx1MDBmNG5nIHhcdTAwZTFjIFx1MDExMVx1MWVjYm5oIiwic2hvcnQiOiJSXHUxZWE1dCB5XHUxZWJmdSIsImJhZCI6IllcdTFlYmZ1IiwiZ29vZCI6IlRydW5nIGJcdTAwZWNuaCIsInN0cm9uZyI6Ik1cdTFlYTFuaCIsIm1pc21hdGNoIjoiTVx1MWVhZHQga2hcdTFlYTl1IGtoXHUwMGY0bmcga2hcdTFlZGJwIn0=" defer></script>
    <script type='text/javascript' id='password-strength-meter-js-translations' src="data:text/javascript;base64,KGZ1bmN0aW9uKGRvbWFpbix0cmFuc2xhdGlvbnMpe3ZhciBsb2NhbGVEYXRhPXRyYW5zbGF0aW9ucy5sb2NhbGVfZGF0YVtkb21haW5dfHx0cmFuc2xhdGlvbnMubG9jYWxlX2RhdGEubWVzc2FnZXM7bG9jYWxlRGF0YVsiIl0uZG9tYWluPWRvbWFpbjt3cC5pMThuLnNldExvY2FsZURhdGEobG9jYWxlRGF0YSxkb21haW4pfSkoImRlZmF1bHQiLHsibG9jYWxlX2RhdGEiOnsibWVzc2FnZXMiOnsiIjp7fX19fSk=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/246c96b34f18a507e8d8d7746989d9916741.js?ver=9d991' id='password-strength-meter-js' defer data-deferred="1"></script>
    <script type='text/javascript' id='wc-password-strength-meter-js-extra' src="data:text/javascript;base64,dmFyIHdjX3Bhc3N3b3JkX3N0cmVuZ3RoX21ldGVyX3BhcmFtcz17Im1pbl9wYXNzd29yZF9zdHJlbmd0aCI6IjMiLCJzdG9wX2NoZWNrb3V0IjoiIiwiaTE4bl9wYXNzd29yZF9lcnJvciI6IlZ1aSBsXHUwMGYybmcgbmhcdTFlYWRwIG1cdTFlYWR0IGtoXHUxZWE5dSBraFx1MDBmMyBoXHUwMWExbi4iLCJpMThuX3Bhc3N3b3JkX2hpbnQiOiJHXHUxZWUzaSBcdTAwZmQ6IE1cdTFlYWR0IGtoXHUxZWE5dSBwaFx1MWVhM2kgY1x1MDBmMyBcdTAwZWR0IG5oXHUxZWE1dCAxMiBrXHUwMGZkIHRcdTFlZjEuIFx1MDExMFx1MWVjMyBuXHUwMGUybmcgY2FvIFx1MDExMVx1MWVkOSBiXHUxZWEzbyBtXHUxZWFkdCwgc1x1MWVlZCBkXHUxZWU1bmcgY2hcdTFlZWYgaW4gaG9hLCBpbiB0aFx1MDFiMFx1MWVkZG5nLCBjaFx1MWVlZiBzXHUxZWQxIHZcdTAwZTAgY1x1MDBlMWMga1x1MDBmZCB0XHUxZWYxIFx1MDExMVx1MWViN2MgYmlcdTFlYzd0IG5oXHUwMWIwICEgXCIgPyAkICUgXiAmICkuIn0=" defer></script>
    <script data-optimized="1" type='text/javascript' src='wp-content/litespeed/js/fa670876c896a98c4477addf86265351ffde.js?ver=65351' id='wc-password-strength-meter-js' defer data-deferred="1"></script>
    <script type="text/javascript" src="data:text/javascript;base64,d2luZG93LmFkZEV2ZW50TGlzdGVuZXIoImxvYWQiLGZ1bmN0aW9uKGV2ZW50KXtqUXVlcnkoIi5jZnhfZm9ybV9tYWluLC53cGNmNy1mb3JtLC53cGZvcm1zLWZvcm0sLmdmb3JtX3dyYXBwZXIgZm9ybSIpLmVhY2goZnVuY3Rpb24oKXt2YXIgZm9ybT1qUXVlcnkodGhpcyk7dmFyIHNjcmVlbl93aWR0aD0iIjt2YXIgc2NyZWVuX2hlaWdodD0iIjtpZihzY3JlZW5fd2lkdGg9PSIiKXtpZihzY3JlZW4pe3NjcmVlbl93aWR0aD1zY3JlZW4ud2lkdGh9ZWxzZXtzY3JlZW5fd2lkdGg9alF1ZXJ5KHdpbmRvdykud2lkdGgoKX19CmlmKHNjcmVlbl9oZWlnaHQ9PSIiKXtpZihzY3JlZW4pe3NjcmVlbl9oZWlnaHQ9c2NyZWVuLmhlaWdodH1lbHNle3NjcmVlbl9oZWlnaHQ9alF1ZXJ5KHdpbmRvdykuaGVpZ2h0KCl9fQpmb3JtLmFwcGVuZCgnPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idnhfd2lkdGgiIHZhbHVlPSInK3NjcmVlbl93aWR0aCsnIj4nKTtmb3JtLmFwcGVuZCgnPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0idnhfaGVpZ2h0IiB2YWx1ZT0iJytzY3JlZW5faGVpZ2h0KyciPicpO2Zvcm0uYXBwZW5kKCc8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJ2eF91cmwiIHZhbHVlPSInK3dpbmRvdy5sb2NhdGlvbi5ocmVmKyciPicpfSl9KQ==" defer></script>
    <style>
        /*Custom CSS*/
    </style>
    <style></style>
    <script src="data:text/javascript;base64,dmFyIHBvc3RfZ3JpZF92YXJzPXsic2l0ZVVybCI6Imh0dHBzOlwvXC90bGNsaWdodGluZy5jb20udm4ifQ==" defer></script>
    <script src="{{ asset('js/main1.js') }}"></script>
</body> 

</html> <!-- Page optimized by LiteSpeed Cache @2023-08-26 08:56:36 -->
<!-- Page generated by LiteSpeed Cache 5.4 on 2023-08-26 08:56:36 -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@stack('script')

