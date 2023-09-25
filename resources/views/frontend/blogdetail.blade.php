@extends('frontend.layouts.apps')
@section('content')
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-large ">
            <div class="large-9 col">
                <article id="post-11343" class="post-11343 post type-post status-publish format-standard has-post-thumbnail hentry category-tin-hoat-dong">
                    <div class="article-inner ">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-bottom text-left">
                                <h6 class="entry-category is-xsmall"> <a href="https://tlclighting.com.vn/category/tin-hoat-dong/" rel="category tag">{{ $name_cate }}</a></h6>
                                <h1 class="entry-title">{{ strip_tags($data->title) }}</h1>
                                <div class="entry-divider is-divider small"></div>
                            </div>
                        </header>



                        {!!   $data->content  !!}




                        <!-- <nav role="navigation" id="nav-below" class="navigation-post">
                            <div class="flex-row next-prev-nav bt bb">
                                <div class="flex-col flex-grow nav-prev text-left">
                                    <div class="nav-previous"><a href="https://tlclighting.com.vn/team-building-tlc-2023-ket-noi-nhung-nguoi-thap-sang/" rel="prev"><span class="hide-for-small"><i class="icon-angle-left"></i></span> Team Building TLC 2023: Kết nối những người thắp sáng</a></div>
                                </div>
                                <div class="flex-col flex-grow nav-next text-right">
                                    <div class="nav-next"><a href="https://tlclighting.com.vn/thap-sang-duong-que-noi-cua-ngo-vung-tay-bac/" rel="next">Thắp sáng đường quê nơi cửa ngõ vùng Tây Bắc <span class="hide-for-small"><i class="icon-angle-right"></i></span></a></div>
                                </div>
                            </div>
                        </nav> -->
                    </div>
                </article>
                <div id="comments" class="comments-area"></div>
            </div>
            @include('include.sizebar');
            
            
        </div>
    </div>
</main>

@endsection