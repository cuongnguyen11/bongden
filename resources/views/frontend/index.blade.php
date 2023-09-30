@extends('frontend.layouts.apps')
@section('content')

<main id="main" class="">

    <?php 
            

                $list_product_cate_hide = App\Models\groupProduct::select('product_id','id')->where('active', 0)->get();

                $list_product_hide = [];



                if(!empty($list_product_cate_hide) && $list_product_cate_hide->count()>0){

                    foreach ($list_product_cate_hide as $value) {


                        dd($value->product_id);

                        $ar_list = json_decode($value->product_id);

                        if(count($ar_list)>0){
                             foreach ($ar_list as  $val) {

                                array_push($list_product_hide, $val);
                               
                            }
                        }

                    }

                }

                $list_product_hide = array_unique($list_product_hide);

                dd($list_product_hide);



           
        ?>

    <style type="text/css">
        
        .box-image .image-none{
            height: 200px;
        }

        .box-text.text-center{
            height: 94px;
        }
    </style>
    <div class="row category-page-row">

        @include('include.sizebar')

        <div class="col large-9">
            <div class="shop-container">
                <div class="term-description">
                   {!!  @$slogan !!} 
                </div>
                <div class="woocommerce-notices-wrapper"></div>


                <div class="products row row-small large-columns-4 medium-columns-3 small-columns-2">

                    @if(isset($data))

                    
                    @foreach($data as $value)
                    <div class="product-small col has-hover product type-product post-8037 status-publish first instock product_cat-den-led-bup product_cat-den-led-bup-tru-dos has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="col-inner">
                            <div class="badge-container absolute left top z-1"></div>
                            <div class="product-small box ">
                                <div class="box-image">
                                    <div class="image-none"> <a href="{{ route('details', $value->Link) }}"> <img data-lazyloaded="1" src="{{ asset($value->Image) }}" width="300" height="300" data-src="{{ asset($value->Image) }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail entered litespeed-loaded" alt="{{ $value->Name  }}"> </a></div>
                                    <div class="image-tools is-small top right show-on-hover"></div>
                                    <div class="image-tools is-small hide-for-small bottom left show-on-hover"></div>
                                    <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover"></div>
                                </div>
                                <div class="box-text box-text-products text-center grid-style-2">
                                    <div class="title-wrapper">
                                        <p class="name product-title woocommerce-loop-product__title">
                                            <a href="{{ route('details', $value->Link) }}">{{ $value->Name  }}</a></p>
                                    </div>
                                    <div class="price-wrapper"> <span class="price"><span class="woocommerce-Price-amount amount"><bdi>{{ str_replace(',' ,'.', number_format($value->Price)) }}&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                </div>

               <!--  <div class="container">
                    <nav class="woocommerce-pagination">
                        <ul class="page-numbers nav-pagination links text-center">
                            <li><span aria-current="page" class="page-number current">1</span></li>
                            <li><a class="page-number" href="page/2/index.html">2</a></li>
                            <li><a class="next page-number" href="page/2/index.html"><i class="icon-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div> -->
            </div>

            {!! $details  !!}
           
        </div>
    </div>
</main>

@push('script')
    

     <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
    @if (session('success'))


        <script type="text/javascript">
            swal({ title: '{{ session("success") }}', type: 'success' });
          
        </script>
        <?php
        Session::forget('success');
        ?>

        
    @endif

    
@endpush

@endsection