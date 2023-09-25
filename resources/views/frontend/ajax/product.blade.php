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