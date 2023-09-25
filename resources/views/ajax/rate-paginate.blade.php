@if(!empty($comment) && $comment->count()>0)

@foreach($comment as $comments)
<?php 

    $now = Carbon\Carbon::now();
    Carbon\Carbon::setLocale('vi');
?>

<div class="cls">
    <div class="_contents">
        <div class="_item  rep_75082 _level_0 _sub_0">
            <article itemprop="review" itemscope="" itemtype="http://schema.org/Review">
                <p class="clearfix cls" itemscope="" itemprop="author" itemtype="http://schema.org/Person"><span class="_name" itemprop="name">{{ $comments->name }}</span>
                    <label class="sttB"><i class="iconcom-checkbuy"></i>Đã mua tại kaw.vn</label>
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

@endif








