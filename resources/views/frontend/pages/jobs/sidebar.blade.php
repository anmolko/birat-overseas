<aside class="sidebar">
    <div class="sidebar-inner inner sticky-box">

        <!-- Search -->
        <div class="sidebar-widget search-box">
            <form method="get" id="searchform" action="{{route('searchJob')}}">
                <div class="form-group">
                    <input
                        type="text"
                        id="s"
                        name="s"
                        placeholder="Search Jobs....."
                        oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
                    />
                    <button type="submit"><span class="icon fa fa-search"></span></button>
                </div>
            </form>
        </div>

        <!--Popular Posts-->
        <div class="sidebar-widget popular-posts">
            <div class="sidebar-title">
                <h2>Recent Posts</h2>
            </div>
            @foreach($latestJobs as $index => $latest)
                <article class="post">
                    <figure class="post-thumb"><a href="{{route('job.single',@$latest->slug)}}">
                            <img src="{{(@$latest->image) ? asset('/images/job/thumb/thumb_'.@$latest->image):''}}" alt=""></a>
                    </figure>
                    <div class="post-info">
                        @if(@$latest->end_date >= $today)
                            Expires on - {{date('M j, Y',strtotime(@$latest->end_date))}}
                        @else
                            Expired
                        @endif
                    </div>
                    <div class="text"><a href="{{route('job.single',@$latest->slug)}}">
                            {{ucwords(@$latest->name)}}
                        </a></div>
                </article>
            @endforeach

        </div>

    </div>
</aside>
