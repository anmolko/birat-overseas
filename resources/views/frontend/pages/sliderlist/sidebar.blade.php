<aside class="sidebar">
    <div class="sidebar-inner inner sticky-box">

        <!--Popular Posts-->
        <div class="sidebar-widget popular-posts">
            <div class="sidebar-title">
                <h2>Recent List</h2>
            </div>
            @foreach($slider_lists as $index => $latest)
                <article class="post">
                    <figure class="post-thumb"><a href="{{url('/slider-list/'.$latest->subheading)}}">
                            <img src="{{ asset('/images/section_elements/list_1/thumb/thumb_'.$latest->list_image) }}" alt=""></a>
                    </figure>
                    <div class="post-info">
                        {{date('j M, Y',strtotime(@$latest->created_at))}}
                    </div>
                    <div class="text"><a href="{{url('/slider-list/'.$latest->subheading)}}">
                            {{{ucwords(@$latest->list_header)}}}
                        </a></div>
                </article>
            @endforeach

        </div>

    </div>
</aside>
