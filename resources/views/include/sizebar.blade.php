<div class="col large-3 hide-for-medium ">
    <div id="shop-sidebar" class="sidebar-inner col-inner">
        <aside id="nav_menu-3" class="widget widget_nav_menu"><span class="widget-title shop-sidebar">Danh mục sản phẩm</span>
            <div class="is-divider small"></div>
            <div class="menu-menu-doc-container">
                <ul id="menu-menu-doc" class="menu">

                     <?php 

                        $groupProduct = App\Models\groupProduct::select('link', 'name', 'id')->where('level', 0)->where('active', 1)->get();
                    ?>

                    @if(!empty($groupProduct) && $groupProduct->count()>0)

                    @foreach($groupProduct as $value)
                    <li id="menu-item-10450" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-10450 has-child" aria-expanded="false"><a href="{{ route('details', $value->link) }}">{{ $value->name  }}</a> 
                        <ul class="sub-menu">

                            <?php 

                                $groupProduct_child = App\Models\groupProduct::where('parent_id', $value->id)->select('link', 'name')->where('active', 1)->get();
                            ?>

                            @if(!empty($groupProduct_child) && $groupProduct_child->count()>0)

                            @foreach($groupProduct_child as $value_child)
                            <li id="menu-item-5519" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-5519 has-child" aria-expanded="false"><a href="{{ route('details', $value_child->link)  }}">{{ $value_child->name  }}</a> 
                                
                            </li>

                            @endforeach
                            @endif
                        </ul>
                    </li>
                    @endforeach
                    @endif




                    <!-- <li id="menu-item-10136" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10136 has-child" aria-expanded="false"><a href="#">SẢN PHẨM ĐIỆN GIA DỤNG</a> 
                        <ul class="sub-menu">
                            <li id="menu-item-8999" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8999"><a href="../quat-tran/index.html">QUẠT TRẦN</a></li>
                            <li id="menu-item-10137" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10137"><a href="../quat-suoi-nha-tam/index.html">QUẠT SƯỞI NHÀ TẮM</a></li>
                            <li id="menu-item-8998" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-8998"><a href="../den-suoi-nha-tam/index.html">ĐÈN SƯỞI NHÀ TẮM</a></li>
                        </ul>
                    </li>
                    <li id="menu-item-10138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-10138 has-child" aria-expanded="false"><a href="#">THIẾT BỊ ĐIỆN</a> 
                        <ul class="sub-menu">
                            <li id="menu-item-10473" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10473"><a href="../o-cam/index.html">Ổ cắm</a></li>
                            <li id="menu-item-10474" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10474"><a href="../phich-cam-dien/index.html">Phích cắm điện</a></li>
                            <li id="menu-item-10475" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10475"><a href="../dui-den/index.html">Đui đèn</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </aside>
    </div>
</div>