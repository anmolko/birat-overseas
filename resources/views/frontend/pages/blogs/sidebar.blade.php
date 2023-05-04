<div class="sidebar">
    <div class="sidebar__single sidebar__search">
        <form method="get" id="searchform" action="{{route('searchBlog')}}" class="sidebar__search-form">
            <input
                type="text"
                id="s"
                name="s"
                placeholder="Search Blogs....."
                oninvalid="this.setCustomValidity('Type a keyword')" oninput="this.setCustomValidity('')" required
            />
            <button type="submit"><i class="icon-magnifying-glass"></i></button>
        </form>
    </div>
    <div class="sidebar__single sidebar__post">
        @if(count($latestPosts)>0)
            <h3 class="sidebar__title">Latest Posts</h3>
            <ul class="sidebar__post-list list-unstyled">
                @foreach($latestPosts as $index => $latest)
                    <li>
                    <div class="sidebar__post-image">
                        <img src="{{(@$latest->image) ? asset('/images/blog/thumb/thumb_'.@$latest->image):''}}" alt="">
                    </div>
                    <div class="sidebar__post-content">
                        <h3>
                             <span class="sidebar__post-content-meta">
                                 <i class="far fa-calendar-alt"></i> {{date('j M, Y',strtotime(@$latest->created_at))}}</span>
                            <a href="{{route('blog.category',@$latest->slug)}}">{{ucwords(@$latest->title)}}</a>
                        </h3>
                    </div>
                </li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="sidebar__single sidebar__category">
        @if(!empty($bcategories))
            <h3 class="sidebar__title">Categories</h3>
            <ul class="sidebar__category-list list-unstyled">
                @foreach(@$bcategories as $bcategory)
                    <li><a href="{{route('blog.category',@$bcategory->slug)}}">   {{ucwords(@$bcategory->name)}} ({{$bcategory->blogs->count()}}) <span
                                class="fas fa-angle-double-right"></span></a></li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
