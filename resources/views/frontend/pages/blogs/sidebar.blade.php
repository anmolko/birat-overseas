<aside class="sidebar">
    <div class="sidebar-inner inner sticky-box">

        <!-- Search -->
        <div class="sidebar-widget search-box">
            <form method="get" id="searchform" action="{{route('searchBlog')}}">
                <div class="form-group">
                    <input
                        type="text"
                        id="s"
                        name="s"
                        placeholder="Search Blogs....."
                        oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
                    />
                    <button type="submit"><span class="icon fa fa-search"></span></button>
                </div>
            </form>
        </div>

        <!--Blog Category Widget-->
        <div class="sidebar-widget sidebar-blog-category">
            @if(!empty($bcategories))
                <div class="sidebar-title">
                    <h2>Categories</h2>
                </div>
                <ul class="blog-cat">
                    @foreach(@$bcategories as $bcategory)
                        <li><a href="{{route('blog.category',$bcategory->slug)}}">
                                {{ucwords(@$bcategory->name)}} ({{$bcategory->blogs->count()}})
                            </a></li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!--Popular Posts-->
        <div class="sidebar-widget popular-posts">
            <div class="sidebar-title">
                <h2>Recent Posts</h2>
            </div>
            @foreach($latestPosts as $index => $latest)
                <article class="post">
                    <figure class="post-thumb"><a href="{{route('blog.single',@$latest->slug)}}">
                            <img src="{{(@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}" alt=""></a>
                    </figure>
                    <div class="post-info">{{date('j M, Y',strtotime(@$latest->created_at))}}</div>
                    <div class="text"><a href="{{route('blog.single',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a></div>
                </article>
            @endforeach

        </div>

    </div>
</aside>
