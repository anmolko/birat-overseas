<aside class="sidebar">
    <div class="sidebar-inner inner sticky-box">
        @if(!empty($latestServices))
            <!--Popular Posts-->
            <div class="sidebar-widget popular-posts">
                <div class="sidebar-title">
                    <h2>Recent Posts</h2>
                </div>
                @foreach($latestServices as $index => $latest)
                    <article class="post">
                        <figure class="post-thumb"><a href="{{route('service.single',$latest->slug)}}">
                                <img src="{{ ($latest->banner_image !== null) ? asset('/images/service/thumb/thumb_'.@$latest->banner_image):""}}"
                                     alt=""></a>
                        </figure>
                        <div class="post-info"> {{date('j M, Y',strtotime(@$latest->created_at))}}</div>
                        <div class="text"><a
                                href="{{route('service.single',$latest->slug)}}">{{ucwords(@$latest->title)}}</a></div>
                    </article>
                @endforeach

            </div>
        @endif
    </div>
</aside>
