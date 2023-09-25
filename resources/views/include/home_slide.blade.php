



    <div class="row home031 large-columns-4 medium-columns-1 small-columns-1 row-xsmall slider row-slider slider-nav-reveal slider-nav-push" data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : 5000}'>

        @if(!empty($data)  && $data->count()>0)
        @foreach($data as $value)
        <div class="col post-item">
            <div class="col-inner"> 
                <a href="{{ route('details', $value->link) }}" class="plain">
                    <div class="box box-normal box-text-bottom box-blog-post has-hover">
                        <div class="box-image">
                            <div class="image-cover" style="padding-top:75%;"> 
                                <img data-lazyloaded="1" src="{{ asset($value->image) }}" width="300" height="169" data-src="" data-srcset="{{ asset($value->image) }}" data-sizes="(max-width: 300px) 100vw, 300px" />
                            </div>
                        </div>
                        <div class="box-text text-center is-small" style="background-color:rgb(212, 212, 212);">
                            <div class="box-text-inner blog-post-inner">
                                <h3 class="post-title is-large ">{{ $value->title }}</h3>
                                <div class="is-divider"></div>
                            </div>
                        </div>
                        <div class="badge absolute top post-date badge-outline">
                            <div class="badge-inner"> <span class="post-date-day">25</span><br> <span class="post-date-month is-xsmall">Th5</span></div>
                        </div>
                    </div>

                </a>
            </div>
        </div>
        @endforeach

        @endif
    </div>    

