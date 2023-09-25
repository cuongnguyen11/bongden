

    @extends('frontend.layouts.apps')

    @section('content') 

    <main id="main" class="">
        <div id="content" class="blog-wrapper blog-archive page-wrapper">
            <div class="row row-large ">

                @include('include.sizebar')

                <div class="large-9 col medium-col-first">
                    <div class="row large-columns-1 medium-columns- small-columns-1">

                        @isset($data)
                        @foreach($data as $value)

                        <div class="col post-item">
                            <div class="col-inner"> <a href="{{ route('details', $value->link) }}" class="plain">
                                    <div class="box box-vertical box-text-bottom box-blog-post has-hover">
                                        <div class="box-image" style="width:40%;">
                                            <div class="image-cover" style="padding-top:56%;"> <img data-lazyloaded="1" src="{{ asset($value->image) }}"></div>
                                        </div>
                                        <div class="box-text text-left">
                                            <div class="box-text-inner blog-post-inner">
                                                <h3 class="post-title is-large ">{!! strip_tags($value->title) !!}</h3>
                                                <div class="is-divider"></div>
                                                <p class="from_the_blog_excerpt ">{{   _substrs(strip_tags($value->content), 250)   }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>

                        @endforeach
                        @endif
                        
                    </div>
                    <!-- <ul class="page-numbers nav-pagination links text-center">
                        <li><span aria-current="page" class="page-number current">1</span></li>
                        <li><a class="page-number" href="https://tlclighting.com.vn/category/tin-hoat-dong/page/2/">2</a></li>
                        <li><a class="page-number" href="https://tlclighting.com.vn/category/tin-hoat-dong/page/3/">3</a></li>
                        <li><a class="page-number" href="https://tlclighting.com.vn/category/tin-hoat-dong/page/4/">4</a></li>
                        <li><span class="page-number dots">…</span></li>
                        <li><a class="page-number" href="https://tlclighting.com.vn/category/tin-hoat-dong/page/7/">7</a></li>
                        <li><a class="next page-number" href="https://tlclighting.com.vn/category/tin-hoat-dong/page/2/"><i class="icon-angle-right"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </main>
  
    @endsection
   
    


<!-- Load time: 0.126 seconds  / 4 mb-->
<!-- Powered by HuraStore 7.4.4, Released: 12-Aug-2018 / Website: www.hurasoft.vn -->