@extends('frontend.layouts.apps')
@section('content')

<style type="text/css">
    #ContentPlaceHolder1_DataList1_Labelgia19_0 span{
        font-weight: bold !important;
    }

    .filters-container h4, .filter-checkbox li a{
        font-weight: bold;
        color: #000;
        line-height: 26px;
    }

    .filters-container ul{
        list-style: none;
    }

    .spinner {
      width: 4em;
      height: 4em;
      border: 0.5em solid rgba(0, 0, 0, 0.1);
      border-left-color: #7983ff;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      position: absolute;
      top: 50%;
      left: 50%;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
</style>

<div class="body-content bg-page clearfix">
    <div class="container">
        <div class="wrap-product">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ol class="breadcrumb" itemscope="" itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb-item" itemprop="itemListElement" itemscope="" itemtype="https://schema.org/ListItem">
                                <a href="index.htm" itemprop="item">
                                    <h3 itemprop="name">Trang chủ</h3>
                                    <meta itemprop="position" content="1">
                                </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <h1>bvd</h1>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                </div>
            </div>
        </div>
        <div class="clearfix pt-3">
        </div>
        <div class="row pl-filters pl-filters-deM">
            <div class="col-12 col-md-12 esw-scroll-x pl-filters-hot">
                <ul class="list-unstyled">
                    <li class="title">Thương hiệu:</li>
                    <li><a class="pa-filter pa-filter-fast pa-filter-brand pa-filter-brand-782" href="tim-thuong-hieu.aspx-37.html?tongtrongluong=15&amp;loaitin=7" data-href="coex" data-id="782" data-exist="0">
                        <img src="Images/upload/ansell_logo.png" height="80" style="border:1px solid #e7e7e7; padding:2px;" alt="Ansell - Úc">
                        </a>
                    </li>
                    <li><a class="pa-filter pa-filter-fast pa-filter-brand pa-filter-brand-782" href="tim-thuong-hieu.aspx-38.html?tongtrongluong=32&amp;loaitin=7" data-href="coex" data-id="782" data-exist="0">
                        <img src="Images/upload/logo%20lyngsoe.png" height="80" style="border:1px solid #e7e7e7; padding:2px;" alt="Lyngsoe - Đan Mạch">
                        </a>
                    </li>
                    <li><a class="pa-filter pa-filter-fast pa-filter-brand pa-filter-brand-782" href="tim-thuong-hieu.aspx-39.html?tongtrongluong=35&amp;loaitin=7" data-href="coex" data-id="782" data-exist="0">
                        <img src="Images/upload/12.jpg" height="80" style="border:1px solid #e7e7e7; padding:2px;" alt="Raygard">
                        </a>
                    </li>
                    <li><a class="pa-filter pa-filter-fast pa-filter-brand pa-filter-brand-782" href="tim-thuong-hieu.aspx-40.html?tongtrongluong=25&amp;loaitin=7" data-href="coex" data-id="782" data-exist="0">
                        <img src="Images/upload/K2%20SAFETY.jpg" height="80" style="border:1px solid #e7e7e7; padding:2px;" alt="K2 Safety - Hàn Quốc">
                        </a>
                    </li>
                    <li><a class="pa-filter pa-filter-fast pa-filter-brand pa-filter-brand-782" href="tim-thuong-hieu.aspx-41.html?tongtrongluong=30&amp;loaitin=7" data-href="coex" data-id="782" data-exist="0">
                        <img src="Images/upload/3.png" height="80" style="border:1px solid #e7e7e7; padding:2px;" alt="Lakeland - Mỹ">
                        </a>
                    </li>
                </ul>
            </div>
            
            {!! @$slogan !!}
        </div>
        <div class="clearfix pt-3">
        </div>
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <ul class="list-unstyled wrapbox-pNavCate wrapbox-pNavCates">
                            <li class="wrapbox-getProducts active" data-w="3" data-cid="17">
                                <h3>
                                    <a href="" style="text-transform: uppercase; font-size: 13pt;">{{ @$name_cate }}</a>
                                </h3>
                            </li>
                            <li><b>Sắp xếp theo:</b></li>

                            <li><a href="javascript:void(0)" data="price-asc" class="change-price"><i class="fa fa-sort-amount-asc">
                                </i>&nbsp;Giá thấp </a>
                            </li>

                            <li><a href="javascript:void(0)" data="price-desc" class="change-price"><i class="fa fa-sort-amount-desc">
                                </i>&nbsp;Giá cao </a>
                            </li>

                            <li><a href="javascript:void(0)" data="bestseller" class="change-price"><i class="fa fa-star"></i>&nbsp;Bán
                                chạy </a> 
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                    <div class="col-2 col-md-2">

                        <aside id="yith-woocommerce-ajax-navigation-filters-3" class="widget widget_yith-woocommerce-ajax-navigation-filters">
                            <div class="yith-wcan-filters no-title enhanced" id="preset_768" data-preset-id="768" data-target="">
                                <div class="filters-container">
                                    <form method="POST">

                                         @if(isset($filter))
                                        @foreach($filter as $filters)

                                        <?php

                                            $propertyId = cache()->remember('filterId_'.$filters->id, 1000, function () use($filters){

                                                $propertyId =  App\Models\property::where('filterId', $filters->id)->get()??'';
                                                return $propertyId;
                                            });
                                           
                                        ?>
                                       
                                        <div class="yith-wcan-filter filter-tax checkbox-design" id="filter_768_0" data-filter-type="tax" data-filter-id="0" data-taxonomy="yith_product_brand" data-multiple="yes" data-relation="or">
                                            <h4 class="filter-title">{{ $filters->name }}</h4>
                                            <div class="filter-content">
                                                <ul class="filter-items filter-checkbox  level-0">

                                                    @if(isset($propertyId))
                                                    @foreach($propertyId as $property)
                                                    <li class="filter-item checkbox  level-0">
                                                        <label for="filter_768_0_169">
                                                            <input type="checkbox" id="box_{{ $property->id }}" name="filter" value="{{ $property->id }}" data-id="{{ $filters->id }}" class="box_click">

                                                            <a href="" role="button" class="term-label">
                                                                {{ $property->name}}                 
                                                            </a>
                                                        </label>
                                                    </li>
                                                    @endforeach
                                                    @endif

                                                </ul>
                                                <!-- .filter-items -->
                                            </div>
                                        </div>

                                       
                                        @endforeach
                                        @endif

                                        
                                    </form>
                                </div>
                            </div>
                        </aside>
                        
                    </div>

                    <div id="getproducts" class="col-10 col-md-10">
                        <div class="row product-list product-list-bycate">
                           

                            @if(isset($product_search))
                            @foreach($product_search as $value)
                            <div class="col-6 col-md-2 col-lg-2">
                                <div class="card mb-4">
                                    <a href="{{ route('details', $value->Link) }}" data-id="20645" class="product-item">
                                        <div class="card-img-top">
                                            <picture>
                                                <source srcset="{{ asset($value->Image) }}" type="image/webp">
                                                <source srcset="{{ asset($value->Image) }}" type="image/jpeg">
                                                <img loading="lazy" src="{{ asset($value->Image) }}" alt="{{ @$value->Name }}">
                                                <span class="product-item-view product-item-view-1752" style="display:none;"></span>
                                            </picture>
                                        </div>
                                        <div class="card-body">
                                            <h5 class="card-title product-name">
                                                <b>{{ $value->Name  }}</b>
                                            </h5>
                                            <p class="card-text product-price">
                                                <span id="ContentPlaceHolder1_DataList1_Labelgia19_0"><b>{{ str_replace(',' ,'.', number_format($value->Price)) }}</b></span>₫ <span class="product-price-regular"><span id="ContentPlaceHolder1_DataList1_Labelgia191_0"></span></span>
                                            </p>
                                            <div style="position:relative; z-index:9999999;">
                                                <div style="position:absolute; top:-29px; z-index:9999999; left:-2px;">
                                                    <img src="icon/lien-he.png" height="24">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                        <div style="height: 25px; text-align: center; padding-bottom: 5px;">
                        </div>

                        <div class="spinner"></div>
                    </div>


                </div>
            </div>
        </div>
        <div class="clearfix pt-3">
        </div>
        <div class="row">
            <div class="category-viewed col-12 col-md-12">
            </div>
        </div>
        <div class="clearfix pt-3">
        </div>
        <div class="row">
            <div class="product-viewed col-12 col-md-12">
            </div>
        </div>
        <div class="clearfix pt-3">
        </div>
    </div>
</div>


<script>

    $('.spinner').hide();

    filter = [];

    propertys = [];

    $('.box_click').click(function() {
        let property = $(this).attr('value');

        filters  =  $(this).attr('data-id');

        // kiểm tra filter có bị trùng không xóa filter trước + xóa property cùng filter
        if(filter.indexOf(filters)>-1){
            filter.splice(filter.indexOf(filters),1);
            propertys.splice(filter.indexOf(filters),1);
        }


        if(property !=0){

            filter.push(filters);

            propertys.push(property);

        }

        filter = filter.join(',');

        propertys = propertys.join(',');
        
        @if(!empty($link))
          
                window.location.href = '{{ route('details',$link) }}?filter=,'+filter+'&group_id={{ @$id_cate  }}&property=,'+propertys+'&link={{ $link  }}';
                
        @endif
    });


   $('.change-price').click(function() {

        option = $(this).attr('data');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $.ajax({

        type: 'POST',
            url: "{{ route('filter-option') }}",
            data: {
               
                action:option,
                idcate: '{{ $id_cate??'' }}'
                
            },

            beforeSend: function() {
                   
                $('.spinner').show();

            },
            success: function(result){

                $('#getproducts').html('');

                $('#getproducts').html(result);

                $('.spinner').hide();

            }
        });

   })
</script>
@endsection